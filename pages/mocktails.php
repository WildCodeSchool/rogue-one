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
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="icon" type="image/png" href="../assets/images/logo.png">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <?php include_once("../include/navbar.php") ?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Accueil</a> / Nos Mocktails</span>
          <h1>Nos Mocktails</h1>
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
  $mocktails = [
    "WARA'TAIL" => [
    "image" => "wara'Tail.png",
    "category" => "energisants-naturels",
    "prix" => "3,50€",
    "detail" => "Boisson énergisante à l'Awara de BIO STRATÈGE (poudre concentrée), au Maracudja (Fruit de la Passion) et à la Mandarine. Sa belle couleur naturelle est grâce aux fruits qui la composent. Son goût est très original et bien fruité."
    ],

    "WASSAÏ'TAIL" => [
    "image" => "wassaï'Tail.png",
    "category" => "energisants-naturels",
    "prix" => "3,50€",
    "detail" => "Boisson énergisante au Wassaï de BIO STRATÈGE (poudre concentrée) et à la Pitaya (Fruit du dragon) et au piment fort. Sa belle couleur naturelle est due aux fruits que contient ce Mocktail. Son goût est très original, fait penser au raisin et le piment chien sublime cette boisson."
    ],

    "PANGA ROUJ'" => [
    "image" => "pangaRouj'.png",
    "category" => "fruits-locaux-epices",
    "prix" => "3,50€",
    "detail" => "Panga (Attention en créole guyanais) à son côté subtil, mais piquant avec le piment Chien. Sa belle couleur grâce au Pitaya. Son délicieux goût de Cerises Péyi."
    ],

    "ICE COFFEE GINGER" => [
    "image" => "iceCoffeeGinger.png",
    "category" => "mariages-saveurs-uniques",
    "prix" => "3,50€",
    "detail" => "Café glacé guyanais parfumé au Gingembre et raffiné en bouche. Sa belle couleur grâce au Café. Son goût est unique et original."
    ],

    "MACOCI" => [
    "image" => "macoci.png",
    "category" => "fruits-locaux-epices",
    "prix" => "3,50€",
    "detail" => "Punch Coco sans Alcool bien crémeux, à base de Maracudja (Fruit de la Passion). Sa belle couleur grâce aux deux principaux fruits que contient ce mocktail. Son goût est très original et bien doux, rappelant une délicieuse pâtisserie fine."
    ],

    "MORINAS" => [
    "image" => "morinas.png",
    "category" => "fraicheur-subtilite",
    "prix" => "3,50€",
    "detail" => "Boisson rafraîchissante à l'Ananas débordant de 'peps' avec sa Menthe bien fraîche et puissante. Sa belle couleur est due à l'Ananas et à la Menthe locale. Son goût est très fruité et mentholé, mais aussi relevé avec le bois d'Inde qui vient sublimer ce Mocktail."
    ],

    "MÉLOJAH GINGER" => [
    "image" => "melojaGinger.png",
    "category" => "energisants-naturels",
    "prix" => "3,50€",
    "detail" => "Boisson bien rafraîchissante bien parfumée au gingembre, sans son côté piquant. Sa belle couleur est surtout due au Melon d’eau. Son goût est très fruité avec les discrets gingembre et maracudja, puis le melon d’eau qui nous affirme sa fraîcheur."
    ],

    "HOT PAPA CHÉWI" => [
    "image" => "hotPapaChewi.png",
    "category" => "chaleur-epice",
    "prix" => "3,50€",
    "detail" => "Boisson bien chaleureuse avec son côté piquant avec le piment chien (fort). Sa belle couleur est due à la Papaye Solo et à la Cerise Péyi (Acerola). Son goût est très fruité et doux avec la Papaye qui apporte de la rondeur et adoucit le piquant du piment."
    ],

    "SOLOJAH" => [
    "image" => "solojah.png",
    "category" => "fruits-locaux-epices",
    "prix" => "3,50€",
    "detail" => "Boisson débordant de 'peps' : à la fois frais et acidulé avec son maracudja. Sa belle couleur est due à la Papaye Solo et au Maracudja (Fruit de la Passion). Son goût est très fruité et doux avec la Papaye qui apporte de la rondeur : il nous fait drôlement penser à du planteur."
    ],

    "PAPAYER PÉYI" => [
    "image" => "papayerPeyi.png",
    "category" => "fruits-d-excellence",
    "prix" => "3,50€",
    "detail" => "Boisson hyper rafraîchissante à la Papaye Solo, à la Citronnelle fraîche et au piment Scorpion. Sa belle couleur est grâce à la Papaye. Son délicieux goût de Thé Péyi fruité, raffiné et pimenté."
    ],

    "THÉ PÉYI DORÉ" => [
    "image" => "thePeyiDore.png",
    "category" => "mariages-saveurs-uniques",
    "prix" => "3,50€",
    "detail" => "Boisson hyper rafraîchissante, parfumée au Maracudja (Fruit de la Passion) et à la Citronnelle fraîche. Sa belle couleur grâce aux couleurs naturelles du Maracudja et de la Citronnelle. Son goût est très original, bien parfumé et subtilement relevé par le gingembre."
    ],

    "HOT BLOOD" => [
    "image" => "hotBlood.png",
    "category" => "chaleur-epice",
    "prix" => "3,50€",
    "detail" => "Boisson bien rafraîchissante bien parfumée avec sa Cerise Péyi et sa Groseille Péyi. Sa belle couleur est due à ces deux fruits. Son goût est très fruité et agréablement acidulé, puis le piment fort vient sublimer notre Mocktail."
    ],

    "YANA START" => [
    "image" => "yanaStart.png",
    "category" => "fruits-d-excellence",
    "prix" => "3,50€",
    "detail" => "Boisson débordante de fraîcheur avec sa Mangue verte et sa Cerise Péyi, relevées par du Piment fort. Sa belle couleur est due au mariage de ces deux fruits. Son goût est rempli de caractère et reste tout de même frais."
    ],

    // "ANANAS GINGER" => [
    // "image" => "image_waratail.png",
    // "category" => "saveurs-exotiques"
    // ],

    // "ANABELLA" => [
    // "image" => "image_waratail.png",
    // "category" => "saveurs-exotiques"
    // ],

    // "DÉTOX TROPI BANANE" => [
    // "image" => "image_waratail.png",
    // "category" => "fruits-locaux-epices"
    // ],

    // "ICE COFFEE CHÉWI" => [
    // "image" => "waratail.png",
    // "category" => "mariages-saveurs-uniques"
    // ],

    // "HOT MANDARINE À LA PASSION" => [
    // "image" => "image_waratail.png",
    // "category" => "saveurs-exotiques"
    // ],

    // "THÉ PANGA" => [
    // "image" => "image_waratail.png",
    // "category" => "fruits-locaux-epices"
    // ],

    // "HOT MANGO TERRE" => [
    // "image" => "image_waratail.png",
    // "category" => "saveurs-exotiques"
    // ],

    // "CERANJA" => [
    // "image" => "ceranja.png",
    // "category" => "fraicheur-subtilite",
    // "detail" => "Boisson hyper rafraîchissante à l’Orange Péyi et à la Cerise Péyi. Sa belle couleur est grâce à l’association de ces deux fruits. Son goût est délicieux et dépasse celui d’un jus d’orange nature."
    // ]
];

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
        
        <div class="product-details" hidden">
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

      <div id="mocktails-data" hidden">
        <?php echo json_encode($mocktails); ?>
      </div>

</div>

  <?php include_once("../include/footer.php") ?>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/page-detail.js"></script>


</body>

</html>