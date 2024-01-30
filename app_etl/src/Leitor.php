<?php

namespace src;

use src\Arquivo;

use src\extrator\Txt;
use src\extrator\Csv;


class Leitor {
    private $diretorio;
    private $arquivo;


    public function getDiretorio(){
        return $this->diretorio;
    }

    public function setDiretorio($diretorio){   
        $this->diretorio = $diretorio;
    }

    public function getArquivo(){   
        return $this->arquivo;
    }

    public function setArquivo($arquivo){   
        $this->arquivo = $arquivo;
    }  
    
    public function lerArquivo(){
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();

        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivo());
        $classe =  '\src\extrator\\' . ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
            );
    }


}