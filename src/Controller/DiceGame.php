<?php

declare(strict_types=1);

namespace Mos\Controller;

use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\ResponseInterface;

use function Mos\Functions\renderView;

/**
 * Controller for a sample route an controller class.
 */
class DiceGame
{
    public function __invoke(): ResponseInterface
    {
        $psr17Factory = new Psr17Factory();


        if (!isset($_SESSION["diceGame"])) {
            $data = [
                "header" => "Dice", "playerHistory" => [], "compHistory" => [], "playerSum" => 0, "compSum" => 0, "roundHistory" => [], "endMessage" => ""
            ];
        } else {
            $data = $_SESSION["diceGame"]->getData();
            $data["endMessage"] = "";
            if ($data["gameFinished"]) {
                if ($data["playerWon"]) {
                    $data["endMessage"] = "Spelaren vann!";
                } else {
                    $data["endMessage"] = "Du förlorade!";
                }
            }
            // echo "<pre>".var_dump($data)."</pre>";
        }

        // echo "<pre>".var_dump($_SESSION["diceGame"])."</pre>";


        $body = renderView("layout/dice.php", $data);

        return $psr17Factory
            ->createResponse(200)
            ->withBody($psr17Factory->createStream($body));
    }
}
