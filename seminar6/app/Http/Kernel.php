<?php

namespace App\Kernel;

use Illuminate\Database\App\Http\Middleware;

protected $middlewareGroups = [
"web"=>[
\App\Http\Middleware\EncryptCookies::class,
\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
\Illuminate\Session\Middleware\StartSession::class,
\Illuminate\Routiong\Middleware\VerifyCsrfToken::class,
],
];
