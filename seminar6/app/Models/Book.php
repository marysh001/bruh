<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public $attributes = ['name', 'genre', 'author'];
    
    public finction store(Request $request)
{return[
'author'=>'required|max:100',
'name'=> 'required|unique:books|max:255',
];

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

\App\Book::create($validatedData);
return response()->json('Book is successfully validated and data has been saved');

}
}
