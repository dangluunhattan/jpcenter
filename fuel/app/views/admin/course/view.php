<h2>Viewing #<?php echo $course->id; ?></h2>

<p>
	<strong>Subject id:</strong>
	<?php echo $course->subject_id; ?></p>
<p>
	<strong>Teacher id:</strong>
	<?php echo $course->teacher_id; ?></p>
<p>
	<strong>Room id:</strong>
	<?php echo $course->room_id; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $course->start_date; ?></p>
<p>
	<strong>End date:</strong>
	<?php echo $course->end_date; ?></p>
<p>
	<strong>Day id:</strong>
	<?php echo $course->day_id; ?></p>
<p>
	<strong>Time id:</strong>
	<?php echo $course->time_id; ?></p>
<p>
	<strong>Max student:</strong>
	<?php echo $course->max_student; ?></p>
<p>
	<strong>Reg student:</strong>
	<?php echo $course->reg_student; ?></p>
<p>
	<strong>Fee:</strong>
	<?php echo $course->fee; ?></p>
<p>
	<strong>Status:</strong>
	<?php echo $course->status; ?></p>
<p>
	<strong>Introduce:</strong>
	<?php echo $course->introduce; ?></p>

<?php echo Html::anchor('admin/course/edit/'.$course->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/course', 'Back'); ?>