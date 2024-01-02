<?php

/*********** CHARGEMENT DES LIBRAIRES ************** */
require_once 'lib/debug.php';
require_once 'lib/routing.php';

/*********** CHARGEMENT DU MODÈLE ************** */
require_once 'model/database.php';
require_once 'model/cocktails.php';
require_once 'model/ingredients.php';

/*********** COEUR DU CONTROLEUR ************** */

// SI ON A PAS REÇU D'ID => headerION
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
$cocktail = getCocktailById($id);

// SI LE COCKTAIL N'EXISTE EN BDD => headerION
if (empty($cocktail)) {
    header('index.php');
}


/*********** CHARGEMENT DE LA VUE ************** */
require_once ("pages/mocktails-details.php");
