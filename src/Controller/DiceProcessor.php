<?php

declare(strict_types=1);

namespace Mos\Controller;

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Webbprogrammering\Dice\Game;

use function Mos\Functions\url;

/**
 * Controller for a sample route an controller class.
 */
class DiceProcessor extends ControllerBase
{
    public function __invoke(): ResponseInterface
    {

        if (!isset($_SESSION["diceGame"])) {
            $_SESSION["diceGame"] = new Game();
        }
        $diceGame = $_SESSION["diceGame"];
        if (isset($_POST["throwSubmit"])) {
            unset($_POST["throwSubmit"]);
            $data = $diceGame->getData();
            if ($data["gameFinished"]) {
                return $this->redirect(url("/dice"));
            } else {
                $diceGame->throwPlayerDice($_POST["amount"]);
            }
        } else if (isset($_POST["stopSubmit"])) {
            unset($_POST["stopSubmit"]);
            $data = $diceGame->getData();
            if ($data["gameFinished"]) {
                return $this->redirect(url("/dice"));
            } else {
                $diceGame->playerStopped();
            }
        } else if (isset($_POST["againSubmit"])) {
            unset($_POST["againSubmit"]);
            $data = $diceGame->getData();
            if ($data["gameFinished"]) {
                $diceGame->startNewRound();
            }
        }
        $_SESSION["diceGame"] = $diceGame;
        if (isset($_POST["resetSubmit"])) {
            unset($_POST["resetSubmit"]);
            unset($_SESSION["diceGame"]);

            return $this->redirect(url("/dice"));
        }

        return $this->redirect(url("/dice"));
    }
}
