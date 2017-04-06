<h2>Editing Classroom</h2>
<br>

<?php echo render('admin/classroom/_form'); ?>
<p>
	<?php echo Html::anchor('admin/classroom/view/'.$classroom->id, 'View'); ?> |
	<?php echo Html::anchor('admin/classroom', 'Back'); ?></p>
