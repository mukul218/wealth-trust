(() => {
  // ---------- Indian currency formatter ----------
  const fmt = new Intl.NumberFormat("en-IN", {
    style: "currency",
    currency: "INR",
    maximumFractionDigits: 2,
  });

  // ---------- small helpers ----------
  const val = (v) => (v === undefined || v === null || v === "" ? null : v);

  // parse numbers safely from string/number
  const parseAmount = (v) => {
    if (v === null || v === undefined) return null;
    if (typeof v === "number") return v;
    if (typeof v === "string") {
      const cleaned = v.replace(/[^0-9.-]/g, ""); // remove ₹, commas, spaces
      const n = Number(cleaned);
      return Number.isFinite(n) ? n : null;
    }
    return null;
  };

  const money = (v) => {
    const n = parseAmount(v);
    return n === null ? null : fmt.format(n);
  };

  const num = (v) => {
    const n = parseAmount(v);
    return n === null ? null : fmt.format(n);
  };

  const row = (label, value, cols = "col-md-4") =>
    val(value) !== null
      ? `<div class="${cols}"><strong>${label}:</strong> ${value}</div>`
      : "";

  const autoTable = (obj) => {
    const exclude = new Set(["status", "status_msg", "msg", "message"]);
    const keys = Object.keys(obj || {}).filter((k) => !exclude.has(k));
    if (!keys.length) return "";
    return `
      <div class="table-responsive mt-3">
        <table class="table table-sm table-striped mb-0">
          <tbody>
            ${keys
              .map(
                (k) =>
                  `<tr><th class="text-nowrap">${k}</th><td>${escapeHtml(
                    String(obj[k])
                  )}</td></tr>`
              )
              .join("")}
          </tbody>
        </table>
      </div>
    `;
  };

  // ---------- renderer per calculator ----------
  const renderers = {
    sip: (d) => `
      <div class="row gy-2">
        ${row("Status", d.status || d.status_msg || "OK")}
        ${row("Invested", money(d.invested_amount))}
        ${row("Growth", money(d.growth_value))}
        ${row("Maturity", money(d.maturity_amount))}
      </div>
    `,

    lumpsum: (d) => `
      <div class="row gy-2">
        ${row("Status", d.status || d.status_msg || "OK")}
        ${row(
          "Invested (Lumpsum)",
          money(d.invested_amount ?? d.lumpsum_amount)
        )}
        ${row("Growth", money(d.growth_value))}
        ${row("Maturity", money(d.maturity_amount))}
      </div>
    `,

    "target-sip": (d) => `
      <div class="row gy-2">
        ${row("Status", d.status || d.status_msg || "OK")}
        ${row(
          "Target (Future Value)",
          money(d.target_amount_future ?? d.target_amount ?? d.wealth_amount)
        )}
        ${row("Present Value (today)", money(d.present_value))}
        ${row(
          "Required Monthly SIP",
          money(d.required_sip ?? d.monthly_sip ?? d.monthly_investment)
        )}
        ${row("Total Invested", money(d.invested_amount))}
        ${row("Expected Corpus", money(d.maturity_amount ?? d.future_value))}
      </div>
    `,

    vacation: (d) => renderers["target-sip"](d),
    car: (d) => renderers["target-sip"](d),
    house: (d) => renderers["target-sip"](d),
    marriage: (d) => renderers["target-sip"](d),

    "lumpsum-target": (d) => `
      <div class="row gy-2">
        ${row("Status", d.status || d.status_msg || "OK")}
        ${row(
          "Target (Future Value)",
          money(d.target_amount_future ?? d.target_amount)
        )}
        ${row("Present Value (today)", money(d.present_value))}
        ${row(
          "Required Lumpsum Today",
          money(d.required_lumpsum ?? d.lumpsum_amount_needed)
        )}
        ${row("Expected Corpus", money(d.future_value ?? d.maturity_amount))}
      </div>
    `,

    crorepati: (d) => `
      <div class="row gy-2">
        ${row("Status", d.status || d.status_msg || "OK")}
        ${row(
          "Corpus Required @ Retirement",
          money(d.corpus_required ?? d.wealth_amount)
        )}
        ${row("Present Value (today)", money(d.present_value))}
        ${row(
          "Required Monthly SIP",
          money(d.required_sip ?? d.monthly_sip ?? d.monthly_investment)
        )}
        ${row("Total Invested", money(d.invested_amount))}
        ${row("Projected Corpus", money(d.maturity_amount ?? d.future_value))}
      </div>
    `,
    retirement: (d) => renderers["crorepati"](d),
  };

  // ---------- submit handler ----------
  document.addEventListener("submit", async (e) => {
    const form = e.target;
    if (!form.matches("form.calc-form")) return;
    e.preventDefault();

    const box = form.querySelector(".result-box");
    const submitBtn = form.querySelector('[type="submit"]');

    box.className = "alert mt-3 result-box d-none";
    box.textContent = "";

    const originalText = submitBtn ? submitBtn.innerHTML : "";
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Calculating...`;
    }

    const calc = form.dataset.calculator || "";
    const data = new FormData(form);
    data.append("calculator", calc);

    try {
      const res = await fetch("./calculator/calc.php", {
        method: "POST",
        body: data,
      });
      if (!res.ok) throw new Error(`HTTP ${res.status}`);
      const json = await res.json();
      if (!json.ok) throw new Error(json.error || "Failed");

      const d = json.data || {};
      const render = renderers[calc] || (() => "");

      box.classList.remove("d-none");
      box.classList.add("alert-success", "border");

      const summaryHtml = render(d) + autoTable(d);

      box.innerHTML = `
        ${summaryHtml}
        <details class="mt-3">
          <summary class="small text-muted">Raw response</summary>
          <pre class="small mb-0">${escapeHtml(
            JSON.stringify(d, null, 2)
          )}</pre>
        </details>
      `;
    } catch (err) {
      box.classList.remove("d-none");
      box.classList.add("alert-danger", "border");
      box.innerHTML = `<strong>Error:</strong> ${escapeHtml(
        err.message || "Something went wrong"
      )}`;
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    }
  });

  // ---------- reset handler ----------
  document.addEventListener("reset", (e) => {
    const form = e.target;
    if (!form.matches("form.calc-form")) return;
    const box = form.querySelector(".result-box");
    if (box) {
      box.className = "alert mt-3 result-box d-none";
      box.textContent = "";
    }
  });

  function escapeHtml(s) {
    const div = document.createElement("div");
    div.innerText = s ?? "";
    return div.innerHTML;
  }
})();
