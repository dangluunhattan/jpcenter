<?php


Class Model_Registercourses extends \Orm\Model_Soft
{
    protected static $_primary_key = array('id');
    protected static $_table_name='register';
    protected static $_properties = array('id'
     ,'course_id'
     ,'student_id'
     ,'date_regis'
     ,'confirm_regis'
     ,'note'
     ,'updated_at'
     ,'deleted_at'
    );
    protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);
}