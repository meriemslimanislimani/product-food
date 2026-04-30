<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Factoriel;

class FactorielTest extends TestCase
{
    public function testFactorielNormal()
    {
        $f = new Factoriel(5);
        $this->assertEquals(120, $f->calculeFactoriel());
    }

    public function testFactorielZero()
    {
        $f = new Factoriel(0);
        $this->assertEquals(1, $f->calculeFactoriel());
    }

    public function testFactorielNegatif()
    {
        $this->expectException(\Exception::class);

        $f = new Factoriel(-3);
        $f->calculeFactoriel();
    }
}