<?php
class Model_Contact extends Orm\Model_Soft{
    protected static $_table_name = 'contact';
    protected static $_primary_key = array('id');
    protected static $_properties = array(
        'id',
        'name',
        'email',
        'address',
        'title',
        'content',
        'phone',
        'deleted_at',
        'created'   
    );

    protected static $_soft_delete = array(
        'mysql_timestamp' => true,
    );
}