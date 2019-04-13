<?php
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        // $data["articles"] = $this->news_model->get_news();
        $this->load->view('login');
    }
}