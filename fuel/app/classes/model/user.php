<?php


Class Model_User extends \Orm\Model_Soft
{
    protected static $_primary_key = array('id');
    protected static $_table_name='users';
    protected static $_properties = array('id'
     ,'username'
     ,'password'
     ,'email'
     ,'login_hash'
     ,'last_login'
     ,'group'
     ,'profile_fields'
     ,'created_at'
     ,'updated_at'
     ,'deleted_at'
    );
    protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);
   
    
    
}
