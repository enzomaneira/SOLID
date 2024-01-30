<?php

namespace src\extrator;

class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void {

        array_push
        (
            $this->dados, 
            ['nome' => $nome, 
            'cpf' => $cpf, 
            'email'=> $email
            ]
        );
        
    }
    }
