document.addEventListener("DOMContentLoaded", function () {
  const h2Elements = document.querySelectorAll("h2");
  h2Elements.forEach((h2) => {
    h2.addEventListener("click", function () {
      this.parentElement.classList.toggle("open");
    });
  });
});
