<html>
<head>
<title>Home Page</title>
meta name="csrf-token" content="{{csrf-token()}}">
</head>
<body>
<div class="form-group">
<label for="username">Name</label>
<input type="text" id="username" name="username" class="form-control" required="">
<label for="surname">Surname</label>
<input type="text" id="surname" name="surname" class="form-control" required="">
<label for="email">E-mail</label>
<input type="text" id="email" name="email" class="form-control" required="">
<label for="age">Age</label>
<input type="int" id="age" name="age" class="form-control" required="">
<label for="position">Position</label>
<input type="text" id="position" name="position" class="form-control" required="">

</div>
</head>
</html>
