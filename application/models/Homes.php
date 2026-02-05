<?php

class Homes extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getPosts()
    {

        $query = $this->db->get('posts');
        return $query->result_array();
    }
}
