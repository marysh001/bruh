<?php
<html>
<head>
<title>File upload</title>
meta name="csrf-token" content="{{csrf-token()}}">
</head>
<body>
<div class="container mt-4>
<div class="card">
<div class="card-body">
<form name="add-new-number" id="add-new-number" method="post" enctype="multipart/form-data" action="{{ route('save_number') }}">
@csrf
<form name="add-new-number" method="post" action="{{ route('save_number') }}">
@csrf
<div class="form-group">
<label for="number_name">NewNumber</label>
<input type="int" id="file_name" id="file_name" name="file_name" class="form-control" required="">
<input type="file" name="uploaded_file">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>
