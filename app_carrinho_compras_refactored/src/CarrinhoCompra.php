<?php

namespace src;

use src\Item;

class CarrinhoCompra {

    // atributos
    private $itens;

    // métodos
    public function __construct(){
        $this->itens = [];
    }

    public function getItens(){
        return $this->itens;
    }

    public function addItem(Item $item){ // tipando $item de acordo com a classe Item, indicando a function que ela aceita esse parâmetro apenas se for uma instância da classe Item
        array_push($this->itens, $item);
    }

    public function validarCarrinho(){
        return !empty($this->itens);
    }
}