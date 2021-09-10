<?php

echo 'Desafio Impares'.PHP_EOL;
for($i = 0; $i < 100; $i++){
    $resto = $i % 2;
    if($resto > 0) {
        echo $i;
        echo PHP_EOL;
    }
  
}

echo 'Desafio Tabuada'.PHP_EOL;

$numero = 5;
for($i = 1; $i <= 10; $i++){
    $result = ($i * $numero);
    echo "$i x $numero =  $result ".PHP_EOL;
}

echo 'Desafio IMC'.PHP_EOL;

$peso = 78;
$altura = 1.76;
$imc = $peso / ($altura ** 2);

if($imc > 24.9){
    echo 'Você está gordo! Seu peso é '.$peso.' e seu IMC é '.$imc.PHP_EOL;
} else {
    echo 'Você está bem... Seu peso é '.$peso.' e seu IMC é '.$imc.PHP_EOL;
}