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
          <a href="#!" data-filter=".adv">Produit A</a>
        </li>
      </ul>

      <div class="row properties-box">
        <!-- Liste des cocktails -->
        <?php 
        
        function listCocktails(){$cocktails = [
          ['name' => "Tequila Sunrise", 'img' => "../assets/images/blue_cocktail.jpg", 'prix' => 15],
          ['name' => "Mojito", 'prix' => 9],
          ['name' => "Blue lagoon", 'prix' => 15],
          ['name' => "Margarita", 'prix' => 15],
          ['name' => "Piña Colada", 'prix' => 25],
          ['name' => "Gin Tonic", 'prix' => 9],
          ['name' => "Tequila Sunrise", 'prix' => 16],
          ['name' => "Tequila Sunrise", 'prix' => 24]
        ];}

        ?>


        <?php foreach ($cocktails as $cocktail) : ?>
          <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
            <div class="item">
              <a href="mocktails-details.php"><img src="" alt=""><?= $cocktail['img'] ?></a>
              <span class="category">Exotique</span>
              <h6><?= $cocktail['prix'] ?>.00€</h6>
              <h4><a href="mocktails-details.php"><?= $cocktail['name'] ?></a></h4>
              <ul>
                <li>Bedrooms: <span>8</span></li>
              </ul>
              <div class="main-button">
                <a href="mocktails-details.php?$id">Voir le produit</a>
              </div>
            </div>
          </div>;
        <?php endforeach; ?>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a class="is_active" href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">>></a></li>
            </ul>
          </div>
        </div>  -->

      </div>
    </div>

    <?php include_once("../include/footer.php") ?>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/navbar.js"></script>

</body>

</html>