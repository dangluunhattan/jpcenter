<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Model_Resetkey extends \Orm\Model
{
    protected static $_primary_key = array('id');
    protected static $_table_name='password_reset_key';
    protected static $_properties = array('id'
     ,'user_id'
     ,'hash_key'
     ,'created_at'
    );
    
   
    
    
}
