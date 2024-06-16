<?php

namespace App\Kernel;

use Illuminate\Database\App\Http\Middleware; 
protected $middleware = [
\App\Http\Middleware\TrustProxies::class,
\Illuminate\Http\Middleware\HandleCors::class,
\App\Http\Middleware\PreventrequestsDuringMaintenance::class,
\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
\App\Http\Middleware\TrimStrings::class,
\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
\App\Http\Middleware\DataLogger::class,
];
