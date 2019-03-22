<?php
class Pages extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }

    public function index() {
            $data['news'] = 'test'; //$this->news_model->get_news();
            $data['title'] = 'News archive';

            $this->load->view('templates/header', $data);

    }

    public function view($page = 'home')
    {
        // if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        // {
        //         // Whoops, we don't have a page for that!
        //         show_404();
        // }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view($page, $data);
    }
}