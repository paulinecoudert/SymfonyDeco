<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class ProjetSearch
{

    const TRAVAUX = [
        1 => 'Electricien',
        2 => 'Peintre',
        3 => 'Plombier',
        4 => 'Renovation sdb',
        5 => 'Renovation cuisine',
        6 => 'Poseur de sol',
        7 => 'Poseur papier peint',
        8 => 'Demolition mur',
        9 => 'Renovation mur',
    ];

    /**
     * 
     *var int|null
     *@Assert\Range(min=100, max=200000)
     */

    private $budget;

    /**
     * 
     *var int|null
     */
    private $travaux;

    /**
     * Get the value of budget
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set the value of budget
     *
     * @return  self
     */
    public function setBudget(int $budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get the value of travaux
     */
    public function getTravaux()
    {
        return $this->travaux;
    }

    /**
     * Set the value of travaux
     *
     * @return  self
     */
    public function setTravaux($travaux)
    {
        $this->travaux = $travaux;

        return $this;
    }

    public function getTravauxType(): string
    {

        return self::TRAVAUX[$this->travaux];
    }
}
