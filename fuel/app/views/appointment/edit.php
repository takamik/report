<h2>Editing <span class='muted'>Appointment</span></h2>
<br>

<?php echo render('appointment/_form'); ?>
<p>
	<?php echo Html::anchor('appointment/view/'.$appointment->id, 'View'); ?> |
	<?php echo Html::anchor('appointment', 'Back'); ?></p>
