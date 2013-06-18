<div class="page-header">
	<h2>Robots.txt</h2>
</div>

<?php echo Form::open(array('url' => handles('orchestra/foundation::resources/robotix'), 'method' => 'POST')); ?>

	<div class="control-group <?php echo $errors->has('robots') ? 'has-error' : ''; ?>">
		<div class="controls">
			<?php echo Form::textarea('robots', $robots, array('rows' => 10)); ?>
			<?php echo $errors->first('robots', '<p class="help-block error">:message</p>'); ?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">
			<?php echo trans('orchestra/foundation::label.submit'); ?>
		</button>
	</div>

<?php echo Form::close(); ?>
