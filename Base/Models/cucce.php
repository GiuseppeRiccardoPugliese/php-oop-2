<?php
//Includo la classe padre: prodotto
require_once __DIR__ . '/prodotto.php';

//CLASSE CUCCE
class Cucce extends Prodotto
{
    private $dimensione;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo, $dimensione)
    {
        parent::__construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo);
        $this->setDimension($dimensione);
    }

    //Get & Set DIMENSIONE cuccia
    public function getDimension()
    {
        return $this->dimensione;
    }
    public function setDimension($dimensione)
    {
        $this->dimensione = $dimensione;
    }

    public function viewDetails()
    {
        parent::viewDetails();
        echo "<p>Dimensione: {$this->dimensione} cm</p>";
    }
}
