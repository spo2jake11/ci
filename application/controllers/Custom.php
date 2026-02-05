<?php

class Custom extends CI_Controller
{

    public function index()
    {
        $page = 'editor';
        if(!file_exists(APPPATH.'views/'.$page.'.php')){
            show_404();
        }

        $this->load->view('template/header');
        $this->load->view($page);
        $this->load->view('template/footer');
    }
}