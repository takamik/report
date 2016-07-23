<h2>Listing <span class='muted'>Appointments</span></h2>
<br>
<?php if ($appointments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Visit at</th>
			<th>Channel 01</th>
			<th>Agent 01</th>
			<th>Client 01</th>
			<th>Brand 01</th>
			<th>Product 01</th>
			<th>Memo 01</th>
			<th>Channel 02</th>
			<th>Agent 02</th>
			<th>Client 02</th>
			<th>Brand 02</th>
			<th>Product 02</th>
			<th>Memo 02</th>
			<th>Channel 03</th>
			<th>Agent 03</th>
			<th>Client 03</th>
			<th>Brand 03</th>
			<th>Product 03</th>
			<th>Memo 03</th>
			<th>Channel 04</th>
			<th>Agent 04</th>
			<th>Client 04</th>
			<th>Brand 04</th>
			<th>Product 04</th>
			<th>Memo 04</th>
			<th>Channel 05</th>
			<th>Agent 05</th>
			<th>Client 05</th>
			<th>Brand 05</th>
			<th>Product 05</th>
			<th>Memo 05</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($appointments as $item): ?>		<tr>

			<td><?php echo $item->user_id; ?></td>
			<td><?php echo $item->visit_at; ?></td>
			<td><?php echo $item->channel_01; ?></td>
			<td><?php echo $item->agent_01; ?></td>
			<td><?php echo $item->client_01; ?></td>
			<td><?php echo $item->brand_01; ?></td>
			<td><?php echo $item->product_01; ?></td>
			<td><?php echo $item->memo_01; ?></td>
			<td><?php echo $item->channel_02; ?></td>
			<td><?php echo $item->agent_02; ?></td>
			<td><?php echo $item->client_02; ?></td>
			<td><?php echo $item->brand_02; ?></td>
			<td><?php echo $item->product_02; ?></td>
			<td><?php echo $item->memo_02; ?></td>
			<td><?php echo $item->channel_03; ?></td>
			<td><?php echo $item->agent_03; ?></td>
			<td><?php echo $item->client_03; ?></td>
			<td><?php echo $item->brand_03; ?></td>
			<td><?php echo $item->product_03; ?></td>
			<td><?php echo $item->memo_03; ?></td>
			<td><?php echo $item->channel_04; ?></td>
			<td><?php echo $item->agent_04; ?></td>
			<td><?php echo $item->client_04; ?></td>
			<td><?php echo $item->brand_04; ?></td>
			<td><?php echo $item->product_04; ?></td>
			<td><?php echo $item->memo_04; ?></td>
			<td><?php echo $item->channel_05; ?></td>
			<td><?php echo $item->agent_05; ?></td>
			<td><?php echo $item->client_05; ?></td>
			<td><?php echo $item->brand_05; ?></td>
			<td><?php echo $item->product_05; ?></td>
			<td><?php echo $item->memo_05; ?></td>
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
