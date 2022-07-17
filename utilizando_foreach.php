<?php

/* FOREACH SIGNIFICA PARA CADA */
/* NAO PRECISAMOS SABER O INDICE PARA UTILIZAR O FOREACH */
/* Não precisamos conhecer as chaves de cada item para percorrer seus valores */

$Contas_correntes = [
    12389876578 => [
        'titular' => 'Rafael',
        'saldo' => 200
    ],
    12389876543 => [
        'titular' => 'Maria',
        'saldo' => 200
    ],
    98076853421 =>[

    'Vinicius',
    'saldo' => 300
    ],

];

foreach ($Contas_correntes as $cpf => $conta){          /* ESTAMOS CHAMANDO O INDICE DO ARRAY DE $CPF */
    echo $cpf . PHP_EOL;                                /* O AS DA UM APELIDO A VARIAVEL FICANDO MAIS FACIL CHAMAR OS DADOS */
}

