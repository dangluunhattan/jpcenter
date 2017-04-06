<?php 


class Controller_Student extends Controller_Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{       
                if(!Auth::check())
           {
              $error = 'Chua Login';
               return Response::forge(View::forge('login/index',array('error'=>$error)));
            }
            else{
                $userID = Auth::get_user_id();
                $infos = Model_Student::find('first',array(
                'where' => array (
                    'user_id' => $userID[1]
                ) 
            ));
		$data = array('infos' => $infos);
                $this->template ->css ="";
                $this->template ->title ="個人情報";
                $this->template->content = View::forge('student/index',$data,false);
                
            }
	}
        
	public function action_404()
	{
		return Response::forge(Presenter::forge('student/404'), 404);
	}
}
