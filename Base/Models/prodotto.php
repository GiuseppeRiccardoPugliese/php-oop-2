<?php

//padre: ClASSE PRODOTTO
class Prodotto
{
    private $immagine;
    private $titolo;
    private $prezzo;
    private $icona_Categoria;
    private $tipo_Articolo;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo)
    {
        $this->setImg($immagine);
        $this->setTitle($titolo);
        $this->setPrice($prezzo);
        $this->setIcon($icona_Categoria);
        $this->setType($tipo_Articolo);
    }

    //Get & Set IMMAGINE
    public function getImg()
    {
        return $this->immagine;
    }
    public function setImg($immagine)
    {
        $this->immagine = $immagine;
    }

    //Get & Set TITLE
    public function getTitle()
    {
        return $this->titolo;
    }
    public function setTitle($titolo)
    {
        $this->titolo = $titolo;
    }

    //Get & Set PREZZO
    public function getPrice()
    {
        return $this->prezzo;
    }
    public function setPrice($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    //Get & Set ICONA DELLA CATEGORIA
    public function getIcon()
    {
        return $this->icona_Categoria;
    }
    public function setIcon($icona_Categoria)
    {
        $this->icona_Categoria = $icona_Categoria;
    }

    //Get & Set TIPO ARTICOLO
    public function getType()
    {
        return $this->tipo_Articolo;
    }
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
