@extends('layouts.helloapp')


@section('title','index')

@section('menubar')
	@parent
	インデックス
@endsection

@section('content')
	<p>{{$msg}}</p>
	@if (count($errors) >0)
	<p>pleasa resubmit</p>
	@endif
	<div>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	<form action="/hello" method="post">
	{{ csrf_field() }}

	<tr><th>name:</th><td> <input type="text" name="name"></td></tr>
	<tr><th>mail:</th><td> <input type="text" name="mail"></td></tr>
	<tr><th>age:</th><td><input type="text" name="age"></td></tr>
	<tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>


@endsection
