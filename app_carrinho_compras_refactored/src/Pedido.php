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
        $this->valorPedido = 0;

    }

    public function getCarrinhoCompra(){
        return $this->carrinhoCompra;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function setValorPedido(float $valorPedido){
        $this->valorPedido = $valorPedido;
    }

    public function getValorPedido(){
        return $this->valorPedido;
    }

    public function confirmar(){

        if($this->carrinhoCompra->validarCarrinho()){
            $this->setStatus('confirmado');
            return true;
        }

        return false;
    }

}