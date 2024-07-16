<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends Backend_Controller {

	public function __construct(){
        parent::__construct();


        // if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
        //     // redirect them to the home page because they must be an administrator to view this
        //     return show_error('You must be an administrator to view this page.');
        // }
    }

	public function index(){
        redirect('index.php/adminpanel/notice/all');
	}

    public function all(){
        if (!$this->ion_auth->logged_in()){
            // redirect them to the login page
            redirect('index.php/adminpanel/dashboard');
        }else{
            // redirect them to the home page because they must be an administrator to view this

                $this->data['notice'] = $this->Common_model->get_data('notice', 'DESC');
                $this->data['meta_title'] = 'সমস্ত  নোটিশের তালিকা';
                $this->data['subview'] = 'notice/notice';
                $this->load->view('backend/_layout_main', $this->data);
            // return show_error('You must be an administrator to view this page.');
        }
    }
    public function add(){
        if (!$this->ion_auth->logged_in()){
            redirect('index.php/adminpanel/dashboard');
        }else{
            $this->form_validation->set_rules('title', 'Title', 'required');
            if ($this->form_validation->run() == true) {
                if($_FILES['userfile']['size'] > 0){
                    $new_file_name = time().'-'.$_FILES["userfile"]['name'];
        
                    $config['allowed_types']= 'pdf';
                    $config['upload_path']  = realpath(APPPATH . '../assets/notice');
                    $config['file_name']    = $new_file_name;
                    $config['max_size']     = 0;
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload()){
                       $uploadData = $this->upload->data();
                       $uploadedFile = $uploadData['file_name'];
                    }else{
                        dd($this->upload->display_errors());
                    }
                 }
                $form_data = array(
                    'title' => $this->input->post('title'),
                    'file' => $uploadedFile,
                    'status' => 1,
                    'create_at'=>date('Y-m-d'),
                );


                if($this->Common_model->save('notice', $form_data)){
                    $this->session->set_flashdata('success', 'নোটিশ যোগ হয়েছে');
                }else{
                    $this->session->set_flashdata('error', 'নোটিশ যোগ হয়নি');
                }
                redirect('index.php/adminpanel/notice/all');

            }else{
                $this->data['meta_title'] = 'নোটিশ যোগ করুন';
                $this->data['subview'] = 'notice/add';
                $this->load->view('backend/_layout_main', $this->data);
            }
            
        }
    }
    public function deactivate($id){
        $this->db->where('id', $id);
        $this->db->update('notice', array('status' => 1));
        $this->session->set_flashdata('success', 'নোটিশ সফলভাবে বন্ধ করা হয়েছে');
        redirect('index.php/adminpanel/notice/all');
    }
    public function activate($id){
        $this->db->where('id', $id);
        $this->db->update('notice', array('status' => 0));
        $this->session->set_flashdata('success', 'নোটিশ সফলভাবে  খোলা করা হয়েছে');
        redirect('index.php/adminpanel/notice/all');
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('notice');
        $this->session->set_flashdata('success', 'নোটিশ সফলভাবে  ডিলিট করা হয়েছে');
        redirect('index.php/adminpanel/notice/all');
    }
}