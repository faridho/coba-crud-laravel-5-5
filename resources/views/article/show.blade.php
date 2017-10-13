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
			<div class="form-group">
				<label>Title</label>
				{{ $article->title }}
			</div>
			<div class="form-group">
				<label>Body</label>
				{{ $article->body }}
			</div>
		</div>
	</div>
@endsection