<?php

$idade = [25,27,38,39,42,37];

for($i = 0; $i < 6; $i++){
    echo 'Idade: '.$idade[$i].PHP_EOL;
}

echo "Usando o tamanho da lista".PHP_EOL;

$idade = [25,27,38,39,42,37];

for($i = 0; $i < count($idade); $i++){
    echo 'Idade: '.$idade[$i].PHP_EOL;
}

