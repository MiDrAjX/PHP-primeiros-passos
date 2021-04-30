<?php
$peso = 70;
$altura = 1.78;
$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "seu IMC é de $imc você está abaixo do peso";
} elseif ($imc <= 24.9) {
    echo "seu IMC é de $imc você está com peso normal";
} else {
    echo "seu IMC é de $imc você está acima do peso!";
}
