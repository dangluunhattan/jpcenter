<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Model\resetkey;
use Model\user;
use Model\student;
class Controller_Login extends Controller_Base{
    public function action_index()
    {
        if(Auth::check())
        {
            $username = Auth::get('username');
            return Response::forge(View::forge('login/loggedin',array('username'=>$username)));
        }else
        {
            $this->template->title = 'ログインページ';
            $this->template->css = 'loginstyle.css';
            $this->template->content = View::forge('login/index');
        }
    }
    //Hàm xử lý login
    public function action_dologin()
    {
        if(Input::post())
        {   
            if(Auth::login())
            {
                if(Input::param('remember'))
                {
                    // create the remember-me cookie
                    Auth::remember_me();
                }
                else
                {
                    // delete the remember-me cookie if present
                    Auth::dont_remember_me();
                }
                
                $username = Auth::get('username');
                return Response::forge(View::forge('login/loggedin',array('username' => $username)));
            }
            $error = "ログインできません！";
            $this->template->title = 'ログインページ';
            $this->template->css = 'loginstyle.css';
            $this->template->content = View::forge('login/index',array('error'=>$error));
        } else {
            $error = "ログインできません！";
            $this->template->title = 'ログインページ';
            $this->template->css = 'loginstyle.css';
            $this->template->content = View::forge('login/index',array('error'=>$error));
        }
    }
    
    public function action_dologout()
    {
        if(!Auth::check())
        {
              $error = 'Chua Login';
        }else
        {
            Auth::dont_remember_me();
            Auth::logout();
            $error = "ログアウト";
        }
        $this->template->title = 'ログインページ';
        $this->template->css = 'loginstyle.css';
        $this->template->content = View::forge('login/index',array('error'=>$error));
    }
    public function check_upload_avatar()
    {
          $config = array(
                'path'          => DOCROOT.'/assets/img',
                'randomize'     => true,
                'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
                'max_size'	=> 0
            );
            // process the uploaded files in $_FILES
            Upload::process($config);
            // if there are any valid files
            if (Upload::is_valid())
            {
                // save them according to the config
                // call a model method to update the database
                return true;
            }
            // and process any errors
            foreach (Upload::get_errors() as $file)
            {
               // $file is an array with all file information,
               // $file['errors'] contains an array of all error occurred
               // each array element is an an array containing 'error' and 'message'
               return $file;
            }
    }
    public function action_doregister()
    {
         if(Input::post())
        {   
            try{
                $result = Auth::create_user(
                                Input::post('username'),
                                Input::post('password'),
                                Input::post('email'),
                                1);
            }catch(\SimpleUserUpdateException $e)
            {
                print_r($e);
                exit;
            }
             $data['username'] = Input::post('username');
             $data['email'] = Input::post('email');
             $data['name'] = Input::post('name');
             $data['gender'] = Input::post('gender');
             $data['phone'] = Input::post('phone');
             $data['bday'] = Input::post('bday');
             $data['address'] = Input::post('address');
            $uploadStatus = $this->check_upload_avatar(); 
            if($uploadStatus['error'] == true)
            {
                if($uploadStatus['errors'][0]['error'] != '4')
                {
                    print_r($uploadStatus);
                    $data['msg'] = $uploadStatus['errors'][0]['message'];
                    $this->template->title = 'ログインページ';
                    $this->template->css = 'registerpage.css';
                    $this->template->content = View::forge('login/register',$data);
                    return;
                }
            }
            
            if($result === false)
            {
                $data['msg'] = "レジスターできません";
                $this->template->title = 'ログインページ';
                $this->template->css = 'registerpage.css';
                $this->template->content = View::forge('login/register',$data);
            }else
            {
                
                Upload::save();
                $uploadfile = Upload::get_files(0);
                    $data['error'] = "Register OK";
                    $newStudent = new Model_Student();
                    $newStudent->user_id     =  $result;
                    $newStudent->fullname   = Input::post('name');
                    $newStudent->birthday   = Input::post('bday');
                    $newStudent->gender     = Input::post('gender');
                    $newStudent->phone      = Input::post('phone');
                    $newStudent->address    = Input::post('address');
                    if($uploadStatus['error'] == false){
                        $newStudent->image      = $uploadfile['saved_as'];
                    }
                    $newStudent->emailcheck =  "0";
                    $newStudent->save();
                    $this->template->title = 'Login';
                    $this->template->css = 'loginstyle.css';
                    $this->template->content = View::forge('login/index',$data);
            }
        } else {
            $data['msg'] = "レジスターできません";
            $this->template->title = 'ログインページ';
            $this->template->css = 'registerpage.css';
            $this->template->content = View::forge('login/register',$data);
        }
        
    }
    public function action_fblogin()
    {
        $this->template->title = 'ログインページ';
        $this->template->css = 'loginstyle.css';
        $id = false;
        if(Input::post())
        {
            
            $username = Input::post('id');
            $email = Input::post('email'); 
            $bday = Input::post('bday');
            $name = Input::post('name');
            $location = Input::post('location');
            $gender = Input::post('gender');
            try{
                $id = Auth::create_user(
                                $username,
                                'abc',
                                $email,
                                1);
                $newStudent = new Model_Student();
                $newStudent->user_id = $id;
                $newStudent->fullname = $name;
                $newStudent->birthday = $bday;
                $newStudent->gender = $gender;
                $newStudent->address =  $location;
                $newStudent->emailcheck =  "0";
                $newStudent->save();
            }catch(SimpleUserUpdateException $e){
                $user = Model_User::find('first', array(
                                    'where' => array(
                                        array('email', $email),
                                        )
                ));
               if($user == null)
               {  
                   $error = "Something Went Wrong";
                   $this->template->content = View::forge('login/index',array('error'=>$error));
               }else
               {
                   $id = $user->id;
               }
            }finally {
                if($id != false)
                {
                    if (Auth::force_login($id))
                    {
                           $username = Auth::get('username');
                           return Response::forge(View::forge('login/loggedin',array('username' => $username)));
                    }else
                    {
                         $error = "Can't Login";
                        $this->template->content = View::forge('login/index',array('error'=>$error));
                    }
                } 
                $error = 'ID Not Found';
                $this->template->content = View::forge('login/index',array('error'=>$error));
            }
        }
        $error = 'Not Post';
        $this->template->content = View::forge('login/index',array('error'=>$error));
    }
     public function action_gglogin()
    {
        $this->template->title = 'ログインページ';
        $this->template->css = 'loginstyle.css';
        $id = false;
        if(Input::post())
        {
            
            $username = Input::post('id');
            $email = Input::post('email');
            $name = Input::post('name');
            $gender = Input::post('gender');
            try{
                $id = Auth::create_user(
                                $username,
                                'abc',
                                $email,
                                1);
                $newStudent = new Model_Student();
                $newStudent->user_id     = $id;
                $newStudent->fullname   = $name;
                $newStudent->email      =$email;
                $newStudent->gender     = "-1";
                $newStudent->emailcheck =  "0";
                $newStudent->save();
            }catch(SimpleUserUpdateException $e){
                $user = Model_User::find('first', array(
                                    'where' => array(
                                        array('email', $email),
                                        )
                ));
               if($user == null)
               {
                   
                        $error = "Something Went Wrong";
                        $this->template->content = View::forge('login/index',array('error'=>$error));
               }else
               {
                   $id = $user->id;
               }
            }finally {
                if($id != false)
                {
                    if (Auth::force_login($id))
                    {
                           $username = Auth::get('username');
                           return Response::forge(View::forge('login/loggedin',array('username' => $username)));
                    }else
                    {
                        $error = "Can't Login";
                        $this->template->content = View::forge('login/index',array('error'=>$error));
                    }
                }
                $error = 'ID Not Found';
                $this->template->content = View::forge('login/index',array('error'=>$error));
            }
        }
        $error = 'Not Post';
        $this->template->content = View::forge('login/index',array('error'=>$error));
    }
    public function action_passwordrecovery()
    {
        $this->template->title = "ログインページ";
        $this->template->css   = 'loginstyle.css';
        if(!Input::post())
        {
            $error = "エラが発生しました";
            $this->template->content = View::forge("login/index",array('error'=>$error));
            return;
        }
        $user = Model_User::find('first',array(
                                 'where' => array('email' => Input::post('email'))
                                ));
        if(is_null($user))
        {
            $error = "このメールは正しくありません";
        }
        else{
            $key = $this->create_reset_key($user->id);
            $this::try_send_email($user->email,$user->username,$key);
            $error = "メールをチェックしてください";
        }
        $this->template->content = View::forge("login/index",array('error'=>$error));
    }
    public function action_register()
    {
        $this->template->title = "Register";
        $this->template->css ="registerpage.css";
        $this->template->content = View::forge("login/register");
    }
    
    public function try_send_email($toemail,$username,$key)
    {
        $email = Email::forge();
        $email->from('tranvytoanjp@gmail.com', 'Mr.Phi');
        $email->to($toemail, $username);
        $email->subject('パースワードの変更要求が行なわれました');
        $data['email_title'] = 'パースワード変更';
        $data['email_message'] = 'パースワードの変更要求が行なわれました';
        $data['link'] = Router::get('passwordreset/(:any)').$key;
        $email->html_body(\View::forge('email/password_recovery', $data));
        $email->alt_body('パースワードの変更要求が行なわれました');
        try
        {
            $email->send();
        }
        catch(\EmailValidationFailedException $e)
        {
            $error = 'メールを送信できない - Validation Error';
            $this->template->error = $error;
            print_r($e);
            exit;
        }
        catch(\EmailSendingFailedException $e)
        {
            $error = 'メールを送信できない';
            $this->template->error = $error;
            print_r($e);
            exit;
        }
    }
    private function create_reset_key($id)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $new_reset_key = Model_Resetkey::find('first',array('where'=>
                                            array('user_id'=>$id)
        ));
        if(is_null($new_reset_key))
        {
            $new_reset_key = Model_Resetkey::forge();
            $new_reset_key->user_id     = $id;
        }
        $today = Date::forge(Date::time()->get_timestamp())->format("%Y-%m-%d %H:%M:%S", true);
        $new_reset_key->hash_key    = md5($today.$id);
        $new_reset_key->created_at  = $today;
        $new_reset_key->save();
        return $new_reset_key->hash_key;
    }
    public function action_test()
    {
        print_r(Router::get('passwordreset/(:any)').'randomkey');
        exit;
    }
}
?>
