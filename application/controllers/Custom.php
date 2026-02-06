<?php

class Custom extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customs');
        date_default_timezone_set("Asia/Manila");
    }

    // This method is responsible for loading the editor view and passing the project data to it. It first checks if the editor view file exists, and if not, it shows a 404 error. Then it retrieves the project data from the database using the getProjects method of the Customs model and stores it in the $data array. Finally, it loads the header, editor, editor_table, and footer views, passing the project data to the editor_table view.
    public function index()
    {
        $page = 'editor';
        if(!file_exists(APPPATH.'views/'.$page.'.php')){
            show_404();
        }

        $data['projects'] = $this->Customs->getProjects();
        $this->load->view('template/header');
        $this->load->view($page);
        $this->load->view('editor_table', $data);
        $this->load->view('template/footer');
    }

    // This method handles the file upload process. It sets the upload path and allowed file types, then loads the upload library with the specified configuration. If the upload fails, it displays the error messages. If the upload is successful, it calls the addProject method with the filename of the uploaded image.
    public function do_upload()
    {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'jpg|png';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);
            }else{
                $this->addProject($this->upload->data('file_name'));
            }
            
    }

    // This method takes the filename of the uploaded image as a parameter and creates an associative array with the project data, including the title, summary, tags, link, image filename, and timestamps for creation and update. It then calls the addProjectItem method of the Customs model to insert the project data into the database. Finally, it redirects the user back to the customize page.
    public function addProject($imgLink){
        $data = array(
            'title' => $this->input->post('title'),
            'summary' => $this->input->post('summary'),
            'tags' => $this->input->post('tag_list'),
            'link' => $this->input->post('link'),
            'img' => $imgLink,
            'created_by' => date("Y-m-d H:i:s"),
            'updated_by' => date("Y-m-d H:i:s")
        );

        $this->Customs->addProjectItem($data);
        redirect('customize');
    }
}