<div class="page-header">
	<h2>Robots.txt</h2>
</div>

<?php echo Form::open(array('url' => handles('orchestra/foundation::resources/robotix'), 'method' => 'POST')); ?>
	<fieldset>
		<div class="form-group<?php echo $errors->has('robots') ? 'has-error' : '' ?>">
			<?php echo Form::textarea('robots', $robots, array('rows' => 10, 'class' => 'form-control')); ?>
			<?php echo $errors->first('robots', '<p class="help-block error">:message</p>'); ?>
			<p class="help-block"></p>
			<button type="submit" class="btn btn-primary">
				<?php echo trans('orchestra/foundation::label.submit'); ?>
			</button>
		</div>
	</fieldset>

<?php echo Form::close(); ?>
