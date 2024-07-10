<?php

declare(strict_types=1);

namespace App;

use Phyx\Http\KernelInterface;
use Phyx\Http\Request;
use Phyx\Http\Response;
use App\Controller\IndexController;

class Kernel implements KernelInterface
{
    public function handle(Request $request): Response
    {
        $router = new Router();

        // $router->addRoute(
        $controllerDispatcher = new ControllerDispatcher($router);
        $controllerDispatcher->addController(new IndexController());
        $controllerDispatcher->addController(new ProductController());

        $response = $controllerDispatcher->dispatch($request);

        return $response;
    }
}