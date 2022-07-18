<?php

/* function É UMA FUNCAO, TAMBÉM CHAMADA DE SUBROTINA. */

//QUAL A SINTAXE DE UMA SUBROTINA:

/* function nomeDaRotina ($parametro)
{
    // código da subrotina
}
 */

 
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

if (500 > $Contas_correntes ['123.898.765-78'] ['saldo']){          //SE MEU SALDO FOR > QUE 500 ENTÃO EXIBE A MENSAGEM QUE NAO PODE SACAR
    exibeMensagem("Você nao pode sacar");
}else {                                                             //SENAO PEGA MEU SALDO E SUBTRAI POR 500 (O OPERADO -= JÁ SE ENCARREGA DE FAZER ESSA OPERACAO)
        $Contas_correntes ['123.898.765-78'] ['saldo'] -= 500;
}

if (500 > $Contas_correntes ['123.898.765-43'] ['saldo']){
    exibeMensagem("Você nao pode sacar");
}else {
        $Contas_correntes ['123.898.765-43'] ['saldo'] -= 500;
}

if (500 > $Contas_correntes ['980.768.534-21'] ['saldo']){
    exibeMensagem("Você nao pode sacar");
}else {
        $Contas_correntes ['980.768.534-21'] ['saldo'] -= 500;
}

foreach ($Contas_correntes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
}

