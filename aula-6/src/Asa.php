<?php

namespace Juscejr\Aula6;

class Asa extends Peca
{
    private int $codigoAsa;
    private string $lado;

    public function __construct(int $codigoAsa, string $lado, string $nome, TipoAeronave $tipoAeronave)
    {
        $this->codigoAsa = $codigoAsa;
        $this->lado = $lado;
        parent::setNome($nome);
        parent::setTipoAeronave($tipoAeronave);
    }

    public function getCodigoAsa(): int
    {
        return $this->codigoAsa;
    }

    public function getLado(): string
    {
        return $this->lado;
    }

    public function setCodigoAsa(int $codigoAsa): void
    {
        $this->codigoAsa = $codigoAsa;
    }

    public function setLado(string $lado): void
    {
        $this->lado = $lado;
    }

    public function quebrar(): string
    {
        return 'Quebrou, já era!';
    }
}
