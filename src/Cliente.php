<?php

declare(strict_types=1);

namespace App;

use App\Notificacao;

class Cliente
{
    public $notificacao;

    public function __construct(Notificacao $notificacao)
    {
        $this->notificacao = $notificacao;
    }

    public function notificarCliente(string $notificacao): string
    {
        return $notificacao;
    }
}