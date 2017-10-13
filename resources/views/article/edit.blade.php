@extends('layout')
@section('content')
	<div class="container">
		<div class="col-lg-12">
			<div class="pull-right">
				<a href="{{ route('article.index') }}" class="btn btn-success"> Article</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12">
			{!! Form::model($article, [
				'method' => 'PATCH',
				'route'  => ['article.update', $article->id]
			]) !!}
				@include('article.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection