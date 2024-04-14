document.addEventListener("DOMContentLoaded", function () {
  function updateNavbarBrand() {
    let screenWidth = window.innerWidth;
    let navbarBrand = document.getElementById("navbarBrand");

    if (screenWidth < 450) {
      navbarBrand.textContent = "MC";
    } else {
      navbarBrand.textContent = "MOCKTAIL CELESTE";
    }
  }

  updateNavbarBrand();

  window.addEventListener("resize", function () {
    updateNavbarBrand();
  });
});
