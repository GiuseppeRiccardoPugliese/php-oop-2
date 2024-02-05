<?php
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
