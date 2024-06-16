<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RequestTestConreoler extends Controller
{
public function testRequest(Request $request)

{
$requestParameters = $request->collect();
}

}
