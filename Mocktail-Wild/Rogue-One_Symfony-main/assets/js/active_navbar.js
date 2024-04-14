document.addEventListener("DOMContentLoaded", function () {
    function updateActiveClass() {
        let currentUrl = window.location.pathname.split("/").pop();
        let navLinks = document.querySelectorAll(".navbar-nav .nav-item a");
        navLinks.forEach(function (link) {
            let linkHref = link.getAttribute("href").split("/").pop();
            if (linkHref === currentUrl) {
                link.classList.add("active");
                link.classList.add("inactive"); // Ajouter la classe "inactive" aux liens actifs
            } else {
                link.classList.remove("active");
                link.classList.remove("inactive"); // Supprimer la classe "inactive" des autres liens
            }
        });
    }
    updateActiveClass();

    let navLinks = document.querySelectorAll(".navbar-nav .nav-item a");
    navLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            if (link.classList.contains("inactive")) { // Vérifier si le lien est marqué comme inactif
                event.preventDefault(); // Empêcher le comportement par défaut du lien
            }
        });
    });
});
