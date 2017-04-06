<?php

class Controller_Admin_News extends Controller_Admin {

    public function action_index() {
        $news = Model_News::find('all');
        $category = Model_Category::find('all');
        $data['news'] = $news;
        $data['category'] = $category;
        
        $this->template->css = "admin/news.css";
        $this->template->title = "News";
        $this->template->content = View::forge('admin/news/index', $data);
    }

    public function action_view($id = null) {
        
        $news = Model_News::find($id);
        $category = Model_Category::find($news->category_id);
        $data['news'] = $news;
        $data['category'] = $category;
        $this->template->css = "admin/news.css";
        $this->template->title = "News";
        $this->template->content = View::forge('admin/news/view', $data);
    }

    public function action_create() {
        $category = Model_Category::find('all');
        $data = array();
        $data['category'] = $category;

        if (Input::method() == 'POST') {
            $val = Validation::forge();
            $val->add_field('title','タイトル', 'required');
            $val->add_field('category_id','カテゴリー', 'required');
            $val->add_field('body','内容', 'required');
            if ($val->run()) {
                $news = Model_News::forge(array(
                            'title' => Input::post('title'),
                            'category_id' => Input::post('category_id'),
                            'body' => Input::post('body'),
                ))->save();


                Session::set_flash('success','成功しました');
                Response::redirect('admin/news');

            } else {
                
                Session::set_flash('error','エラー: 空のセルではありません');
                if ($val) {
                    if ($val->error('title')) {
                        Session::set_flash('err_title',$val->error('title')->get_message());
                    }
                    if ($val->error('category_id')) {
                        Session::set_flash('err_category_id',$val->error('category_id')->get_message());
                    }
                    if ($val->error('body')) {
                        Session::set_flash('err_body',$val->error('body')->get_message());
                    }
                }
                
                Response::redirect('admin/news/create');
            }
        }

        $this->template->css = "admin/news.css";
        $this->template->title = "News";
        $this->template->content = View::forge('admin/news/create', $data);
    }

    public function action_edit($id = null) {
        $news = Model_News::find($id);
        $category = Model_Category::find('all');
        $data = array();
        $data['category'] = $category;
        $data['news']= $news;

        if (Input::method() == 'POST') {
            $val = Validation::forge();
            $val->add_field('title','タイトル', 'required');
            $val->add_field('category_id','カテゴリー', 'required');
            $val->add_field('body','内容', 'required');
            if ($val->run()) {
                $news= Model_News::find(Input::post('news_id'));
                $news->title = Input::post('title');
                $news->category_id = Input::post('category_id');
                $news->body = Input::post('body');

                $news->save();


                Session::set_flash('success','成功しました');
                Response::redirect('admin/news');

            } else {
                
                Session::set_flash('error','エラー: 空のセルではありません');
                if ($val) {
                    if ($val->error('title')) {
                        Session::set_flash('err_title',$val->error('title')->get_message());
                    }
                    if ($val->error('category_id')) {
                        Session::set_flash('err_category_id',$val->error('category_id')->get_message());
                    }
                    if ($val->error('body')) {
                        Session::set_flash('err_body',$val->error('body')->get_message());
                    }
                }
               
                Response::redirect('admin/news/edit/'.$news->id);
            }
        }
        
        $this->template->css = "admin/news.css";
        $this->template->title = "News";
        $this->template->content = View::forge('admin/news/edit', $data, false);
    }

    public function action_delete($id = null) {
        if ($news = Model_News::find($id)) {
            $news->delete();

            Session::set_flash('success', e('Deleted news #' . $id));
        } else {
            Session::set_flash('error', e('Could not delete news #' . $id));
        }

        Response::redirect('admin/news');
    }

}
