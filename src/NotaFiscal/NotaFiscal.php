<?php


namespace Alura\DesignPattern\NotaFiscal;


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
        return 0;
    }

}