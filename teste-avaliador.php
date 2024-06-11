<?php

use \App\Models\Lance;
use \App\Models\Leilao;
use \App\Models\Usuario;
use App\Http\Controllers\Avaliador;

require_once "vendor/autoload.php";

$leilao = new Leilao('fiat 147 0km');

$maria = new Usuario('Maria');
$joao = new Usuario('João');

$leilao->recebeLance(new Lance($joao,2000));
$leilao->recebeLance(new Lance($maria,2500));

$leiloeiro = new Avaliador($leilao);
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

echo $maiorValor;
?>
