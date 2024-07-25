<?php

use PHPUnit\Framework\TestCase;
use src\Item;
use src\Pedido;

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

    public function testEstadoInicialPedido(){
        $pedido = new Pedido();

        // pedido não pode estar com status 'confirmado' ao ser iniciado
        $this->assertNotEquals('confirmado', $pedido->getStatus());

        // pedido não pode estar com valor != de 0 ao ser iniciado
        $this->assertTrue($pedido->getValorPedido() == 0); // assertEquals pode ser usado também neste caso

        // pedido não pode estar preenchido com itens
        $this->assertEquals($pedido->getCarrinhoCompra()->getItens(), []);

        // método precisa retornar false, pois a função realiza uma validação semelhante a anterior (se o carrinho não está vazio)
        $this->assertFalse($pedido->confirmar());
    }

    // provedor de dados para teste
    /**
     * @dataProvider dataValores
     */
    public function testGetESetValor($valor){
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public static function dataValores() {
        return [
            [100],
            [-2],
            [0],
            [5],
        ];
    }
}