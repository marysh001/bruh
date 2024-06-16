<?php
<html>
<body>

<form name="book" method="post" action "{{Route('store_book')}}
@csrf
<label>Author </label><input type="text" name"author" value=@if($book) {{book->author}}@endif"><br>
<label>Name</label><input type="text" name="name" value="@if($book) {{$book->name}}@endif"><br>
<label> genres </label>
<input type="checkbox" name="genre[]" value="drama" @if(in_array('drama',unserialize($book->genre)) checked @endif>drama</input>
<input type="checkbox" name="genre[]" value="sci-fi" @if(in_array('sci-fi', $book->genre))checked @endif></input>

<input type="submit" value="Send">
</form>
</body>
</html>
