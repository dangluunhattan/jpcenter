<?php
class Model_Category extends \Orm\Model_Soft
{
	protected static $_table_name = 'category';
    protected static $_primary_key = array('id');
	protected static $_properties = array(
		'id',
		'name',
		'deleted_at',
		'created_at',
		'updated_at'
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

}
