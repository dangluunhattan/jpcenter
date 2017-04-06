<!--//
//   Created by Phi
//    2017/03/28
//-->

<?php

class Controller_Home extends Controller_Base {

    public $template = 'template';

    /**
     * The index action.
     *
     * @access  public
     * @return  void
     */
    public function action_index() {
        $data['news'] = Model_News::query()->order_by('created_at', 'desc')->limit(5)->get();
        $this->template->title = 'Trung tâm Nhật ngữ IT - FOIS Smile';
        $this->template->css = 'home.css';
        $this->template->content = View::forge('home/index', $data);
    }

}

/* End of file home.php */
