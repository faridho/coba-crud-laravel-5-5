@extends('layout')
@section('content')
<div class="container">
	<div class="col-lg-12">
		<div class="pull-left">
			<a class="btn btn-success" href="{{ route('article.create') }}">Create New Article</a>
		</div>
	</div>
</div>
<div class="container">
	@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Title</th>
		<th>Body</th>
		<th>Action</th>
	</tr>
	@foreach($article as $dt)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $dt->title }}</td>
		<td>{{ $dt->body }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('article.show', $dt->id) }}">Show</a>
			<a class="btn btn-primary" href="{{ route('article.edit', $dt->id) }}">Edit</a>
			{!! Form::open([
				'method'	=> 'DELETE', 
				'route'		=> ['article.destroy', $dt->id]
			]) !!}
			{!! Form::submit('Delete', [
				'class'	=> 'btn btn-danger'
			]) !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>
{!! $article->links() !!}
</div>