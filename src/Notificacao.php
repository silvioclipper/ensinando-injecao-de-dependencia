<?php

declare(strict_types=1);

namespace App;

/**
 * Classe responsável por representar uma notificação.
 */
class Notificacao
{
    /**
     * @var string A mensagem da notificação.
     */
    private $mensagem;

    /**
     * Construtor da classe Notificacao.
     *
     * @param string $mensagem A mensagem da notificação.
     */
    public function __construct(string $mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * Obtém a mensagem da notificação.
     *
     * @return string A mensagem da notificação.
     */
    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    /**
     * Define a mensagem da notificação.
     *
     * @param string $mensagem A nova mensagem da notificação.
     */
    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    /**
     * Envia a notificação.
     *
     * @return string A mensagem da notificação enviada.
     */
    public function enviarNotificacao(): string
    {
        return $this->mensagem;
    }
}