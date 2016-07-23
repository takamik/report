<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<?php echo '<div class="has-error" style="color: red;">' . Session::get_flash('error') . '</div>' ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('氏名', 'user_id', array('class'=>'control-label')); ?>
			<?php echo Form::select('氏名',
				isset($appointment) ? $appointment->user_id : 0, $user_list,
				array('class' => 'form-control', 'placeholder' => '選択してください。', 'style' => 'width:30%')); ?>
		</div>
<!--
		<div class="form-group">
			<?php echo Form::label('訪問日', 'visit_at', array('class'=>'control-label')); ?>
			<?php echo Form::input('visit_at', Input::post('visit_at', isset($appointment) ? $appointment->visit_at : ''), 
				array('class' => 'col-md-4 form-control', 'placeholder'=>'訪問日')); ?>
		</div>
-->
		<div class="form-group">
			<?php echo Form::label('与件経路', 'channel', array('class'=>'control-label')); ?>
<!--
			<?php echo Form::input('channel', Input::post('channel', isset($appointment) ? $appointment->channel : ''), 
				array('class' => 'col-md-4 form-control', 'placeholder'=>'与件経路')); ?>
			<label><?php echo Form::radio('channel','', Session::get_flash('item')); ?> </label>
-->

<?php 
//var_dump($channel_list);
var_dump($appointment);

foreach($channel_list as $id => $name) : 
//echo $id, ':', $name, '<br>';
/*?>
			<label><?php echo Form::radio('channel',$id, 
				Input::post(isset($appointment) && isset($appointment->channel)  
&& $appointment->channel == $id ? true : false)); 
?> $name</label>
<?php */ endforeach; ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('代理店（直の場合は空欄）', 'agent', array('class'=>'control-label')); ?>
			<?php echo Form::input('agent', Input::post('agent', isset($appointment) ? $appointment->agent : ''), 
				array('class' => 'col-md-4 form-control', 'placeholder'=>'代理店')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('クライアント(エンド)', 'client', array('class'=>'control-label')); ?>
			<?php echo Form::input('client', Input::post('client', isset($appointment) ? $appointment->client : ''), 
				array('class' => 'col-md-4 form-control', 'placeholder'=>'クライアント(エンド)')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('ブランド名', 'brand', array('class'=>'control-label')); ?>
			<?php echo Form::input('brand', Input::post('brand', isset($appointment) ? $appointment->brand : ''), 
				array('class' => 'col-md-4 form-control', 'placeholder'=>'ブランド名')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('TRDS商品（提案予定）', 'product', array('class'=>'control-label')); ?>
			<?php echo Form::select('TRDS商品（提案予定）',
				isset($appointment) ? $appointment->product : 0, $product_list,
				array('class' => 'form-control', 'placeholder' => '選択してください。', 'style' => 'width:30%')); ?>
		</div>
		<div class="form-group">
			<?php echo Form::label('Memo', 'memo', array('class'=>'control-label')); ?>
			<?php echo Form::textarea('memo', Input::post('memo', isset($appointment) ? $appointment->memo : ''), 
				array('class' => 'col-md-8 form-control', 'rows' => 3, 'placeholder'=>'Memo')); ?>
		</div>

		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
