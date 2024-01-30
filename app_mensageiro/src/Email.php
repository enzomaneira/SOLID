<?php

namespace src;

class Email implements ImensagemToken {
    public function enviar(): void {
        echo 'Email seu token é 555-333';
    }
}
