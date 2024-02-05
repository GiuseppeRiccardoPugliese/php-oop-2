<?php
//Includo la classe padre: prodotto
require_once __DIR__ . '/prodotto.php';

//CLASSE GIOCHI
class Giochi extends Prodotto
{
    private $tipo_gioco;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo, $tipo_gioco)
    {
        parent::__construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo);
        $this->setTypeGioco($tipo_gioco);
    }

    //Get & Set TIPO di gioco
    public function get()
    {
        return $this->tipo_gioco;
    }
    public function setTypeGioco($tipo_gioco)
    {
        $this->tipo_gioco = $tipo_gioco;
    }

    // public function viewDetails()
    // {
    //     parent::viewDetails();
    //     echo "<p>Tipo di gioco: {$this->tipo_gioco}</p>";
    // }
}
