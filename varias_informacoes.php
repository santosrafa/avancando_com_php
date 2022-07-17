<?php

/* EXEMPLO DE ARRAYS ASSOCIATIVOS */

$conta1 = [
    'titular' => 'Rafael',                      /* AQUI SÃO ARRAYS ASSOCIATIVOS CONTENDO MAIS DE UM DADO */
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 4000
];

$conta3 = [
    'titular' => 'Joao',
    'saldo' => 1000
];

$Contas_correntes = [$conta1, $conta2, $conta3];                /* AQUI ESTA VARIAVEL GUARDA OS VALORES DO MEU ARRAY */

for($i = 0; $i < count($Contas_correntes); $i++){               /* O FOR PERCORRE ESSE ARRAY E ME RETORNA O TITULAR DENTRO DO MEU ARRAY */
    echo $Contas_correntes[$i] ['titular'] . PHP_EOL;
}


