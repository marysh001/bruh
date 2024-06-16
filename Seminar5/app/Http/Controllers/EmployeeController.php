<?php

namespace App\Http|Controllers;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{ 
public function index()!!what to write here???
{
return view('get-employee-data');
}
public function store(Request $request)
{
$name = $request->input('name');
$email = $request->input('email');
$email = $request->input('WorkData');
}

public function update(Request $request, $id)
{
$id = $request->input('id');
}
public function getPath($file)
{ $file= new SplFileInfo("html/gfg.txt");
echo $file->getPath();
}
public function getUrl(Url $url)
{$url =((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;
}
}
