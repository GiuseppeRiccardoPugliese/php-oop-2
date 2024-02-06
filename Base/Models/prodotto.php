<?php
//Inclusione TRAIT
require_once __DIR__ . '/trait.php';

//padre: ClASSE PRODOTTO
class Prodotto
{
    use prodParams;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo)
    {
        $this->setImg($immagine);
        $this->setTitle($titolo);
        $this->setPrice($prezzo);
        $this->setIcon($icona_Categoria);
        $this->setType($tipo_Articolo);
    }

    use getterProd;
    //Get & Set IMMAGINE

    public function setImg($immagine)
    {
        $this->immagine = $immagine;
    }

    //Get & Set TITLE

    public function setTitle($titolo)
    {
        $this->titolo = $titolo;
    }

    //Get & Set PREZZO

    public function setPrice($prezzo)
    {
        if ($prezzo < 0) {
            throw new Exception("<br>$prezzo deve essere maggiore di 0");
        }

        $this->prezzo = $prezzo;
    }

    //Get & Set ICONA DELLA CATEGORIA

    public function setIcon($icona_Categoria)
    {
        $this->icona_Categoria = $icona_Categoria;
    }

    //Get & Set TIPO ARTICOLO

    public function setType($tipo_Articolo)
    {
        $this->tipo_Articolo = $tipo_Articolo;
    }

    public function get()
    {
        return '//';
    }

    // public function viewDetails()
    // {
    //     echo "<div class='card'>";
    //     echo "<img src='{$this->immagine}' alt='{$this->titolo}'>";
    //     echo "<h3>{$this->titolo}</h3>";
    //     echo "<p>Prezzo: €{$this->prezzo}</p>";
    //     echo "<p>Categoria: <img src='{$this->icona_Categoria}' alt='{$this->icona_Categoria}'></p>";
    //     echo "<p>Tipo: {$this->tipo_Articolo}</p>";
    //     echo "</div>";
    // }
}
