<?php

function calcularMedia(array $notas){

    $soma = 0;
    foreach ($notas as $nota){

        $soma += $nota;
    }

    $media = $soma / count($notas);

    return $media;
}

$notasAlunos = [45, 60, 50 , 82 , 0];

$mediaSala = calcularMedia($notasAlunos);

echo "Média é igual a :" . number_format($mediaSala, 0);

?>