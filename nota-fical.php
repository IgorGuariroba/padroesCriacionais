<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';
$builder = new ConstrutorNotaFiscalProduto();
$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1500;

$item3 = new ItemOrcamento();
$item3->valor = 1000;


$notaFiscal = $builder->paraEmpresa('123456', 'Igor Guariroba')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Está nota fiscal foi construida com um construtor')
    ->constroi();

echo $notaFiscal->valorImpostos;
echo PHP_EOL;