<?php

class Controller_Contact extends Controller_Base
{
	

	public function action_contact()
	{
			if (Input::post()) {

			$val = Validation::forge();
			$val->add_field('name','お名前', 'required');
			$val->add_field('email','メールアドレス', 'required|valid_email');
			$val->add_field('phone','お電話番号', 'required');
			$val->add_field('address','アドレス', 'required');
			$val->add_field('title','タイトル', 'required');
			$val->add_field('content','内容', 'required');

			if ($val->run()) {
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				DB::insert('contact')->set(array(
					'name' => Input::post('name'),
					'email' => Input::post('email'),
					'phone'	=>Input::post('phone'),
					'address' => Input::post('address'),
					'title' => Input::post('title'),
					'content' => Input::post('content'),
					'created' => date('Y/m/d h:i:s')
				))->execute();
				Session::set_flash('success','成功しました'); 
                Response::redirect('/contact/contact');
			}else {
				Session::set_flash('error','エラー: 空のセルではありません');
				if ($val) {
					if ($val->error('name')) {
						Session::set_flash('err_name',$val->error('name')->get_message());
					}
					if ($val->error('email')) {
						Session::set_flash('err_email',$val->error('email')->get_message());
					}
					if ($val->error('phone')) {
						Session::set_flash('err_phone',$val->error('phone')->get_message());
					}
					if ($val->error('address')) {
						Session::set_flash('err_address',$val->error('address')->get_message());
					}
					if ($val->error('title')) {
						Session::set_flash('err_title',$val->error('title')->get_message());
					}
					if ($val->error('content')) {
						Session::set_flash('err_content',$val->error('content')->get_message());
					}
				}
				
                Response::redirect('/contact/contact');
			 }
			}
	        $data = array();
	        $this->template->css = 'contact.css';
	        $this->template->title = 'Blog contact';
	        $this->template->content = View::forge('site/contact', $data,false);
	}
	
}
