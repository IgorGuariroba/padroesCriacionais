<?php


namespace Alura\DesignPattern\Log;


abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        /**@var \Alura\DesignPattern\Log\LoggerWritter */
        $logWritter = $this->criarLogWritter();

        $dataHoje = date('d/m/Y');
        $mensagemFromatada = "[$dataHoje][$severidade]: $mensagem".PHP_EOL;
        $logWritter->escreve($mensagemFromatada);
    }

    abstract public function criarLogWritter(): LoggerWritter;
}