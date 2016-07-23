<h2>Listing <span class='muted'>Appointments</span></h2>
<br>
<?php if ($appointments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Member id</th>
			<th>Visit at</th>
			<th>Channel</th>
			<th>Agent</th>
			<th>Client</th>
			<th>Brand</th>
			<th>Product</th>
			<th>Memo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($appointments as $item): ?>		<tr>

			<td><?php echo $item->member_id; ?></td>
			<td><?php echo $item->visit_at; ?></td>
			<td><?php echo $item->channel; ?></td>
			<td><?php echo $item->agent; ?></td>
			<td><?php echo $item->client; ?></td>
			<td><?php echo $item->brand; ?></td>
			<td><?php echo $item->product; ?></td>
			<td><?php echo $item->memo; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('appointment/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('appointment/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('appointment/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Appointments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('appointment/create', 'Add new Appointment', array('class' => 'btn btn-success')); ?>

</p>
