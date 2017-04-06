<h2>Listing Classrooms</h2>
<br>
<?php if ($classrooms): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Capacity</th>
			<th>Location</th>
			<th>Note</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($classrooms as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->capacity; ?></td>
			<td><?php echo $item->location; ?></td>
			<td><?php echo $item->note; ?></td>
			<td>
				<?php echo Html::anchor('admin/classroom/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/classroom/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/classroom/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Classrooms.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/classroom/create', 'Add new Classroom', array('class' => 'btn btn-success')); ?>

</p>
