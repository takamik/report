<h2>Viewing <span class='muted'>#<?php echo $appointment->id; ?></span></h2>

<p>
	<strong>Member id:</strong>
	<?php echo $appointment->member_id; ?></p>
<p>
	<strong>Visit at:</strong>
	<?php echo $appointment->visit_at; ?></p>
<p>
	<strong>Channel:</strong>
	<?php echo $appointment->channel; ?></p>
<p>
	<strong>Agent:</strong>
	<?php echo $appointment->agent; ?></p>
<p>
	<strong>Client:</strong>
	<?php echo $appointment->client; ?></p>
<p>
	<strong>Brand:</strong>
	<?php echo $appointment->brand; ?></p>
<p>
	<strong>Product:</strong>
	<?php echo $appointment->product; ?></p>
<p>
	<strong>Memo:</strong>
	<?php echo $appointment->memo; ?></p>

<?php echo Html::anchor('appointment/edit/'.$appointment->id, 'Edit'); ?> |
<?php echo Html::anchor('appointment', 'Back'); ?>