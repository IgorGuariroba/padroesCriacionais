<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

require 'vendor/autoload.php';

$notaFiscal = (new ConstrutorNotaFiscal())->paraEmpresa('123456', 'Igor Guariroba')
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comObservacoes('Está nota fiscal foi construida com um construtor')
    ->constroi();