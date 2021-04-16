<?php

function vetorChaves(array $vetor){
    $chaves = [];

    foreach ($vetor as $chave => $value){
        $chaves[] = $chave;
    }

        return $chaves;
}

$vetorQualquer = [
    "chave1" => "valor1",
    "chave2" => "valor2",
    "chave3" => "valor3"
];

$vetorDeChaves = vetorChaves($vetorQualquer);

print_r($vetorDeChaves);
?>