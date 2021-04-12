<?php

declare(strict_types=1);

namespace Webbprogrammering\Dice;

/**
 * Class DiceHand.
 */
class DiceHand
{
    private $amount;

    public $dices = [];

    public function __construct($number = 2)
    {
        $this->amount = $number;
        for ($i = 0; $i <= $this->amount - 1; $i++) {
            $this->dices[$i] = new Dice();
        }
    }

    public function roll(): void
    {
        for ($i = 0; $i <= $this->amount - 1; $i++) {
            $this->dices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = [];

        for ($i = 0; $i <= $this->amount - 1; $i++) {
            $res .= $this->dices[$i]->getLastRoll();
        }

        return $res;
    }
}
