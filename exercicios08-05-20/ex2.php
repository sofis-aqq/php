<?php 

$salario = 800;
$porcentagem = 0;

if ($salario <= 280) {
    $porcentagem = 0.2;
}
elseif ($salario > 280 && $salario <+ 700) {
    $porcentagem = 0.15;
}
elseif ($salario > 700 &  $salario <= 1500) {
    $porcentagem = 0.1;
}
else {
    $porcentagem = 0.05;
}

$aumento = $salario * $porcentagem;
$salarioFinal = $aumento + $salario;
$porcentagemFinal = $porcentagem * 100;


echo "O salario antes do reajuste era: R$ $salario </br>";
echo "\n O aumento de seu salario sera de: $porcentagemFinal </br>";
echo "\n Você receberá $aumento a mais do que você recebia antes </br>";
echo "\n Seu novo salario sera de: $salarioFinal </br>";

?>