<?php

function sacar(array $conta, float $valor_sacar) : array
{
    if ($valor_sacar > $conta['saldo']){
        exibeMensagem ("Você não pode sacar");
    }else {
        $conta ['saldo'] -= $valor_sacar;
    }

    return $conta;
}

function exibeMensagem (string $mensagem)                                               //CRIANDO UMA FUNCAO PARA EXIBIR A MENSAGEM
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valor_depositar) : array                        //A FUNCAO SO VAI ACEITAR DEPOSITOS POSITIVOS
{
    if($valor_depositar > 0){
        $conta ['saldo'] += $valor_depositar;
    }else{
        exibeMensagem ("Depositos precisam ser positivos!");
    }
    
    return $conta;
}

