<?php

use Alura\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';


$fabricaVenda = new VendaServicoFactory('Igor Guariroba');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();


var_dump($venda,$imposto);