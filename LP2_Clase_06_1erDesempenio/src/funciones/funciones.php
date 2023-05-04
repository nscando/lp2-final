<?php

function SumarVotos($VotosNegativos, $VotosPositivos)
{
    $TotalVotos = $VotosNegativos + $VotosPositivos;

    return $TotalVotos;
}

function PorcentajeVotosPositivos($VotosPositivos, $TotalVotosProducto)
{

    $PorcentajeTotalVotosPositivos =  ($VotosPositivos / $TotalVotosProducto) * 100;

    return $PorcentajeTotalVotosPositivos;
}


function ColorTextoPorcentaje($porcentaje)
{
    switch (true) {
        case ($porcentaje < 25):
            return 'text-danger';
        case ($porcentaje >= 25 && $porcentaje < 50):
            return 'text-warning';
        case ($porcentaje >= 50 && $porcentaje < 80):
            return 'text-info';
        case ($porcentaje >= 80):
            return 'text-success';
        default:
            return 'text-default';
    }
}

function CantidadCuotas($porcentaje)
{
    switch (true) {
        case ($porcentaje < 35):
            return 'Sin Cuotas';
        case ($porcentaje >= 35 && $porcentaje < 65):
            return '3 Cuotas';
        case ($porcentaje >= 65 && $porcentaje < 80):
            return '6 Cuotas';
        case ($porcentaje >= 80):
            return '12 Cuotas';
        default:
            return 'Sin Cuotas';
    }
}

function ColorCuotasPorcentaje($porcentaje)
{
    switch (true) {
        case ($porcentaje < 35):
            return 'bg-danger';
        case ($porcentaje >= 35 && $porcentaje < 65):
            return 'bg-warning';
        case ($porcentaje >= 65 && $porcentaje < 80):
            return 'bg-info';
        case ($porcentaje >= 80):
            return 'bg-success';
        default:
            return 'bg-default';
    }
}
