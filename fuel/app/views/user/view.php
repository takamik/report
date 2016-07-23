<h2>Viewing <span class='muted'>#<?php echo $user->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $user->name; ?></p>
<p>
	<strong>Mail:</strong>
	<?php echo $user->mail; ?></p>
<p>
	<strong>Sort:</strong>
	<?php echo $user->sort; ?></p>
<p>
	<strong>Deliver flag:</strong>
	<?php echo $user->deliver_flag; ?></p>
<p>
	<strong>Delete flag:</strong>
	<?php echo $user->delete_flag; ?></p>

<?php echo Html::anchor('user/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('user', 'Back'); ?>