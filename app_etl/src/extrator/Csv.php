<?php

namespace src\extrator;

class Csv extends Arquivo {

    public function lerArquivoCsv($caminho): array {
        $handle = fopen($caminho, "r");
    
        if ($handle !== false) {
            while (($linha = fgetcsv($handle, 10000, ';')) !== false) {
                $this->setDados($linha[0], $linha[1], $linha[2]);
            }
    
            fclose($handle);
        } else {
            echo "Falha ao abrir o arquivo: $caminho";
        }

        return $this->getDados();
    }    
}