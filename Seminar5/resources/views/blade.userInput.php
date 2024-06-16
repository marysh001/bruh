<?php
<html>
<head>
<title>User Input</title>
meta name="csrf-token" content="{{csrf-token()}}">
</head>
<body>

<form name="employee-form" id="employee-form" method="post" action="{{url('store-form')}}">
@csrf
<div class="form-group">
<label for="name">Name</label>
<input type="text" id="name" name="name" class="form-control" required="true">
</div>

<div class="form-group">
<label for="name">Name</label>
<input type="text" id="name" name="name" class="form-control" required="true">
</div>

<div class="form-group">
<label for="email">Description</label>
<input type="email" id="email" name="email" class="form-control" required="true">
</div>

<div class="form-group">
<label for="workData">workData</label>
<textarea name="workData" class="form-control" required="true"></textarea>
</div>

<div class="id">
<label for="id">User ID</label>
<input type="int"  name="id" class="form-control" required="true">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
