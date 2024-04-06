<?php
namespace Juscejr\Aula6;

enum TipoAeronave : string
{
    // 'JATO_PEQUENO_PORTE' é name e 'A' é o value;
    case JATO_PEQUENO_PORTE = 'A';
    case MONOMOTOR = 'B';
    case BIMOTOR = 'C';
    case JATO_GRANDE_PORTE = 'D';
}