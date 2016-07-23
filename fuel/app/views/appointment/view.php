<h2>Viewing <span class='muted'>#<?php echo $appointment->id; ?></span></h2>

<p>
	<strong>User id:</strong>
	<?php echo $appointment->user_id; ?></p>
<p>
	<strong>Visit at:</strong>
	<?php echo $appointment->visit_at; ?></p>
<p>
	<strong>Channel 01:</strong>
	<?php echo $appointment->channel_01; ?></p>
<p>
	<strong>Agent 01:</strong>
	<?php echo $appointment->agent_01; ?></p>
<p>
	<strong>Client 01:</strong>
	<?php echo $appointment->client_01; ?></p>
<p>
	<strong>Brand 01:</strong>
	<?php echo $appointment->brand_01; ?></p>
<p>
	<strong>Product 01:</strong>
	<?php echo $appointment->product_01; ?></p>
<p>
	<strong>Memo 01:</strong>
	<?php echo $appointment->memo_01; ?></p>
<p>
	<strong>Channel 02:</strong>
	<?php echo $appointment->channel_02; ?></p>
<p>
	<strong>Agent 02:</strong>
	<?php echo $appointment->agent_02; ?></p>
<p>
	<strong>Client 02:</strong>
	<?php echo $appointment->client_02; ?></p>
<p>
	<strong>Brand 02:</strong>
	<?php echo $appointment->brand_02; ?></p>
<p>
	<strong>Product 02:</strong>
	<?php echo $appointment->product_02; ?></p>
<p>
	<strong>Memo 02:</strong>
	<?php echo $appointment->memo_02; ?></p>
<p>
	<strong>Channel 03:</strong>
	<?php echo $appointment->channel_03; ?></p>
<p>
	<strong>Agent 03:</strong>
	<?php echo $appointment->agent_03; ?></p>
<p>
	<strong>Client 03:</strong>
	<?php echo $appointment->client_03; ?></p>
<p>
	<strong>Brand 03:</strong>
	<?php echo $appointment->brand_03; ?></p>
<p>
	<strong>Product 03:</strong>
	<?php echo $appointment->product_03; ?></p>
<p>
	<strong>Memo 03:</strong>
	<?php echo $appointment->memo_03; ?></p>
<p>
	<strong>Channel 04:</strong>
	<?php echo $appointment->channel_04; ?></p>
<p>
	<strong>Agent 04:</strong>
	<?php echo $appointment->agent_04; ?></p>
<p>
	<strong>Client 04:</strong>
	<?php echo $appointment->client_04; ?></p>
<p>
	<strong>Brand 04:</strong>
	<?php echo $appointment->brand_04; ?></p>
<p>
	<strong>Product 04:</strong>
	<?php echo $appointment->product_04; ?></p>
<p>
	<strong>Memo 04:</strong>
	<?php echo $appointment->memo_04; ?></p>
<p>
	<strong>Channel 05:</strong>
	<?php echo $appointment->channel_05; ?></p>
<p>
	<strong>Agent 05:</strong>
	<?php echo $appointment->agent_05; ?></p>
<p>
	<strong>Client 05:</strong>
	<?php echo $appointment->client_05; ?></p>
<p>
	<strong>Brand 05:</strong>
	<?php echo $appointment->brand_05; ?></p>
<p>
	<strong>Product 05:</strong>
	<?php echo $appointment->product_05; ?></p>
<p>
	<strong>Memo 05:</strong>
	<?php echo $appointment->memo_05; ?></p>

<?php echo Html::anchor('appointment/edit/'.$appointment->id, 'Edit'); ?> |
<?php echo Html::anchor('appointment', 'Back'); ?>