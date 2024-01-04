<?php

if (!isset($_GET['id'])) {
    header('index.php');
}

// RÉCUPÉRATION DE L'ID
$id = $_GET['id'];

// CONVERTION EN INT
$id = intval($id);

// SI L'ID N'EST PAS NUMÉRIQUE => headerION
if (!$id) {
    header('index.php');
}

// RÉCUPÉRATION DU COCKTAIL
// $cocktail = listCocktails($id);

// SI LE COCKTAIL N'EXISTE EN BDD => headerION
if (empty($cocktail)) {
    header('index.php');
}


/*********** CHARGEMENT DE LA VUE ************** */
require_once("pages/mocktails-details.php");
