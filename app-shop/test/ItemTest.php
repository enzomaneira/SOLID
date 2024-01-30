<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends  TestCase{ 

    public function testEstadoIniciazlItemm() {

        $item = new Item();

        $item->getDescricao() == '';
        $item->getValor() == 0;

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetSetDescricao() {
        $descricao = 'Cadeira de Plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

}