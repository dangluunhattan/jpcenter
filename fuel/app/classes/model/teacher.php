<?php

class Model_Teacher extends \Orm\Model_Soft {

    protected static $_properties = array(
        'id',
        'user_id',
        'fullname',
        'birthday',
        'gender',
        'phonenumber',
        'address',
        'level',
        'experience',
        'introduce',
        'deleted_at',
    );
    protected static $_soft_delete = array(
        'mysql_timestamp' => true,
    );
    protected static $_table_name = 'teacher';

}
