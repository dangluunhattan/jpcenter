<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($classroom) ? $classroom->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Capacity', 'capacity', array('class'=>'control-label')); ?>

				<?php echo Form::input('capacity', Input::post('capacity', isset($classroom) ? $classroom->capacity : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Capacity')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Location', 'location', array('class'=>'control-label')); ?>

				<?php echo Form::input('location', Input::post('location', isset($classroom) ? $classroom->location : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Location')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Note', 'note', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('note', Input::post('note', isset($classroom) ? $classroom->note : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Note')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>