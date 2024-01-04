<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Nos Mocktails</title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="../assets/css/mocktails.css">
  <link rel="stylesheet" href="../assets/css/mocktail-detail.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<?php include_once("../include/products.php"); ?>

<body>

  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <?php include_once("../include/navbar.php") ?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Accueil</a> / Nos Mocktails</span>
          <h3>Nos Mocktails</h3>
        </div>
      </div>
    </div>
  </div>
  

  <div class="section mocktails">
    <div class="container">
      <ul class="mocktails-filter" id="categories">
    <li>
        <a class="is_active" href="#!" data-filter="*">Tous</a>
    </li>
    <li>
        <a href="#!" data-filter=".energisants-naturels">Énergisants Naturels</a>
    </li>
    <li>
        <a href="#!" data-filter=".saveurs-exotiques">Saveurs Exotiques</a>
    </li>
    <li>
        <a href="#!" data-filter=".fruits-locaux-epices">Fruits Locaux et Épices</a>
    </li>
    <li>
        <a href="#!" data-filter=".chaleur-epice">Chaleur et Épicé</a>
    </li>
    <li>
        <a href="#!" data-filter=".fraicheur-subtilite">Fraîcheur et Subtilité</a>
    </li>
    <li>
        <a href="#!" data-filter=".mariages-saveurs-uniques">Mariages de Saveurs Uniques</a>
    </li>
      </ul>

      <div class="row mocktails-box">

        <?php
        foreach ($mocktails as $mocktailName => $mocktailData) {
          $mocktailImage = "../assets/images/mocktails/" . $mocktailData["image"];
          $mocktailCategory = $mocktailData["category"];
          $normalizedCategory = strtolower(str_replace(' ', '-', $mocktailCategory));
          echo '
          <div class="col-lg-4 col-md-6 align-self-center mb-30 mocktails-items col-md-6 ' . $normalizedCategory . '">
            <div class="item" data-product-name="' . $mocktailName . '">
              <a><img src="' . $mocktailImage . '" alt=""></a>
              <h6>10.00€</h6>
              <h4><a>' . $mocktailName . '</a></h4>
              <div class="main-button">
                <a>Voir le produit</a>
              </div>
            </div>
          </div>';
        }
        ?>
        <!-- Section des détails du produit -->
        <div class="product-details" style="display: none;">
          <div class="main-content">
            <h2 id="product-name"></h2>
            <span id="product-category"></span>
            <p id="product-detail"></p>
            <p id="product-prix">10</p>
            <div class="main-image">
              <img id="product-image" src="" alt="">
            </div>
            <button class="close-btn">Fermer</button>
          </div>
        </div>

      </div>



</div>

  <?php include_once("../include/footer.php") ?>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

  <script>
  const buttons = document.querySelectorAll('.main-button a');
  const productDetails = document.querySelector('.product-details');
  const categories = document.getElementById('categories'); // Sélection de la liste des catégories

  buttons.forEach((button, index) => {
    button.addEventListener('click', (event) => {
      event.preventDefault(); // Empêcher le comportement par défaut du lien

      const product = <?php echo json_encode($mocktails); ?>;
      const productName = Object.keys(product)[index];
      const selectedProduct = product[productName];

      // Afficher les détails du produit sélectionné
      document.getElementById('product-name').innerText = productName;
      document.getElementById('product-category').innerText = `Catégorie: ${selectedProduct.category}`;
      document.getElementById('product-detail').innerText = selectedProduct.detail;
      document.getElementById('product-image').src = `../assets/images/mocktails/${selectedProduct.image}`;
     
      document.addEventListener('DOMContentLoaded', function() {
  var contentElement = document.querySelector('.mocktails-items'); // Remplacez '.mocktails-items' par le sélecteur de votre contenu
  if (contentElement) {
    var contentHeight = contentElement.offsetHeight;
    document.body.style.height = contentHeight + 'px'; // Ajuste la hauteur du corps à la hauteur du contenu
  }
});
      // Cacher la liste des catégories
      categories.style.display = 'none';

      // Cacher tous les éléments mocktails-items
      const allItems = document.querySelectorAll('.mocktails-items');
      allItems.forEach(item => {
        item.style.display = 'none';
      });

      // Afficher la section product-details
      productDetails.style.display = 'block';

      // Scroller jusqu'à la section des détails du produit
      productDetails.scrollIntoView({
        behavior: 'auto', // Défilement instantané
        block: 'start', // Aligner le haut de l'élément à la position de départ du scroll
      });
    });
  });

  document.querySelector('.close-btn').addEventListener('click', () => {
    // Afficher la liste des catégories lorsque le bouton "Fermer" est cliqué
    categories.style.display = 'block';

    // Afficher tous les éléments mocktails-items
    const allItems = document.querySelectorAll('.mocktails-items');
    allItems.forEach(item => {
      item.style.display = 'block';
    });

  });



  </script>

</body>

</html>