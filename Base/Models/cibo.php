<?php
//Includo la classe padre: prodotto
require_once __DIR__ . '/prodotto.php';

//CLASSE CIBO
class Cibo extends Prodotto
{
    private $peso;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo, $peso)
    {
        //Keyword parent:: per riferirmi al construct della classe madre
        parent::__construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo);
        $this->setWeight($peso);
    }

    //Get & Set PESO cibo
    public function getWeight()
    {
        return $this->peso;
    }
    public function setWeight($peso)
    {
        $this->peso = $peso;
    }

    public function viewDetails()
    {
        parent::viewDetails();
        echo "<p>Peso: {$this->peso} kg</p>";
    }
}
