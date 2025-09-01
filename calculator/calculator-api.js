// calculator-api.js
// Requires jQuery. Purpose: JUST call the API and return normalized JSON.

/**
 * callCalculator
 * @param {HTMLFormElement|jQuery|Object} src - form element/jQuery form OR plain data object
 * @param {Object} opts
 * @param {String} [opts.calculator] - calculator key (e.g. 'sip', 'lumpsum', etc.)
 * @param {String} [opts.url='./calculator/calc.php'] - endpoint URL
 * @param {Number} [opts.timeout=15000] - ms
 * @param {String} [opts.csrfToken] - optional CSRF token value (sent as X-CSRF-Token header)
 * @returns {Promise<{ok:boolean, data?:Object, error?:string, raw?:any}>}
 */
function callCalculator(src, opts = {}) {
  const url = opts.url || "./calculator/calc.php";
  const timeout = Number(opts.timeout || 15000);

  // Build FormData regardless of input type
  const fd = new FormData();

  // If src is a form/jQuery form, serialize it into FormData
  if (src && (src.nodeType === 1 || (src.jquery && src.length))) {
    const $form = src.jquery ? src : $(src);

    // Pull all controls (works for inputs/selects/textareas, incl. files)
    $form.find("input, select, textarea").each(function () {
      const el = this;
      const name = el.name;
      if (!name || el.disabled) return;

      // Handle checkboxes/radios/select-multiple correctly
      if (el.type === "checkbox" || el.type === "radio") {
        if (el.checked) fd.append(name, el.value);
      } else if (el.tagName === "SELECT" && el.multiple) {
        Array.from(el.selectedOptions).forEach((opt) =>
          fd.append(name, opt.value)
        );
      } else {
        fd.append(name, el.value);
      }
    });
  } else if (src && typeof src === "object") {
    // Plain object -> FormData
    Object.keys(src).forEach((k) => {
      const v = src[k];
      // allow arrays
      if (Array.isArray(v)) v.forEach((item) => fd.append(k, item));
      else if (v !== undefined && v !== null) fd.append(k, v);
    });
  }

  // Add/override calculator key if provided
  if (opts.calculator) fd.set("calculator", opts.calculator);

  // jQuery AJAX options
  const ajaxOpts = {
    url,
    method: "POST",
    data: fd,
    processData: false, // don't transform FormData
    contentType: false, // let browser set boundary
    dataType: "json", // expect JSON back
    timeout,
    headers: {},
  };

  if (opts.csrfToken) {
    ajaxOpts.headers["X-CSRF-Token"] = opts.csrfToken;
  }

  // Return a real Promise with normalized shape
  return new Promise((resolve) => {
    $.ajax(ajaxOpts)
      .done(function (json, textStatus, jqXHR) {
        // Expecting { ok: boolean, data?: object, error?: string }
        if (json && json.ok) {
          resolve({
            ok: true,
            data: json.data ?? {},
            raw: { json, textStatus, status: jqXHR.status },
          });
        } else {
          const errorMsg =
            (json &&
              (json.error || json.message || json.msg || json.status_msg)) ||
            "Calculation failed";
          resolve({
            ok: false,
            error: String(errorMsg),
            raw: { json, textStatus, status: jqXHR.status },
          });
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        const status = jqXHR ? jqXHR.status : 0;
        const msg = status
          ? `HTTP ${status} ${jqXHR.statusText || ""}`.trim()
          : errorThrown || textStatus || "Network error";
        resolve({
          ok: false,
          error: msg,
          raw: { textStatus, errorThrown, status },
        });
      });
  });
}
