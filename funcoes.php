<?php

/* DIFERENCA ENTRE FUNCAO E SUBROTINA

FUNCAO :: ELA EXECUTA E DEVOLVE UM VALOR

SUBROTINA :: EXECUTA TUDO QUE TEM PARA EXECUTAR E NAO DEVOLVE VALOR NENHUM */

function sacar($conta, $valor_sacar)
{
    if ($valor_sacar > $conta['saldo']){
        exibeMensagem ("Você não pode sacar");
    }else {
        $conta ['saldo'] -= $valor_sacar;
    }

    return $conta;
}

function exibeMensagem ($mensagem)        //CRIANDO UMA FUNCAO PARA EXIBIR A MENSAGEM
{
    echo $mensagem . PHP_EOL;
}

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
$Contas_correntes ['980.768.534-21'] = sacar($Contas_correntes['980.768.534-21'], $valor_sacar = 500);

foreach ($Contas_correntes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
}