<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

abstract class Venda
{
    public DateTimeInterface $dataRealização;

    public function __construct(DateTimeInterface $dataRealizacao)
    {
        $this->dataRealização = $dataRealizacao;
    }
}