<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class error_404 extends Base_Controller
{
    public function index()
    {
      $this->load_header();
      $this->view->load('404');
      $this->load_footer();
    }
}