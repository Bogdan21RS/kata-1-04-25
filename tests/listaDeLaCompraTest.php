<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\listaDeLaCompra;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class listaDeLaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function givenEmptyProductsReturnsEmptyList(): void
    {
        $listaDeLaCompra = new listaDeLaCompra();
        $expected = "";
        assertEquals($listaDeLaCompra->listar(""), $expected);
    }

    /**
     * @test
     */
    public function addingAProductWithoutQuantityReturnsListWithOneOfThatProduct(): void
    {
        $listaDeLaCompra = new listaDeLaCompra();
        $expected = "pan x1";
        assertEquals($listaDeLaCompra->listar("añadir pan"), $expected);
    }

    /**
     * @test
     */
    public function addingNoProductsReturnsDoesNotModifyList(): void
    {
        $listaDeLaCompra = new listaDeLaCompra();
        $expected = "";
        assertEquals($listaDeLaCompra->listar("añadir"), $expected);
    }

}