<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;
use DateTimeImmutable;

class CriadorDePedido
{
    private array $templates = [];

    public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento)
    {
        $template = new TemplatePedido($nomeCliente, new DateTimeImmutable($dataFormatada));
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)){
            $template = new TemplatePedido($nomeCliente, new DateTimeImmutable($dataFormatada));

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}