<?php

namespace App;

class conexao 
{
    public static function conetarBancoDados()
    {
        $conexao = new \PDO(
            'mysql:host=localhost;dbname=bancoContas',
            'root',
            '123@xyx'
        );

        $conexao->setAttribute(\PDO::ATTR_ERRMODE,
        \PDO::ERRMODE_EXCEPTION);

        return $conexao;
    }

}