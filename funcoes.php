<?php

$contaCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Julieta Da Silva',
        'saldo' => 1000
    ],

    '234.567.890-01' => [
        'titular' => 'Giuli Ilustre',
        'saldo' => 2000
    ],

    '456.678.890-98' => [
        'titular' => 'Melina Frangos Karnal',
        'saldo' => 3000
    ]
];

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


foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " saldo:" . $conta['saldo'] );
}

$contaCorrentes['234.567.890-01']  = depositar($contaCorrentes['234.567.890-01'],500);
$contaCorrentes['123.456.789-10']  = sacar($contaCorrentes['123.456.789-10'],2000);

echo PHP_EOL;

foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " saldo:" . $conta['saldo'] );
}


