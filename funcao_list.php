<?php

/* DIFERENCA ENTRE FUNCAO E SUBROTINA

FUNCAO :: ELA EXECUTA E DEVOLVE UM VALOR

SUBROTINA :: EXECUTA TUDO QUE TEM PARA EXECUTAR E NAO DEVOLVE VALOR NENHUM */


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
   // list ('titular' => $titular, 'saldo' => $saldo) = $conta;                           //ESSA É UMA FORMA DE SE UTILIZAR O LIST, FACILITANDO A FORMA DE TRAZER OS DADOS
    ['titular' => $titular, 'saldo' => $saldo] = $conta;                                  //ESSA SERIA UMA SINTAXE AINDA MAIS ENXUTA DO ARRAY 
    exibeMensagem ("$cpf $titular $saldo");
}
