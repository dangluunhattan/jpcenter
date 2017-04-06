<h2>Viewing #<?php echo $classroom->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $classroom->name; ?></p>
<p>
	<strong>Capacity:</strong>
	<?php echo $classroom->capacity; ?></p>
<p>
	<strong>Location:</strong>
	<?php echo $classroom->location; ?></p>
<p>
	<strong>Note:</strong>
	<?php echo $classroom->note; ?></p>

<?php echo Html::anchor('admin/classroom/edit/'.$classroom->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/classroom', 'Back'); ?>