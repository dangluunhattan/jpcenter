<?php

namespace Model;

class Model_Lecturers extends \Orm\Model {
    protected static $_properties = array(
        'id', // both validation & typing observers will ignore the PK
		'user_id',
		'name' => array (
			'data_type' => 'varchar'
		),
		'date_of_birth',
		'sex',
		'phone',
		'address' => array (
			'data_type' => 'varchar'
		),
		'degree',
		'experience',
		'image' => array (
			'data_type' => 'varchar'
		),
		'intro'
	);
}

//since lecturers database is not too large, we can have all info just
//by 1 query
