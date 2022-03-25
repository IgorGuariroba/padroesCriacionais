<?php


namespace Alura\DesignPattern\Log;


class StdoutLogwritter implements LoggerWritter
{

    public function escreve(string $mensagemFromatada): void
    {
        print_r($mensagemFromatada);
    }
}