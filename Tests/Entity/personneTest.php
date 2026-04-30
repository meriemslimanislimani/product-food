<?php

use PHPUnit\Framework\TestCase;
use App\Entity\Personne;
class PersonneTest extends TestCase
{
    public function testAgeNegatif()
    {
        $personne = new Personne("Dupont", "Jean", -5);
        
        $this->expectException("Exception");
        $personne ->categorie();
    }

    public function testMineure()
    {
        $personne = new Personne("Dupont", "Alice", 8);
        $categorie = $personne->categorie();
        $this->assertEquals("mineure", $categorie);                                                                                                                                                                                     
    }

    public function testMajeure()
    {
        $personne = new Personne("Martin", "Jean", 25);
        $categorie = $personne->categorie();
        $this->assertEquals("majeure", $categorie);
    }
}