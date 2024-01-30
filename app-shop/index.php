<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Pedido;
use src\EmailService;

use src\Item;


echo '<h3>Com SRP<h3>';

$pedido = new Pedido();

$item1 = new Item();    
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);
$item2->setDescricao('Lâmpada'); 
$item2->setValor(8.35);

echo '<h4>Pedido<h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

$pedido->getCarrinhoCompra()->adicionarItem($item1);
