<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormProcessor extends Controller
{
//
public function index()
{
return view('test');
}

public function store(Request $request)
{
 $userData =['User name' => $request->username, 'email' => $request->email];
return response()->json($userData);
}
}
