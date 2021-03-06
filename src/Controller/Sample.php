<?php

declare(strict_types=1);

namespace Mos\Controller;

use Psr\Http\Message\ResponseInterface;

use function Mos\Functions\renderView;

/**
 * Controller for a sample route an controller class.
 */
class Sample extends ControllerBase
{
    public function where(): ResponseInterface
    {
        $data = [
            "header" => "Rainbow page",
            "message" => "Hey, edit this to do it youreself!",
        ];

        $body = renderView("layout/page.php", $data);

        return $this->response($body);
    }
}
