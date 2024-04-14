// Fonction pour changer l'image de fond en fonction du lien cliqué
function changeBackgroundImage(href) {
    const pageHeading = document.querySelector('.page-heading');
    switch (href) {
        case "{{ path('app_home') }}":
            pageHeading.style.backgroundImage = "url('/chemin/vers/ton/image/navbar1.jpg')";
            break;
        case "{{ path('app_product_index') }}":
            pageHeading.style.backgroundImage = "url('/chemin/vers/ton/image/navbar2.jpg')";
            break;
        case "{{ path('app_contact') }}":
            pageHeading.style.backgroundImage = "url('/chemin/vers/ton/image/navbar3.jpg')";
            break;
        case "{{ path('app_about_us') }}":
            pageHeading.style.backgroundImage = "url('../assets/images/banner-01.jpg')";
            break;
        // Ajoutez d'autres cas selon vos besoins pour chaque lien de la navbar
        default:
            // Fallback si aucun lien ne correspond
            pageHeading.style.backgroundImage = "url('../assets/images/banner-01.jpg')";
            break;
    }
}
