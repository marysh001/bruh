<html>
<head>
<title>User list</title>
meta name="csrf-token" content="{{csrf-token()}}">
</head>
<body>
<div class="container mt-4>
<div class="card">
<div class="card-body">
<table>
@foreach($numbers as $key =>$number)
<tr><td>{{ $number }}</td><td><a href="{{route('remove_number, $key)}}">REMOVE</a></td>
@endforeach
</table>
<form name="add-new-number" method="post" action="{{ route('save_number') }}">
@csrf
<div class="form-group">
<label for="number_name">NewNumber</label>
<input type="int" id="number_name" class="form-control" required="">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>
