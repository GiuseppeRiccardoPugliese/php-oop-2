<?php
//Includes: 
require_once __DIR__ . '/Models/prodotto.php';
require_once __DIR__ . '/Models/cibo.php';
require_once __DIR__ . '/Models/giochi.php';
require_once __DIR__ . '/Models/cucce.php';
require_once __DIR__ . '/Models/cardview.php';
require_once __DIR__ . '/Models/categorie.php';
require_once __DIR__ . '/Models/negozio.php';


//Categoria cani/gatti
$caniCategory = new Categoria('Cani');
var_dump($caniCategory);
echo '<br>';
$gattiCategory = new Categoria('Gatti');
var_dump($gattiCategory);
echo '<br> <br>';

$cardView = new CardView();

$cibo = new Cibo('img/cibo.jpg', 'Croccantini premium', 19.99, 'img/cani-icon.png', 'Cibo', 2);
$giochi = new Giochi('img/giochi.jpg', 'Pallina rimbalzante', 9.99, 'img/cani-icon.png', 'Gioco', 'Pallina');
$cuccia = new Cucce('img/cuccia.jpg', 'Cuccia deluxe', 49.99, 'img/cani-icon.png', 'Cuccia', 'Grande');

$cardView->viewDetails($cibo);
$cardView->viewDetails($giochi);
$cardView->viewDetails($cuccia);
