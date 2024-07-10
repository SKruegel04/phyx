<?php

declare(strict_types = 1);

namespace Phyx\Controller;

use Phyx\Http\Request;

interface ControllerInterface
{
    public function buildRoutes(Request $request): array;
}
