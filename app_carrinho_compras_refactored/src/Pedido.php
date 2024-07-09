<?php

namespace src;

use src\CarrinhoCompra;

class Pedido {

    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct(){
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
    }

}