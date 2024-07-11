<?php

require __DIR__."/vendor/autoload.php";


use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

$carrinho1 = new CarrinhoCompra();

echo '<h3> Com SRP </h3>';

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('item 1'); 
$item1->setValor(9.99); 

$item2->setDescricao('item 2'); 
$item2->setValor(43423.99); 

echo $item1->getDescricao();
echo '<br>';
echo $item1->getValor();

echo '<br>';
echo '<br>';

echo $item2->getDescricao();
echo '<br>';
echo $item2->getValor();

echo '<h4>Pedido iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

$pedido->getCarrinhoCompra()->addItem($item1);
$pedido->getCarrinhoCompra()->addItem($item2);

echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}
echo $total;

echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo '<h4>Status pedido</h4>';
echo $pedido->getStatus();

$pedido->confirmar();

echo '<h4>Confirmar pedido</h4>';
echo $pedido->getStatus();

echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
    // não há necessidade de instanciar a classe email pois é statica
    echo EmailService::dispararEmail();
}

// print_r($carrinho1->exibirItens());
// echo '<br>';
// echo 'valor total: '.$carrinho1->exibirValorTotal();
// echo '<br>';
// echo 'status: '.$carrinho1->exibirStatus();

// $carrinho1->adicionarItem('teclado mecânico', 98.99);
// // $carrinho1->adicionarItem('garrafa 2l', 342.99);
// // $carrinho1->adicionarItem('fone bluetooth', 444.43);

// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<pre>';
// print_r($carrinho1->exibirItens());
// echo '</pre>';
// echo '<br>';
// echo 'valor total recalculado: '.$carrinho1->exibirValorTotal();

// echo '<br>';
// if($carrinho1->confirmarPedido()){
//     echo 'Pedido realizado com sucesso';
// } else {
//     echo 'Erro na confirmação do pedido. Carrinho não possui itens';
// }

// echo '<br>';
// echo 'status: '.$carrinho1->exibirStatus();
