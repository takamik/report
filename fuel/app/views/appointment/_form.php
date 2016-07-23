<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($appointment) ? $appointment->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Visit at', 'visit_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('visit_at', Input::post('visit_at', isset($appointment) ? $appointment->visit_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Visit at')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Channel 01', 'channel_01', array('class'=>'control-label')); ?>

				<?php echo Form::input('channel_01', Input::post('channel_01', isset($appointment) ? $appointment->channel_01 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Channel 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Agent 01', 'agent_01', array('class'=>'control-label')); ?>

				<?php echo Form::input('agent_01', Input::post('agent_01', isset($appointment) ? $appointment->agent_01 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Agent 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client 01', 'client_01', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_01', Input::post('client_01', isset($appointment) ? $appointment->client_01 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Brand 01', 'brand_01', array('class'=>'control-label')); ?>

				<?php echo Form::input('brand_01', Input::post('brand_01', isset($appointment) ? $appointment->brand_01 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Brand 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product 01', 'product_01', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_01', Input::post('product_01', isset($appointment) ? $appointment->product_01 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Memo 01', 'memo_01', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('memo_01', Input::post('memo_01', isset($appointment) ? $appointment->memo_01 : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Memo 01')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Channel 02', 'channel_02', array('class'=>'control-label')); ?>

				<?php echo Form::input('channel_02', Input::post('channel_02', isset($appointment) ? $appointment->channel_02 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Channel 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Agent 02', 'agent_02', array('class'=>'control-label')); ?>

				<?php echo Form::input('agent_02', Input::post('agent_02', isset($appointment) ? $appointment->agent_02 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Agent 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client 02', 'client_02', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_02', Input::post('client_02', isset($appointment) ? $appointment->client_02 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Brand 02', 'brand_02', array('class'=>'control-label')); ?>

				<?php echo Form::input('brand_02', Input::post('brand_02', isset($appointment) ? $appointment->brand_02 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Brand 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product 02', 'product_02', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_02', Input::post('product_02', isset($appointment) ? $appointment->product_02 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Memo 02', 'memo_02', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('memo_02', Input::post('memo_02', isset($appointment) ? $appointment->memo_02 : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Memo 02')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Channel 03', 'channel_03', array('class'=>'control-label')); ?>

				<?php echo Form::input('channel_03', Input::post('channel_03', isset($appointment) ? $appointment->channel_03 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Channel 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Agent 03', 'agent_03', array('class'=>'control-label')); ?>

				<?php echo Form::input('agent_03', Input::post('agent_03', isset($appointment) ? $appointment->agent_03 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Agent 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client 03', 'client_03', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_03', Input::post('client_03', isset($appointment) ? $appointment->client_03 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Brand 03', 'brand_03', array('class'=>'control-label')); ?>

				<?php echo Form::input('brand_03', Input::post('brand_03', isset($appointment) ? $appointment->brand_03 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Brand 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product 03', 'product_03', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_03', Input::post('product_03', isset($appointment) ? $appointment->product_03 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Memo 03', 'memo_03', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('memo_03', Input::post('memo_03', isset($appointment) ? $appointment->memo_03 : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Memo 03')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Channel 04', 'channel_04', array('class'=>'control-label')); ?>

				<?php echo Form::input('channel_04', Input::post('channel_04', isset($appointment) ? $appointment->channel_04 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Channel 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Agent 04', 'agent_04', array('class'=>'control-label')); ?>

				<?php echo Form::input('agent_04', Input::post('agent_04', isset($appointment) ? $appointment->agent_04 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Agent 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client 04', 'client_04', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_04', Input::post('client_04', isset($appointment) ? $appointment->client_04 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Brand 04', 'brand_04', array('class'=>'control-label')); ?>

				<?php echo Form::input('brand_04', Input::post('brand_04', isset($appointment) ? $appointment->brand_04 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Brand 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product 04', 'product_04', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_04', Input::post('product_04', isset($appointment) ? $appointment->product_04 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Memo 04', 'memo_04', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('memo_04', Input::post('memo_04', isset($appointment) ? $appointment->memo_04 : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Memo 04')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Channel 05', 'channel_05', array('class'=>'control-label')); ?>

				<?php echo Form::input('channel_05', Input::post('channel_05', isset($appointment) ? $appointment->channel_05 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Channel 05')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Agent 05', 'agent_05', array('class'=>'control-label')); ?>

				<?php echo Form::input('agent_05', Input::post('agent_05', isset($appointment) ? $appointment->agent_05 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Agent 05')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client 05', 'client_05', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_05', Input::post('client_05', isset($appointment) ? $appointment->client_05 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client 05')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Brand 05', 'brand_05', array('class'=>'control-label')); ?>

				<?php echo Form::input('brand_05', Input::post('brand_05', isset($appointment) ? $appointment->brand_05 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Brand 05')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Product 05', 'product_05', array('class'=>'control-label')); ?>

				<?php echo Form::input('product_05', Input::post('product_05', isset($appointment) ? $appointment->product_05 : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Product 05')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Memo 05', 'memo_05', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('memo_05', Input::post('memo_05', isset($appointment) ? $appointment->memo_05 : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Memo 05')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>