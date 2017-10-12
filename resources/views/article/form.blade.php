<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<strong>Title</strong>
			{!! Form::text('title', null, array(
				'placeholder' => 'Title',
				'class'		  => 'form-control'
			)) !!}
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group">
			<strong>Body</strong>
			{!! Form::textarea('body', null, array(
				'placeholder'	=> 'Body',
				'class'			=> 'form-control'
			)) !!}
		</div>
	</div>
	<div class="col-lg-12">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>