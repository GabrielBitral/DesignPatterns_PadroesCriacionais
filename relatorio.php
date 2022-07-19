<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\Pedido;
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$pedido = new Pedido();
$pedido->nomeCliente = 'Vincius Dias';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoXmlExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);
