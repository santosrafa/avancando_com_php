<?php

//A FUNCAO LIST CRIA AS VARIAVEIS ANTES DE VIR OS PARAMETROS

$dados = ['Vinicius', 10, 25];

list ($nome, $idade, $nota) = $dados;                                   //FUNCAO LIST

var_dump($nome, $idade, $nota);