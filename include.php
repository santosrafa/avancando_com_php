<?php

//Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue.
//include 'arquivos_separados.php';


require 'arquivos_separados.php';       //CHAMANDO UMA FUNCAO DE OUTRO LOCAL, COM O INCLUDE

$Contas_correntes = [
    '123.898.765-78' => [                //FORMANDO O ARRAY   
        'titular' => 'Rafael',
        'saldo' => 200
    ],
    '123.898.765-43' => [
        'titular' => 'Maria',
        'saldo' => 600
    ],
    '980.768.534-21' =>[
        'titular' =>'Vinicius',
        'saldo' => 700
    ],
];

$Contas_correntes ['123.898.765-78'] = sacar($Contas_correntes['123.898.765-78'], $valor_sacar = 500);
$Contas_correntes ['123.898.765-43'] = sacar($Contas_correntes['123.898.765-43'], $valor_sacar = 500);
$Contas_correntes ['980.768.534-21'] = depositar($Contas_correntes['980.768.534-21'], $valor_depositar = 1000);

foreach ($Contas_correntes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
}
