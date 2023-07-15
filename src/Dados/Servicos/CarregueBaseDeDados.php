<?php

namespace App\Dados\Servicos;

class CarregueBaseDeDados
{    
    private $nomeServidor;
    private $nomeBancoDados;
    private $nomeUsuario;
    private $senhaUsuario;

        
    public function     pegueNomeServidor()
    {
        return          $this->nomeServidor;
    }
    public function     pegueNomeBancoBados()
    {
        return          $this->nomeBancoDados;
    }
    public function     pegueNomeUsuario()
    {
        return          $this->nomeUsuario;
    }
    public function     pegueSenhaUsuario()
    {
        return          $this->senhaUsuario;
    }
    
    public function             envieNomeServidor(String $nomeServidor)
    {
        $this->nomeServidor     = $nomeServidor;
    }
    public function             envieNomeBancoBados($nomeBancoDados)
    {
        $this->nomeBancoDados   = $nomeBancoDados;
    }
    public function             envieNomeUsuario(String $nomeUsuario)
    {
        $this->nomeUsuario      = $nomeUsuario;
    }
    public function             envieSenhaUsuario(String $senhaUsuario)
    {
        $this->senhaUsuario     = $senhaUsuario;
    }    
}
