<?php

require_once __DIR__.'/public/index.php';

use App\Dados\Servicos\ConecteNoMySQL;
use App\Dados\BasesDeDados\UseDadosDaBase_BancoContas;


$dados = new ConecteNoMySQL(new UseDadosDaBase_BancoContas());

echo "<pre>";
print_r($dados);
