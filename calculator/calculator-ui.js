// calc-ui.js
// UI helpers that can be reused across all calculator pages.
// Requires jQuery + Chart.js (for pages that draw charts) and callCalculator already loaded.

/**
 * Keep a range input and a number/text input in sync.
 * @param {string} rangeSel - selector for <input type="range">
 * @param {string} inputSel - selector for paired input
 * @param {(val:string)=>void} [onChange] - optional callback with new value
 */
function bindRangeAndInput(rangeSel, inputSel, onChange) {
  $(rangeSel).on("input", function () {
    if ($(inputSel).val() !== this.value) {
      $(inputSel).val(this.value);
      if (onChange) onChange(this.value);
    }
  });
  $(inputSel).on("input", function () {
    if ($(rangeSel).val() !== this.value) {
      $(rangeSel).val(this.value);
      if (onChange) onChange(this.value);
    }
  });
}

/**
 * Wire up a calculator form: handles loader in submit button, calls API, and passes data to onSuccess.
 * Button markup expected:
 * <button type="submit" ...>
 *   <span class="calc-text">Calculate</span>
 *   <span class="calc-loader spinner-border spinner-border-sm d-none" aria-hidden="true"></span>
 * </button>
 *
 * @param {string} formSelector - e.g. ".calc-form"
 * @param {{ onSuccess: (data:Object, $form:jQuery)=>void, beforeSend?:( $form:jQuery )=>void, afterDone?:( $form:jQuery )=>void }} opts
 */
function setupCalculatorForm(
  formSelector,
  { onSuccess, beforeSend, afterDone } = {}
) {
  $(formSelector).on("submit", function (e) {
    e.preventDefault();
    const $form = $(this);
    const calcKey = $form.data("calculator");

    const $btn = $form.find("button[type=submit]");
    const $text = $btn.find("span.calc-text");
    const $loader = $btn.find("span.calc-loader");

    if (beforeSend) beforeSend($form);

    // Show loader state
    $btn.prop("disabled", true);
    if ($text.length) $text.text("Calculating...");
    if ($loader.length) $loader.removeClass("d-none");

    callCalculator($form, { calculator: calcKey }).then((res) => {
      // Restore button state
      $btn.prop("disabled", false);
      if ($text.length) $text.text("Calculate");
      if ($loader.length) $loader.addClass("d-none");

      if (afterDone) afterDone($form);

      if (!res.ok) {
        alert(res.error || "Calculation failed");
        return;
      }
      onSuccess && onSuccess(res.data, $form);
    });
  });
}

/**
 * Attach a reset handler that hides result boxes and runs an optional cleanup (e.g., destroy charts).
 * @param {string} resetSelector - e.g. "#sipReset"
 * @param {{ onReset?: ()=>void, resultBoxSelector?: string }} opts
 */
function setupReset(
  resetSelector,
  { onReset, resultBoxSelector = ".result-box" } = {}
) {
  $(resetSelector).on("click", function () {
    $(resultBoxSelector).addClass("d-none");
    if (onReset) onReset();
  });
}

// Auto-run calculator once the page has fully loaded (images, css, etc.)
$(window).on("load", function () {
  const $btn = $("#calculator-submit-btn");

  if ($btn.length && !$btn.prop("disabled")) {
    // Give any DOM-ready bindings (setupCalculatorForm) a tick to attach
    setTimeout(() => $btn.trigger("click"), 0);
    return;
  }

  // Fallback: if the ID isn't present, submit the first .calc-form
  const $form = $(".calc-form").first();
  if ($form.length) {
    setTimeout(() => $form.trigger("submit"), 0);
  }
});
