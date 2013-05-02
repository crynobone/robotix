<div class="page-header">
	<h2>Robots.txt</h2>
</div>

{{ Form::open(array('url' => handles('orchestra/foundation::resources/robotix'), 'method' => 'POST')) }}

	<div class="control-group {{ $errors->has('robots') ? 'error' : '' }}">
		<div class="controls">
			{{ Form::textarea('robots', $robots, array('rows' => 10)) }}
			{{ $errors->first('robots', '<p class="help-block">:message</p>') }}
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">
			{{ trans('orchestra/foundation::label.submit') }}
		</button>
	</div>

{{ Form::close() }}
