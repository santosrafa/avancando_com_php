<?php

/* FOREACH SIGNIFICA PARA CADA */
/* NAO PRECISAMOS SABER O INDICE PARA UTILIZAR O FOREACH */
/* Não precisamos conhecer as chaves de cada item para percorrer seus valores */

$Contas_correntes = [
    '123.898.765-78' => [
        'titular' => 'Rafael',
        'saldo' => 200
    ],
    '123.898.765-43' => [
        'titular' => 'Maria',
        'saldo' => 200
    ],
    '980.768.534-21' =>[
    'Vinicius',
    'saldo' => 300
    ],
];

$Contas_correntes ['123.456.879-90'] = [            /* SE NÃO COLOCASSEMOS O DADO COMO STRING O PHP COLOCARIA ESSA DADO NA POSICAO ZERO(0) */
    'titular' => 'Claudia',
    'saldo' => 500
];

foreach ($Contas_correntes as $cpf => $conta){          /* ESTAMOS CHAMANDO O INDICE DO ARRAY DE $CPF */
    echo $cpf . PHP_EOL;                                /* O AS DA UM APELIDO A VARIAVEL FICANDO MAIS FACIL CHAMAR OS DADOS */
}

