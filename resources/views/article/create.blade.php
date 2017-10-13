@extends('layout')
@section('content')
	{!! Form::open(array(
		'route'		=> 'article.store', 
		'method'	=> 'POST'
	)) !!}
	@include('article.form')
	{!! Form::close() !!}
@endsection