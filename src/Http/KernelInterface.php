<?php

declare(strict_types=1);

namespace Phyx\Http;

use http\Env\Response;

interface KernelInterface {
    public function handle(Request $request): Response;
}