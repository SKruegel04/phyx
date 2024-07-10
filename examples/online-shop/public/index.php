<?php

use Phyx\Http\Kernel;
use Phyx\Http\Request;
use Phyx\Http\Response;

$kernel = new Kernel();

$request = Request::fromGlobals();

$response = $kernel->handle($request);

Response::send($response);



