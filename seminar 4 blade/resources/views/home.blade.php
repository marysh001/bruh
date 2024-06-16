<?php
<html>
<head>
<title>Home Page</title>
meta name="csrf-token" content="{{csrf-token()}}">
</head>
<body>
@extends('layouts.default')

@section('content')
<div>
<div style="background-color: red; width: 100%; height: 160px;">
@csrf
<div class="form-group">
<label for="username">Name</label>
<input type="text" id="username" name="username" class="form-control" required="">
<label for="email">E-mail</label>
@hasSection ('email')
@yield('email')
@else
You did not type e-mail
@endif
<input type="text" id="email" name="email" class="form-control" required="">
<label for="age">Age</label>
@if (count($age)>17)
Adult
@else
You are too young
@endif
<input type="int" id="age" name="age" class="form-control" required="">
<label for="position">Position</label>
<input type="text" id="position" name="position" class="form-control" required="">
{{$shape}}
</div>
{{$line}}
</div>
@stop
