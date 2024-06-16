<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonParceController extends Controller
{
   public function parseJson(Request $request)
   {
   
   var_dump(json_decode($request->getContent()));
   }
}
