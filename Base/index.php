<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc

Stampiamo delle card contenenti i dettagli dei **prodotti**, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo` che si sta visualizzando (prodotto, cibo, gioco, cuccia, ecc). -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap include -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>php-oop-2</title>
    <?php
    require_once __DIR__ . '/db.php';
    ?>
</head>

<body>

    <?php
    foreach ($array_prodotti as $prod) {
    ?>

        <div class="card" style="width: 18rem; margin: 10px;">
            <img src="<?php echo $prod->getImg() ?>" class="card-img-top" alt="<?php echo $prod->getTitle() ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $prod->getTitle() ?></h5>
                <p class="card-text"> Prezzo: <?php echo $prod->getPrice() ?> euro </p>
                <p class="card-text"> Categoria: <img src="<?php echo $prod->getIcon()->getCategory() ?>" alt="<?php echo $prod->getIcon()->getCategory() ?>"></p>
                <p class="card-text"> Tipo: <?php echo $prod->getType() ?></p>
                <p class="card-text"><?php echo $prod->get() ?></p>
            </div>

        </div>

    <?php
    }
    ?>

</body>

</html>