<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\SMS;

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';

$msg2 = new Mensageiro(new SMS());
$msg2->enviarToken();
