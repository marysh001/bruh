<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VeryfyCsrfToken as Middleware;
class VeryfyCsrfToken extends Middleware

{
protected $exept =[
// '/json-parce'
];
}
