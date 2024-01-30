<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
use src\Log;
use src\Notificacao;
use src\ILog;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao {
    public function salvar(){
        return "";
    }
    public function registrarLog(Log $log){
        return $log->log;
    }
    public function enviarNotificacao(Notificacao $notificacao){
        return $notificacao->log;
    }
}