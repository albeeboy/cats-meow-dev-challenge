// accordion JS functions

(function () {
  const openAccordionEl = (evt) => {
    evt.stopImmediatePropagation();
    const accEl = evt.currentTarget.parentNode;
    accEl.classList.add("open-element");
    if (currentAccEl != null) {
      currentAccEl.classList.remove("open-element");
      const currentAccLabel = currentAccEl.querySelector(".accordion__label");
      currentAccLabel.removeEventListener("click", closeAccordionEl, false);
      currentAccLabel.addEventListener("click", openAccordionEl, false);
    }
    currentAccEl = accEl;
    evt.currentTarget.removeEventListener("click", openAccordionEl, false);
    evt.currentTarget.addEventListener("click", closeAccordionEl, false);
  };

  const closeAccordionEl = (evt) => {
    evt.stopImmediatePropagation();
    const accEl = evt.currentTarget.parentNode;
    accEl.classList.remove("open-element");
    currentAccEl = null;
    evt.currentTarget.removeEventListener("click", closeAccordionEl, false);
    evt.currentTarget.addEventListener("click", openAccordionEl, false);
  };

  let currentAccEl = null;
  const accordions = document.querySelectorAll(".accordion__container");

  accordions.forEach((acc) => {
    const accItems = acc.querySelectorAll("li");
    accItems.forEach((item) => {
      const labelEl = item.querySelector(".accordion__label");
      labelEl.addEventListener("click", openAccordionEl, false);
    });
  });
})();
