<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
    /**
     *
     * @var integer Peso do produto em gramas
     */
    private int $pesoProduto;

    public function __construct(DateTimeInterface $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}