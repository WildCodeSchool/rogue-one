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
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>



<body>

  <?php include_once("../include/preloader_js.php") ?>
  <?php include_once("../include/navbar.php") ?>

  <!-- include_once("../include/products.php") -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb">Nos Mocktails</span>
          <h3>Nos Mocktails</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
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

      <div class="row properties-box">


        <?php

        foreach ($mocktails as $mocktailName => $mocktailData) {
          $mocktailImage = "../assets/images/mocktails/" . $mocktailData["image"];
          $mocktailCategory = $mocktailData["category"];
          $normalizedCategory = strtolower(str_replace(' ', '-', $mocktailCategory));
          echo '
          <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ' . $normalizedCategory . '">
            <div class="item">
              <a href="mocktails-details.php?mocktail=' . urlencode($mocktailName) . '"><img src="' . $mocktailImage . '" alt=""></a>
                <h6>0.00€</h6>
                <h4><a href="mocktails-details.php?mocktail=' . urlencode($mocktailName) . '">' . $mocktailName . '</a></h4>
                <div class="main-button">
                  <a href="mocktails-details.php?mocktail=' . urlencode($mocktailName) . '">Voir le produit</a>
                </div>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>

    <div class="mocktail-details" style="display: none">
      <h2>Détails du produit</h2>
      <p>Nom: <span id="mocktailName"></span></p>
      <p>Description: <span id="mocktailDescription"></span></p>
      <button id="btnClose">Fermer</button>
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
</body>

</html>