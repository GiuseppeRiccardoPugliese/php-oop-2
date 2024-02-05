<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc

Stampiamo delle card contenenti i dettagli dei **prodotti**, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo` che si sta visualizzando (prodotto, cibo, gioco, cuccia, ecc). -->

<?php
class prodotto
{
    private $immagine;
    private $titolo;
    private $prezzo;
    private $icona_Categoria;
    private $tipo_Articolo;

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
}

class cibo extends prodotto
{
}

class giochi extends prodotto
{
}

class cucce extends prodotto
{
}
?>