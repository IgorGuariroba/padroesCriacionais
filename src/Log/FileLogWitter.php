<?php


namespace Alura\DesignPattern\Log;


class FileLogWitter implements LoggerWritter
{
    private  $arquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function escreve(string $mensagemFromatada): void
    {
        fwrite($this->arquivo, $mensagemFromatada);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}