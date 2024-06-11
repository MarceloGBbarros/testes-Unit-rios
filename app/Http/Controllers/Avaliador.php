<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Leilao;

class Avaliador
{
    private $maiorValor;

    public function avalia(Leilao $leilao):void
    {
        $lances = $leilao->getLances();
        $ultimoLance = $lances[count($lances) - 1];
        $this->maiorValor = $ultimoLance->getValor();
    }
    /**
     * @return mixed
     */
    public function getMaiorValor()
    {
        return $this->maiorValor;
    }
}
