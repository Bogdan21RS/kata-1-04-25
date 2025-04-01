<?php

namespace Deg540\StringCalculatorPHP;

use function PHPUnit\Framework\isEmpty;

class listaDeLaCompra
{

    public function listar(String $products): String
    {
        if (str_contains($products, "añadir")) {
            $explodedProducts = explode(" ", $products);
            if(count($explodedProducts) == 2) {
                return $explodedProducts[1] . " x1";
            }
            return "";
        }
        if (isEmpty($products)) {
            return "";
        }
        return "";
    }
}