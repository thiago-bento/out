<?php declare(strict_types=1);

namespace Alura;

require 'autoload.php';

//require 'services/ArraysUtils.php';

use Services\ArrayUtils;

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
];

echo "<pre>";
echo "nova"

var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";
