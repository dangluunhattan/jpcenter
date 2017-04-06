<h2>Viewing #<?php echo $subject->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $subject->name; ?></p>
<p>
	<strong>Introduce:</strong>
	<?php echo $subject->introduce; ?></p>

<?php echo Html::anchor('admin/subject/edit/'.$subject->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/subject', 'Back'); ?>