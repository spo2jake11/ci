<?php

class Home extends CI_Controller
{


    public function index()
    {
        $page = 'content';

        if (!file_exists(APPPATH . 'views/' . $page . '.php')) {
            show_404();
        }

        $data['docs'] = $this->Homes->getPosts();

        // print_r($data['docs']);

        $this->load->view('template/header');
        $this->load->view('index');
        $this->load->view($page, $data);
        $this->load->view('template/footer');
    }
}
