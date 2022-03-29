<?php


namespace Alura\DesignPattern\NotaFiscal;


use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacao;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;
    public string $cnpjEmpresa;


    public function valor(): float
    {
        return array_reduce(
            $this->itens,function ($valorAcumulado,ItemOrcamento $itemAtual){
                return $valorAcumulado + $itemAtual->valor;
        },0
        );
    }

}