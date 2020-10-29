@extends("home")



@section("content")


<form method="post">

	@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>-{{ $error }}</div>
        @endforeach
	@endif

	<div>
		<input type="text" name="title" value="{{ $article->title }}">
	</div>
	<div>
		<textarea name="body">{{ $article->body }}</textarea>
	</div>
	<div>
        <input type="radio" id="show" name="display" value="1">
        <label for="show">show</label><br>
        <input type="radio" id="hide" name="display" value="0">
        <label for="hide">Hide</label><br>
	</div>

	@csrf

	<div>
		<button name="submit">update</button>
	</div>

</form>

@endsection
