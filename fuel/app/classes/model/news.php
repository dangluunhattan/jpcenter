<?php

class Model_News extends \Orm\Model_Soft {

    protected static $_properties = array(
        'id',
        'title',
        'category_id',
        'body',
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
    protected static $_belongs_to = array(
        'category' => array(
            'key_from' => 'category_id',
            'model_to' => 'Model_Category',
            'key_to' => 'id',
            'cascade_save' => true,
            'cascade_delete' => false,
        )
    );

    public static function validate($factory) {
        $val = Validation::forge($factory);
        $val->add_field('title', 'Title', 'required|max_length[255]');
        $val->add_field('body', 'Body', 'required');

        return $val;
    }

}
