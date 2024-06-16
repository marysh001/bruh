<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
    return View(view:'book',['book' => $id ? Book::where('id',$id)->first() : null]);
    
    public function store(Request $request)
    {
    $book = new Book($request->all());
    $book->genre = serialize($request->input(key:'genre'));
    $book->save();
    }
    }
}
