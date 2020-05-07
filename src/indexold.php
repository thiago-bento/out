<?php

require_once 'CalulaMedia.php';

echo "<h2> Media das notas</h2>";

$notas = [3,8,9,6,];                

$calculadora = new Calculadora();                   //novo objeto do tipo Calculadora

$media = $calculadora->calculaMedia($notas);        // variavel = objeto criado -> funcao calculaMedia com parametros do array

sort ($notas);                                       //organiza as notas em ordem crescente rsort = decrescente

foreach ($notas as $notas) {                        //para cada item do array faça .... "So serve para arrays"
    echo "Notas são: $notas<br>";
}


echo "<p>A média é: $media</p>";

echo "<h2> String para array e Array para String</h2>";

$nomes = 'Rodrigo, Thiago, Vilma';

echo "<h3> A String é: $nomes.</h3>";


$arrayNomes = explode(" ", $nomes);             //cria um array com a variavel da string informada.

foreach ($arrayNomes as $nomes) {
    echo "String para Array: $nomes <br>";
}

$nomesString = implode(" ", $arrayNomes);

echo "Array para String: $nomesString<br>";
