document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-button");
    const mocktailItems = document.querySelectorAll(".properties-items");
    const pagination = document.querySelector(".pagination");
  
    function filterMocktails(target) {
      mocktailItems.forEach(function (item) {
        if (target === "all" || item.getAttribute("data-tag") === target) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
  
      let displayedMocktails = document.querySelectorAll(
        '.properties-items[style="display: block;"]'
      );
      pagination.style.display =
        displayedMocktails.length < 10 ? "none" : "block";
    }
  
    filterButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const target = this.getAttribute("data-filter");
  
        filterButtons.forEach(function (btn) {
          btn.classList.remove("active");
        });
  
        this.classList.add("active");
        filterMocktails(target);
      });
    });
  });
  