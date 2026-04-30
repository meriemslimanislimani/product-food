<?php

namespace App\Entity;

class Factoriel
{
    private int $nbr;

    // Constructeur
    public function __construct(int $nbr)
    {
        $this->nbr = $nbr;
    }

    // Getter
    public function getNbr(): int
    {
        return $this->nbr;
    }

    // Setter
    public function setNbr(int $nbr): self
    {
        $this->nbr = $nbr;
        return $this;
    }

    // Méthode factoriel
    public function calculeFactoriel(): int
    {
        if ($this->nbr < 0) {
            throw new \Exception("Nombre négatif interdit");
        }

        if ($this->nbr == 0) {
            return 1;
        }

        $f = 1;

        for ($i = 2; $i <= $this->nbr; $i++) {
            $f = $f * $i;
        }

        return $f;
    }
}