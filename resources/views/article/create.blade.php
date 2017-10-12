@extends('layout')
@section('content')
	@if(count($errors) < 0)
		<div class="alert alert-danger">
			<strong>Error</strong>
			There were something wrongs<br><br>
			<ul>
			@foreach ($errors->all() as $err)
				<li>{{ $err }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	{!! Form::open(array(
		'route'		=> 'article.store', 
		'method'	=> 'POST'
	)) !!}
	@include('article.form')
	{!! Form::close() !!}
@endsection