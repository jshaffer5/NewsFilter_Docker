<?php
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        // $data["articles"] = $this->news_model->get_news();
        $this->load->view('login');
    }

    public function test() {
        $user = $this->login_model->get_user($_POST["username"], $_POST["password"]);
        if (isset($user)) {
            $out['error'] = false;
            $out['message'] = "Login successful";
        } else {
        $out['error'] = true;
        $out['message'] = "Username or password incorrect";
        }
        echo json_encode($out);
    }
}