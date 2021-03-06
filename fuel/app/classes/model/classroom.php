<?php
class Model_Classroom extends \Orm\Model_Soft
{
	protected static $_properties = array(
		'id',
		'name',
		'capacity',
		'location',
		'note',
		'deleted_at',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);
        
	protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[50]');
		$val->add_field('capacity', 'Capacity', 'required|valid_string[numeric]');
		$val->add_field('location', 'Location', 'required|max_length[50]');

		return $val;
	}

}
