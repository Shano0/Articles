@extends("home")


@section("content")
<table>
	<tr>
		<td>id</td>
		<td>title</td>
		<td>is published</td>
		<td></td>
	</tr>

	@foreach($articles as $article)

	<tr>
		<td>{{ $article->id }}</td>
		<td>{{ $article->title }}</td>
		<td>{{ $article->is_published }}</td>
		<td>
			<a href="/edit/{{ $article->id }}">edit</a>
		</td>
	</tr>

	@endforeach

</table>
@endsection
