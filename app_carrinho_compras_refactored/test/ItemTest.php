<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

    public function testEstadoInicialItem(){

        $item = new Item();

        // $item->getDescricao() == '';
        // $item->getValor() == 0;

        // asserções do PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testSetEGetDescricao(){

        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());

    }

    public function testGetESetValor(){

        $valor = 35.92;

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());

    }

    public function testItemValido(){

        $item = new Item();
        // submeter item válido para o teste e retornar true
        $item->setValor(55);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(true, $item->itemValido());

        // submeter item inválido para o teste e retornar false (descricao)
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());

        // submeter item inválido para o teste e retornar false (valor)
        $item->setValor(0);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(false, $item->itemValido());

        // submeter item inválido para o teste e retornar false (descricao e valor)
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }
}