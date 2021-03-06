<?php

declare(strict_types=1);

namespace Mos\Controller;

use Psr\Http\Message\ResponseInterface;
use Webbprogrammering\Dice\Yatzy;

use function Mos\Functions\url;

/**
 * Controller for a sample route an controller class.
 */
class YatzyProcessor extends ControllerBase
{
    public function __invoke(): ResponseInterface
    {
        if (isset($_POST["throwSubmit"])) {
            $keep = [];

            if (isset($_POST["cube0"])) {
                array_push($keep, 0);
            }
            if (isset($_POST["cube1"])) {
                array_push($keep, 1);
            }
            if (isset($_POST["cube2"])) {
                array_push($keep, 2);
            }
            if (isset($_POST["cube3"])) {
                array_push($keep, 3);
            }
            if (isset($_POST["cube4"])) {
                array_push($keep, 4);
            }
            $_SESSION["yatzyGame"]->throwDice($keep);
        } else if (isset($_POST["pointsSubmit"])) {
            $_SESSION["yatzyGame"]->pickPoints($_POST["category"], $_POST["points"]);
        } else if (isset($_POST["resetSubmit"])) {
            unset($_SESSION["yatzyGame"]);
        }

        return $this->redirect(url("/yatzy"));
    }
}
