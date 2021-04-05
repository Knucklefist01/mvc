<?php

declare(strict_types=1);

namespace Webbprogrammering\Dice;

/*
use function Mos\Functions\{
    destroySession,
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};
*/

/**
 * Class GraphicalDice.
 */
class GraphicalDice extends Dice
{
    const FACES = 6;
    private ?int $roll = null;

    public function getRollFile(): string
    {
        $fileName = "dice" . $this->roll . ".png";
        return $fileName;
    }
}
