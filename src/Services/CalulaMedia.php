<?php 

class Calculadora 
{
        public function calculaMedia(array $notas): ?float
    {
        $quantidadeNotas = sizeof($notas);
        if ($quantidadeNotas !== 0) {
            $soma = 0;

            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma = $soma + $notas[$i];
            }

            $media = $soma / $quantidadeNotas;

            return $media;
        } else {
            return null;
        }
    }
}

/*index.html

$notas = [3,8,9,6,];

$calculadora = new Calculadora();   \\novo objeto do tipo Calculadora
$media = $calculadora->calculaMedia($notas);    \\ variavel = objeto criado -> funcao calculaMedia com parametros do array

echo "<p>A média é: $media</p>";

