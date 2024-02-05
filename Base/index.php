<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc

Stampiamo delle card contenenti i dettagli dei **prodotti**, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo` che si sta visualizzando (prodotto, cibo, gioco, cuccia, ecc). -->

<?php
//CLASSE PADRE

//ClASSE PRODOTTO
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
}

//CLASSI FIGLIE

//CLASSE CIBO
class Cibo extends prodotto
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
}

//CLASSE GIOCHI
class Giochi extends prodotto
{
    private $tipo_gioco;

    //Construct
    public function __construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo, $tipo_gioco)
    {
        parent::__construct($immagine, $titolo, $prezzo, $icona_Categoria, $tipo_Articolo);
        $this->setTypeGioco($tipo_gioco);
    }

    //Get & Set TIPO di gioco
    public function getTypeGioco()
    {
        return $this->tipo_gioco;
    }
    public function setTypeGioco($tipo_gioco)
    {
        $this->tipo_gioco = $tipo_gioco;
    }
}

//CLASSE CUCCE
class Cucce extends prodotto
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
}



//CLASSE CATEGORIA per i cani/gatti  NB.!! NON SI ESTENDE SU NESSUNA CLASSE
class Categoria
{

    private $nome;

    //Construct
    public function __construct($nome)
    {
        $this->setCategory($nome);
    }

    //Get & Set CATEGORIA per i cani/gatti
    public function getCategory()
    {
        return $this->nome;
    }
    public function setCategory($nome)
    {
        $this->nome = $nome;
    }
}
?>