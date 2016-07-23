<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($user) ? $user->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Mail', 'mail', array('class'=>'control-label')); ?>

				<?php echo Form::input('mail', Input::post('mail', isset($user) ? $user->mail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Mail')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Sort', 'sort', array('class'=>'control-label')); ?>

				<?php echo Form::input('sort', Input::post('sort', isset($user) ? $user->sort : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sort')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Deliver flag', 'deliver_flag', array('class'=>'control-label')); ?>

				<?php echo Form::input('deliver_flag', Input::post('deliver_flag', isset($user) ? $user->deliver_flag : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Deliver flag')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Delete flag', 'delete_flag', array('class'=>'control-label')); ?>

				<?php echo Form::input('delete_flag', Input::post('delete_flag', isset($user) ? $user->delete_flag : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Delete flag')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>