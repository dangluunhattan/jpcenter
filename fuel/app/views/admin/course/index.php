<h2>Listing Courses</h2>
<br>
<?php if ($courses): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Subject id</th>
			<th>Teacher id</th>
			<th>Room id</th>
			<th>Start date</th>
			<th>End date</th>
			<th>Day id</th>
			<th>Time id</th>
			<th>Max student</th>
			<th>Reg student</th>
			<th>Fee</th>
			<th>Status</th>
			<th>Introduce</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($courses as $item): ?>		<tr>

			<td><?php echo $item->subject_id; ?></td>
			<td><?php echo $item->teacher_id; ?></td>
			<td><?php echo $item->room_id; ?></td>
			<td><?php echo $item->start_date; ?></td>
			<td><?php echo $item->end_date; ?></td>
			<td><?php echo $item->day_id; ?></td>
			<td><?php echo $item->time_id; ?></td>
			<td><?php echo $item->max_student; ?></td>
			<td><?php echo $item->reg_student; ?></td>
			<td><?php echo $item->fee; ?></td>
			<td><?php echo $item->status; ?></td>
			<td><?php echo $item->introduce; ?></td>
			<td>
				<?php echo Html::anchor('admin/course/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/course/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/course/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Courses.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/course/create', 'Add new Course', array('class' => 'btn btn-success')); ?>

</p>
