<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testFood()
    {
        // étape 1
        $p = new Product('pomme', 'food', 10);

        // étape 2 execution
        $tva = $p->computeTva();

        // étape 3 comparaison
        $this->assertSame(0.55, $tva);
    }
    


public function testprix()
{
    $p = new Product('chose', 'tech', 10);

    $tva = $p->computeTva();

    $this->assertSame(1.96, $tva);
}



public function testInvalide()
{
    // étape 1 : création de l'objet
    $p = new Product("x", "y", -5);

    // étape 2 : exception attendue
    $this->expectException("Exception");

    // étape 3 : exécution
    $p->computeTva();
}
}