<?php

class Customs extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Add a new project to the database
    public function addProjectItem($data)
    {
        return $this->db->insert('posts', $data);
    }

    // Retrieve all projects from the database
    public function getProjects()
    {
        $query = $this->db->get('posts');
        return $query->result_array();
    }

}