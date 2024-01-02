<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Villa Agency - Property Detail Page</title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/owl.css">
  <link rel="stylesheet" href="../../assets/css/animate.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <?php include_once("../include/preloader_js.php") ?>
  <?php include_once("../include/navbar.php") ?>
  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="../../assets/images/blue_cocktail.jpg" alt="">
          </div>
          <div class="main-content">
            <span class="category">Exotique</span>
            <h4><?php $cocktails["id"]?></h4>
          </div>
        </div>
      </div>

      <?php include_once("../include/footer.php") ?>

      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="../../assets/js/isotope.min.js"></script>
      <script src="../../assets/js/owl-carousel.js"></script>
      <script src="../../assets/js/counter.js"></script>
      <script src="../../assets/js/custom.js"></script>
</body>

</html>