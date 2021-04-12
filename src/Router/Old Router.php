<?php

declare(strict_types=1);

namespace Mos\Router;

use Webbprogrammering\Dice\Game;

use function Mos\Functions\{
    destroySession,
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};

/**
 * Class Router.
 */
class Router
{
    public static function dispatch(string $method, string $path): void
    {
        if ($method === "GET" && $path === "/") {
            $data = [
                "header" => "Index page",
                "message" => "Hello, this is the index page, rendered as a layout.",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session") {
            $body = renderView("layout/session.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session/destroy") {
            destroySession();
            redirectTo(url("/session"));
            return;
        } else if ($method === "GET" && $path === "/debug") {
            $body = renderView("layout/debug.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/twig") {
            $data = [
                "header" => "Twig page",
                "message" => "Hey, edit this to do it youreself!",
            ];
            $body = renderTwigView("index.html", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/some/where") {
            $data = [
                "header" => "Rainbow page",
                "message" => "Hey, edit this to do it youreself!",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/dice") {
            if (!isset($_SESSION["diceGame"])) {
                $data = [
                    "header" => "Dice", "playerHistory" => [], "compHistory" => [], "playerSum" => 0, "compSum" => 0, "roundHistory" => [], "endMessage" => ""
                ];
            } else {
                $data = unserialize($_SESSION["diceGame"])->getData();
                $data["endMessage"] = "";
                if ($data["gameFinished"]) {
                    if ($data["playerWon"]) {
                        $data["endMessage"] = "Spelaren vann!";
                    } else {
                        $data["endMessage"] = "Du förlorade!";
                    }
                }
            }
            $body = renderView("layout/dice.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "POST" && $path === "/diceProcessor") {
            if (!isset($_SESSION["diceGame"])) {
                $_SESSION["diceGame"] = serialize(new Game());
            }
            $diceGame = unserialize($_SESSION["diceGame"]);
            if (isset($_POST["throwSubmit"])) {
                unset($_POST["throwSubmit"]);
                $data = $diceGame->getData();
                if ($data["gameFinished"]) {
                    redirectTo(url("/dice"));
                } else {
                    $diceGame->throwPlayerDice($_POST["amount"]);
                }
            } else if (isset($_POST["stopSubmit"])) {
                unset($_POST["stopSubmit"]);
                $data = $diceGame->getData();
                if ($data["gameFinished"]) {
                    redirectTo(url("/dice"));
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
            $_SESSION["diceGame"] = serialize($diceGame);
            if (isset($_POST["resetSubmit"])) {
                unset($_POST["resetSubmit"]);
                unset($_SESSION["diceGame"]);
                redirectTo(url("/dice"));
            }
            return;
        }
        $data = [
            "header" => "404",
            "message" => "The page you are requesting is not here. You may also checkout the HTTP response code, it should be 404.",
        ];
        $body = renderView("layout/page.php", $data);
        sendResponse($body, 404);
    }
}
