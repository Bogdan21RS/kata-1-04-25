<?php

namespace Deg540\StringCalculatorPHP;


class listaDeLaCompra
{

    public function listar(String $products): String
    {
        if (empty($products)) {
            return "";
        }

        if (str_contains($products, "vaciar")) {
            return "";
        }

        if (str_contains($products, "añadir")) {
            $explodedProducts = explode(" ", $products);

            if(count($explodedProducts) == 2) {
                return strtolower($explodedProducts[1]) . " x1";
            }

            if(count($explodedProducts) == 3) {
                return strtolower($explodedProducts[1]) . " " . $explodedProducts[2];
            }
            return "";
        }

        return "";
    }
}