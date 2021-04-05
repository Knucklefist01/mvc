<?php

declare(strict_types=1);

namespace Webbprogrammering\Dice;

/**
 * Class DiceHand.
 */
class DiceHand
{
    const AMOUNT = 2;

    public array $dices;

    public function __construct()
    {
        for ($i = 0; $i <= self::AMOUNT - 1; $i++) {
            $this->dices[$i] = new Dice();
        }
    }

    public function roll(): void
    {
        for ($i = 0; $i <= self::AMOUNT - 1; $i++) {
            $this->dices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = [];

        for ($i = 0; $i <= self::AMOUNT - 1; $i++) {
            $res .= $this->dices[$i]->getLastRoll();
        }

        return $res;
    }
}
