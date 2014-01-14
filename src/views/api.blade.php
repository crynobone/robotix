<div class="page-header">
	<h2>Robots.txt</h2>
</div>

{{ Form::open(array('url' => handles('orchestra/foundation::resources/robotix'), 'method' => 'POST')) }}
	<fieldset>
		<div class="form-group{{ $errors->has('robots') ? 'has-error' : '' }}">
            {{ Form::textarea('robots', $robots, array('rows' => 10, 'class' => 'form-control')) }}
            {{ $errors->first('robots', '<p class="help-block error">:message</p>') }}
			<p class="help-block"></p>
			<button type="submit" class="btn btn-primary">
                {{ trans('orchestra/foundation::label.submit') }}
			</button>
		</div>
	</fieldset>

{{ Form::close() }}
