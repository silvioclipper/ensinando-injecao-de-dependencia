<?php

require_once __DIR__. '/../vendor/autoload.php';

use App\Cliente;
use App\Notificacao;
use App\ExibeDados;

$conteudoNotificacao = 'Compra efetuada realizado';
$notificacao = new Notificacao($conteudoNotificacao);