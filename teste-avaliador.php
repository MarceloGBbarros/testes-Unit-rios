<?php

use \App\Models\Lance;
use \App\Models\Leilao;
use \App\Models\Usuario;
use App\Http\Controllers\Avaliador;

require_once "vendor/autoload.php";
//arrumo tudo para o teste
$leilao = new Leilao('fiat 147 0km');

$maria = new Usuario('Maria');
$joao = new Usuario('João');

$leilao->recebeLance(new Lance($joao,2000));
$leilao->recebeLance(new Lance($maria,2500));

//executo o código a ser testado
$leiloeiro = new Avaliador($leilao);
$leiloeiro->avalia($leilao);

//verifico se a saída é a esperada
$maiorValor = $leiloeiro->getMaiorValor();

//echo $maiorValor;

$valorEsperado = 2500;

if($valorEsperado == $maiorValor){
    echo "Teste OK";
}else{
    echo "ERRO";
}
?>
