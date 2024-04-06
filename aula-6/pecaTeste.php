<?php
namespace Juscejr\Aula6;

require_once 'vendor/autoload.php';

$turbina = new Turbina(
    2000.45,
    'Turbina Rolls Roice',
    TipoAeronave::BIMOTOR
);

echo 'Nome: ' . $turbina->getNome() . "\n";
echo 'Potência: ' . $turbina->getPotencia() . "\n";
echo 'Tipo da Aeronave: ' . $turbina->getTipoAeronave()->name;

$asa = new Asa(
    2576,
    'Direito',
    'Asa do avião Boing 77',
    tipoAeronave::JATO_PEQUENO_PORTE
);

echo 'Nome da peça: ' . $asa->getNome() . "\n";
echo 'Lado da peça: ' . $asa->getNome() . "\n";
echo 'Aplicação: ' . $asa->getNome() . "\n";
echo 'Tipo da Aeronave ' . $asa->getNome() . "\n";

$asa = new Asa2(
    20,
    2000,
    'Asa genéria',
    TipoAeronave::JATO_GRANDE_PORTE
);

echo "A turbina quebrou: \n";
echo $turbina->quebrar() . "\n";

echo "A asa quebrou: \n";
echo $asa->quebrar() . "\n";



