<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends Backend_Controller {

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('index.php/login');
        endif;

        if ($this->ion_auth->logged_in()){
         // $this->DB2 = $this->load->database('another_db', TRUE);
            $this->userSessID = $this->session->userdata('user_id');
        }
        // $this->load->model('Dashboard_model');
    }

    public function index()
    {
            
        $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
        $this->data['meta_title'] = 'প্রোফাইল ';
        $this->data['subview'] = 'my_profile/index';
        $this->load->view('backend/_layout_main', $this->data);
        
    }

    public function blank(){
        $this->data['page_heading'] = 'Blank Page';
        $this->data['subview'] = 'dashboard/blank';
        $this->load->view('backend/_layout_main', $this->data);
    }	

}