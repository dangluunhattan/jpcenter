<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Model\resetkey;
use Model\student;
class Controller_Recovery extends Controller_Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
         //Check key if vail display reset form , if not display error
	public function action_key($hashkey)
	{      
            $user_id = $this->check_hash_key($hashkey);
            if($user_id === false)
            {
              $this->template ->title ="エラー";
              $this->template->content = View::forge('recovery/error');
              return;
            }
            if($user_id == -1)
            {
              $this->template ->title ="エラー";
              $this->template->content = View::forge('recovery/error',array('error' => '24時間が切れた.'));
              return;
            }
            $this->template ->css ="recovery.css";
            $this->template ->title ="パースワード変更";
            $this->template->content = View::forge('recovery/index', array('id'=>$user_id));
	}
        public function action_reset()
        {
            $this->template ->title ="";
            if(Input::post())
            {
              $username = $this->get_username(Input::post('id'));
              try{
                  $currentPass = Auth::reset_password($username);
                  Auth::change_password($currentPass,Input::post('password'),$username);
                  $this->remove_hash_key(Input::post('id'));
                  $data['error'] = 'パスワード変更済み';
                  $this->template->title = 'ログインページ';
                  $this->template->css = 'loginstyle.css';
                  $this->template->content = View::forge('login/index',$data);
              }catch(\SimpleUserUpdateException $e)
              {
                    $data['error'] = $e->getMessage();
                    $this->template ->title ="エラー";
                    $this->template->content = View::forge('recovery/error',$data);
                    return;
              }
            }
            else
            {
              $this->template ->title ="エラー";
              $this->template->content = View::forge('recovery/error');
              return;
            }
        }
        //try to get username, display error if error , return username if success.
        public function get_username($id)
        {
            $user = Model_User::find($id);  
            if(is_null($user))  
            {
              $this->template ->title ="エラー";
              $this->template->content = View::forge('recovery/error');
              return;
            }
            return $user->username;
        }
        //Check if pagram $key is a vaild hash_key in database, return id if valid, -1 if expried, false if not found key
        public function check_hash_key($key)
        {
            $result = Model_Resetkey::find('first', array('where' =>
                                    array('hash_key'=>$key)
                                    ));
            if(is_null($result))
            {
                return false;
            }else
            {
                if(intval(Date::time_ago(strtotime($result->created_at),null,'hour')) > 24)
                {
                    $result->delete();
                    return -1;
                }else{
                    return $result->user_id;
                }
            }
            
        }
        //remove hash_key by user id
        private function remove_hash_key($user_id){
            $reset_key = Model_Resetkey::find('first',array('where'=>array(
                                                'user_id' => $user_id
                                
            )));
            $reset_key->delete();
        }
        public function action_test()
        {
            $data['resetlink']   = Router::get('passwordreset/(:any)'.'testyo');
            $data['contactlink'] = Router::get('contact');
            $data['email_title'] = 'こにちは';
            $data['email_message'] = View::forge('email/email_body',$data);
            $this->template->title = '';
            $this->template->content = View::forge('email/password_recovery',$data);
        }
}