<?php

header('Content-Type: application/json');

$resposta = true;
$array = [];

if ($resposta == true) {

    $array = [
        "status" => 200,
        "msg" => "Ação realizada com sucesso"
    ];

} else {
    $array = [
        "status" => 400,
        "msg" => "Ocorreu um erro ao tentar realizar ação"
    ];

}