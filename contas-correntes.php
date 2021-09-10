<?php

echo 'Criando arrays associativos e colocando como chaves de outro array numérico: '.PHP_EOL;

$conta1 = [
    'titular' => 'Giuli Ilustre',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Melina Angos',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Frederico Ilustre',
    'saldo' => 500
];


$contaCorrentes = [$conta1,$conta2,$conta3];

foreach ($contaCorrentes as $value) {
    echo $value['titular'].' - saldo: '.$value['saldo'].PHP_EOL;
}

echo ' '.PHP_EOL;
echo 'Criando arrays associativos e colocando dentro de outro array associativo que
usa o CPF como chave: '.PHP_EOL;

$contaCorrentes = [

    '805.415.780-69' => [
        'titular' => 'Giuli Ilustre',
        'saldo' => 1000
    ],
    '723.045.300-00' => [
        'titular' => 'Melina Angos',
        'saldo' => 2000
    ],
    '007.890.456-98' => [
        'titular' => 'Frederico Ilustre',
        'saldo' => 500
    ]  

];

foreach ($contaCorrentes as $key => $value) {
    echo $key.' '.$value['titular'].' saldo: '.$value['saldo'].PHP_EOL;
}

