<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function store(Request $request)
    {
    //
    $request->validate([
    'name'=>'required',
    'surname'=>'required',
    'email'=>'required',
    ]);
    return User::create($request->all());
    
}
