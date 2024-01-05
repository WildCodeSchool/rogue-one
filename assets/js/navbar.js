// let sections = document.querySelectorAll("section");
// let navLinks = document.querySelectorAll("header nav a");
// window.onscroll = () => {
//   sections.forEach((sec) => {
//     let top = window.scrollY;
//     let offset = sec.offsetTop - 150;
//     let height = sec.offsetHeight;
//     let id = sec.getAttribute("id");
//     if (top >= offset && top < offset + height) {
//       navLinks.forEach((links) => {
//         links.classList.remove("active");
//         document
//           .querySelector("header nav a[href*=" + id + "]")
//           .classList.add("active");
//       });
//     }
//   });
// };

let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((sec) => {
    const sectionTop = sec.offsetTop - 150;
    const sectionHeight = sec.offsetHeight;
    if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
      current = sec.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href").includes(current)) {
      link.classList.add("active");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const menuTrigger = document.querySelector(".menu-trigger");
  const mobileMenu = document.querySelector(".main-nav ul.nav");

  menuTrigger.addEventListener("click", function (event) {
    event.preventDefault();
    mobileMenu.classList.toggle("open");
  });

  window.addEventListener("click", function (event) {
    if (
      !event.target.matches(".menu-trigger") &&
      !event.target.closest(".main-nav")
    ) {
      mobileMenu.classList.remove("open");
    }
  });
});
