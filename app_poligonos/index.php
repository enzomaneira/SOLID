<?php 

require __DIR__ ."/vendor/autoload.php";

use src\poligonos\Retangulo;
use src\poligonos\Quadrado;
use src\Poligono;

$poligono = new Poligono();

$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '<pre>';
echo '<h3>Área do retângulo: '.$poligono->getArea().'</h3>';



/*

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);




$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do quadrado: '.$quadrado->getArea().'</h3>';

*/;