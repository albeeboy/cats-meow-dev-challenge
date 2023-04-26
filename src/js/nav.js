// nav JS functions
(function () {
  const openNav = (evt) => {
    evt.stopImmediatePropagation();
    navComponent.classList.add("nav-open");
    evt.currentTarget.removeEventListener("click", openNav, false);
    evt.currentTarget.addEventListener("click", closeNav, false);
  };

  const closeNav = (evt) => {
    evt.stopImmediatePropagation();
    navComponent.classList.remove("nav-open");
    evt.currentTarget.removeEventListener("click", closeNav, false);
    evt.currentTarget.addEventListener("click", openNav, false);
  };

  const navComponent = document.getElementById("main-nav");
  const pawButton = document.querySelector(".paw-button");

  pawButton.addEventListener("click", openNav, false);
  pawButton.addEventListener("click", closeNav, false);
})();
