<?php

declare(strict_types=1);

namespace Mos\Controller;

use Psr\Http\Message\ResponseInterface;
use Webbprogrammering\Dice\Yatzy;

use function Mos\Functions\renderView;

/**
 * Controller for a sample route an controller class.
 */
class YatzyGame extends ControllerBase
{
    public function __invoke(): ResponseInterface
    {
        if (!isset($_SESSION["yatzyGame"])) {
            $_SESSION["yatzyGame"] = new Yatzy();
        }
        $data = $_SESSION["yatzyGame"]->getData();

        $body = renderView("layout/yatzy.php", $data);

        return $this->response($body);
    }
}
