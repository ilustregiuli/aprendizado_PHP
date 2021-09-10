<?php
$idade = 9;
echo 'Olá mundo! Minha idade é '.$idade."\n";
echo "Olá mundo! Minha idade é $idade\n";

echo 'Testando a'.PHP_EOL;
echo 'Quebra'.PHP_EOL;
echo 'de'.PHP_EOL;
echo 'linha.'.PHP_EOL;

if($idade > 18) {
    echo 'Você tem mais de 18 anos, pode entrar!';
} else {
    echo 'Você não tem mais de 18, NÃO PODE ENTRAR!';
}