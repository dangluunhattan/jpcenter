<?php 
class Model_Student extends Orm\Model_Soft{
    protected static $_table_name = 'student';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id',
        'user_id',
        'fullname',
        'birthday',
        'gender',
        'phonenumber',
        'address',
        'image',
        'emailcheck',
        'deleted_at'
    );
    protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);

}