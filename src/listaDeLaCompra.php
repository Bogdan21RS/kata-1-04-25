<?php

namespace Deg540\StringCalculatorPHP;


class listaDeLaCompra
{

    private $listOfProducts = [];

    public function listar(String $products): String
    {
        if (str_contains($products, "vaciar")) {
            $this->listOfProducts = [];
        }

        if (str_contains($products, "añadir")) {
            $explodedProducts = explode(" ", $products);

            if (count($explodedProducts) == 2) {
                $this->listOfProducts[sizeof($this->listOfProducts)] = [strtolower($explodedProducts[1]), 1];
            }

            if (count($explodedProducts) == 3) {
                $this->listOfProducts[sizeof($this->listOfProducts)] = [strtolower($explodedProducts[1]), $explodedProducts[2]];
            }
            return $this->toString();
        }

        return $this->toString();
    }

    private function toString(): String {

        if (empty($this->listOfProducts)) {
            return "";
        }

        $listInString = "";
        for ($actualProduct = 0; $actualProduct < count($this->listOfProducts); $actualProduct++) {
            $listInString .= $this->listOfProducts[$actualProduct][0] . ' x' . $this->listOfProducts[$actualProduct][1];
        }

        return $listInString;
    }
}