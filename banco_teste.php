<?php

require_once 'funcoes.php';
require_once 'funcoes.php';


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


foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " saldo:" . $conta['saldo'] );
}

$contaCorrentes['234.567.890-01']  = depositar($contaCorrentes['234.567.890-01'],500);
$contaCorrentes['123.456.789-10']  = sacar($contaCorrentes['123.456.789-10'],300);

echo PHP_EOL;

titularComLetrasMaiusculas($contaCorrentes['234.567.890-01']);

// interpolação de string - usando variaveis dentro de strings (retirando as ' ' dos arrays associativos)
foreach ($contaCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $titular - saldo: $saldo");
}





