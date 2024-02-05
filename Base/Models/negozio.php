<?php
//Includo la classe padre: prodotto
require_once __DIR__ . '/prodotto.php';

//CLASSE E-COMMERCE con array $prodotti che mi conterra' eventualmente la lista di tutti i prodotti di un ipotetico shop
class Negozio
{
    private $prodotti = [];

    //Construct
    public function aggiungiProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }
}
