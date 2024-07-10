<?php

declare(strict_types=1);

namespace App\Controller;

use Phyx\Controller\ControllerInterface;
use Phyx\Http\Response;
use Phyx\Http\Request;

class IndexController implements ControllerInterface
{
    public function index(Request $request): Response
    {
        return Response::ok('Hello World!');
    }

    public function imprint(Request $request): Response
    {
        return Response::ok('Mein Impressum!');
    }

    public function buildRoutes(Request $request): array
    {
        return [
            '/' => $this->index(...),
            '/imprint' => $this->imprint(...),
            '/about-us' => fn () => Response::ok('About Us'),
        ];
    }
}