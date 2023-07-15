<?php

namespace App\Dados\Servicos;

use PDO;
use PDOException;

class ConecteNoMySQL
{    
    private \PDO $pdo;
  
    public function __construct(CarregueBaseDeDados $baseDeDados){
        $this->conectar($baseDeDados);        
    }

    public function conectar(CarregueBaseDeDados $baseDeDados): \PDO
    {
        $servidorBancoDeDados   = $baseDeDados->pegueNomeServidor();
        $nomeBancoDeDados       = $baseDeDados->pegueNomeBancoBados();
        $nomeUsuarioBancoDados  = $baseDeDados->pegueNomeUsuario();
        $senhaUsuarioBancoDados = $baseDeDados->pegueSenhaUsuario();

        $dsn = 
            "mysql:host={$servidorBancoDeDados};
            dbname={$nomeBancoDeDados};
            charset=utf8mb4";

        $opcoes = 
        [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];
        
        try 
        {
            $pdo = new \PDO($dsn, $nomeUsuarioBancoDados, $senhaUsuarioBancoDados , $opcoes);
            $this->pdo = $pdo;                        
        } 
        catch (\PDOException $e) 
        {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $this->pdo;
    }
}