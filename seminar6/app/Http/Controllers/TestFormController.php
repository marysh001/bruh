<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
public function displayForm()
{ return view:'book.form');
}

public function postForm(Request $request)
{
echo $request->input(key:'generate');
}
}
