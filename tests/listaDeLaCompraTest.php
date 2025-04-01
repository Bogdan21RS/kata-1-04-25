<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\listaDeLaCompra;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class listaDeLaCompraTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();
        $this->listaDeLaCompra = new listaDeLaCompra();
    }


    /**
     * @test
     */
    public function givenEmptyProductsReturnsEmptyList(): void
    {
        assertEquals("", $this->listaDeLaCompra->listar(""));
    }

    /**
     * @test
     */
    public function addingAProductWithoutQuantityReturnsListWithOneOfThatProduct(): void
    {
        assertEquals("pan x1", $this->listaDeLaCompra->listar("añadir pan"));
    }

    /**
     * @test
     */
    public function addingAProductWithQuantityReturnsListWithTheQuantityOfThatProduct(): void
    {
        assertEquals("pan x2", $this->listaDeLaCompra->listar("añadir Pan 2"));
    }

    /**
     * @test
     */
    public function addingAProductThatAlreadyExistsReturnsAListWithTheSumOfQuantities(): void
    {
        $this->listaDeLaCompra->listar("añadir Pan 2");
        assertEquals("pan x4", $this->listaDeLaCompra->listar("añadir Pan 2"));
    }

    /**
     * @test
     */
    public function emptyingTheListReturnsEmptyString(): void
    {
        $this->listaDeLaCompra->listar("añadir pan");
        assertEquals("", $this->listaDeLaCompra->listar("vaciar"));
    }

    /**
     * @test
     */
    public function addingNoProductsReturnsDoesNotModifyList(): void
    {
        assertEquals("", $this->listaDeLaCompra->listar("añadir"));
    }

}