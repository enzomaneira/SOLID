<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
use src\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao{

    public function salvar(){
        return "";
    }

    public function enviarNotificacao(Notificacao $notificacao){
        return $notificacao->log;
    }
    
}