<?php

//VOCE SO PODE FAZER EXTRACT DE DADOS QUE VOCE CONFIA.
//O EXTRACT ELA PERCORRE O ARRAY E TRANSFORMA OS VALORES EM UMA VARIAVEL. NUNCA UTILIZE ESSA FUNCAO EM UM VALOR QUE VOCE NAO CONFIA.
//O COMPACT PEGA AS VARIAVEIS E CRIA UM ARRAY. MUITO UTILIZADO PARA PASSAR VALORES EM PAGINAS HTML

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

extract($dados);
var_dump($nome, $nota, $idade);

compact('nome', 'idade');
var_dump(compact('nome', 'idade'));


