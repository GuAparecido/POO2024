<?php

namespace Juscejr\Aula6;

class Turbina extends Peca
{
    private float $potencia;

    public function __construct(float $potencia, string $nome, TipoAeronave $tipoAeronave)
    {
        $this->potencia = $potencia;
        parent::setNome($nome);
        parent::setTipoAeronave($tipoAeronave);
    }

    public function getPotencia(): float
    {
        return $this->potencia;
    }

    public function setPotencia(float $potencia): void
    {
        $this->potencia = $potencia;
    }

    public function quebrar(): string
    {
        //Para pegar o tipo aeronave tem que pegar do pai, por isso Parent
        if(parent::getTipoAeronave() == TipoAeronave::MONOMOTOR) {
            return 'Quebrou, maiday';
        } else {
            return 'Quebrou, mas o avião ainda voa';
        }
        
    }
}
