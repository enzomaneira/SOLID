<?php

namespace src;

use src\Mensageiro;

class SMS implements ImensagemToken {
    public function enviar(): void {
        echo 'Email seu token é 8888-222';
    }


}