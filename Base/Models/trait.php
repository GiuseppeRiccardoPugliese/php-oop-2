<?php
trait prodParams
{
    private $immagine;
    private $titolo;
    private $prezzo;
    private $icona_Categoria;
    private $tipo_Articolo;
}

trait getterProd
{
    public function getImg()
    {
        return $this->immagine;
    }

    public function getTitle()
    {
        return $this->titolo;
    }

    public function getPrice()
    {
        return $this->prezzo;
    }

    public function getIcon()
    {
        return $this->icona_Categoria;
    }

    public function getType()
    {
        return $this->tipo_Articolo;
    }
}
