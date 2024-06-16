<?php

namespace App\Http\Request;

use Illuminate\Http\Request;

class  AllUserController extends Controller
{
protected $users = [
['id' => 0, 'username' => 'user1', 'first_name' => 'misha', 'last_name' => 'petrov', 'list_of_numbers'['number1', 'number 2']],
['id' => 1, 'username' => 'user2', 'first_name' => 'sasha', 'last_name' => 'ivanov', 'list_of_numbers'['number1', 'number 2']],

public function show($id)

{
return view('user', ['user' => $this->users[$id]]);
}
}
