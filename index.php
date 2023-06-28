<?php

declare(strict_types=1);

require_once './vendor/autoload.php';


use App\Cliente;
use App\Notificacao;
use App\ExibeDados;

$notificacao = new Notificacao;

$cliente = new Cliente($notificacao);

$exibeDados = new ExibeDados;

$conteudoNotificacao = 'Compra efetuada realizado';

$transacao = $cliente->notificarCliente($conteudoNotificacao);

$exibeDados->exibirDados();