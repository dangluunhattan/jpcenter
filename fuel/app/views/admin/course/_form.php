<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Subject id', 'subject_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('subject_id', Input::post('subject_id', isset($course) ? $course->subject_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Subject id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Teacher id', 'teacher_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('teacher_id', Input::post('teacher_id', isset($course) ? $course->teacher_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Teacher id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Room id', 'room_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('room_id', Input::post('room_id', isset($course) ? $course->room_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Room id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Start date', 'start_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('start_date', Input::post('start_date', isset($course) ? $course->start_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Start date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('End date', 'end_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('end_date', Input::post('end_date', isset($course) ? $course->end_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'End date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Day id', 'day_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('day_id', Input::post('day_id', isset($course) ? $course->day_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Day id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Time id', 'time_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('time_id', Input::post('time_id', isset($course) ? $course->time_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Max student', 'max_student', array('class'=>'control-label')); ?>

				<?php echo Form::input('max_student', Input::post('max_student', isset($course) ? $course->max_student : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Max student')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Reg student', 'reg_student', array('class'=>'control-label')); ?>

				<?php echo Form::input('reg_student', Input::post('reg_student', isset($course) ? $course->reg_student : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Reg student')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Fee', 'fee', array('class'=>'control-label')); ?>

				<?php echo Form::input('fee', Input::post('fee', isset($course) ? $course->fee : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Fee')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Status', 'status', array('class'=>'control-label')); ?>

				<?php echo Form::input('status', Input::post('status', isset($course) ? $course->status : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Status')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Introduce', 'introduce', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('introduce', Input::post('introduce', isset($course) ? $course->introduce : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Introduce')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>