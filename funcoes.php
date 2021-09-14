<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valor)
{
    if($valor > 0){
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem('Valor a depositar deve ser maior que ZERO');
        echo PHP_EOL;
    }
   
    return $conta;
}

function sacar(array $conta, float $valor)
{
    if($conta['saldo'] > $valor){
        $conta['saldo'] -= $valor;
    } else {
        exibeMensagem('Saldo INSUFICIENTE!');
        echo PHP_EOL;
    }

    return $conta;
}
// função que recebe uma variavel por referencia
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}


