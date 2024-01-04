/* Style pour la le conteneur "Savourez nos Mocktails" */
.enjoy-our-mocktails {
  display: flex;
  flex-direction: column;
  background-color: #black;
}
.h2-savourez-nos-mocktails-container {
  text-align: center;
}

.h2-savourez-nos-mocktails-container h2 {
  background-color: #f2f2f2;
  font-size: 2em;
  margin-bottom: 10px;
}

.enjoy-our-mocktails-section {
  margin-top: 20px;
  display: flex;
  gap: 50px;
  background-color: green;
}

.enjoy-our-mocktails-section article {
  margin-bottom: 20px;
  height: 50vh;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  flex-grow: 1;
  background-color: #f9f9f9;
}

.enjoy-our-mocktails-section article header {
  text-align: center;
  background-color: #pink;
}

.enjoy-our-mocktails-section article header img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.enjoy-our-mocktails-section article main h3 {
  margin-top: 10px;
  font-size: 1.5em;
  color: #333;
  background-color: #pink;
}

.enjoy-our-mocktails-section article p {
  margin-top: 10px;
  line-height: 1.5;
  color: #666;
  background-color: #pink;
}

<h2>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/home.css">
  <title>Home</title>

  <title>Page d'accueil</title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/animate.css">

  <link rel="stylesheet" href="../assets/css/footer.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <?php include_once("include/preloader_js.php") ?>
  <?php include_once("include/navbar.php") ?>

	  <div class="main-banner">
		    <div class="owl-carousel owl-banner">
				      <div class="item item-1">
							        <div class="header-text">

          <span class="category">Haut <em>de gamme</em></span>
          <h2>Éveillez vos sens avec nos mocktails tendance :<br> </h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category"><em>ZÉRO </em>ALCOOL</span>
          <h2>délices sans alcool</h2>
        </div>
      </div>
 
      <div class="item item-3">
        <div class="header-text">

          <span class="category">Saveurs <em>locales et bio</em></span>
          <h2>sensations inoubliables</h2>
        </div>
        
      </div>
        </div>
      </div>

<div class="enjoy-our-mocktails">
  <div class="h2-savourez-nos-mocktails-container">
    <h2>Savourez nos Mocktails</h2>
  </div>
<section class="enjoy-our-mocktails-section">
<article>
  <header>
    <img src="" alt="">
  </header>
    <main><h3></h3></main>
    <p></p>
  </article>
<article>
  <header>
    <img src="" alt="">
  </header>
    <main><h3></h3></main>
    <p></p>
</article>
<article>
  <header>
    <img src="" alt="">
  </header>
    <main><h3></h3></main>
    <p></p>
</article>
</section>
</div>


  <?php include_once("include/footer.php") ?>

	  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

</body>

</html>
