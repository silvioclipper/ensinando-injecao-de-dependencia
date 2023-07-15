<?php

namespace App\Dados\BasesDeDados;

Use App\Dados\Servicos\CarregueBaseDeDados;

class UseDadosDaBase_BancoContas extends CarregueBaseDeDados
{
    public function __construct(){
        $this->envieNomeServidor('dataBase');
        $this->envieNomeBancoBados('bancoContas');        
        $this->envieNomeUsuario('root');
        $this->envieSenhaUsuario('root');
    }
}