<?php

require __DIR__."/vendor/autoload.php";


use src\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3> Com SRP </h3>';

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
