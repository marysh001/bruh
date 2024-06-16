<html>
<head>
<title>Travel List</title>
</head>
<body>
<h1>My travel Buckect List<h1>
<h2>Places Person Has Not Emigrated From</h2>
<ul>
@foreach ($togo as newplace)
<li>{{$newplace->name}}</li>
@endforeach
</ul>
<h2>Places Person has Emigrated From</h2>
<ul>
@foreach($visited as $place)
<li>{{ $place->name }}</li>
@endforeach
</ul>
</body>
</html>
