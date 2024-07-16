<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidebar extends Backend_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index(){
        redirect('index.php/adminpanel/sidebar/all');
	}

    public function all(){
        if (!$this->ion_auth->logged_in()){
            // redirect them to the login page
            redirect('index.php/adminpanel/dashboard');
        }else{
                $this->db->select('sidebar.*,sidecat.titel as category');
                $this->db->from('sidebar');
                $this->db->join('sidecat', 'sidebar.category = sidecat.id', 'left');
                $this->data['sidebar'] = $this->db->get()->result();
                //$this->data['sidebar'] = $this->Common_model->get_data('sidebar', 'DESC');
                $this->data['meta_title'] = ' সাইডেবারর তালিকা';
                $this->data['subview'] = 'sidebar/sidebar';
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
                // if($_FILES['userfile']['size'] > 0){
                //     $new_file_name = time().'-'.$_FILES["userfile"]['name'];
                //     $config['allowed_types']= '*';
                //     $config['upload_path']  = realpath(APPPATH . '../assets/sidebar');
                //     $config['file_name']    = $new_file_name;
                //     $config['max_size']     = 1000000;
                //     $this->load->library('upload', $config);
                //     if($this->upload->do_upload()){
                //        $uploadData = $this->upload->data();
                //        $uploadedFile = $uploadData['file_name'];
                //     }else{
                //         dd($this->upload->display_errors());
                //     }
                //  }
                //dd($_POST);
                $form_data = array(
                    'title' => $this->input->post('title'),
                    'category' => $this->input->post('category'),
                    'file' => $this->input->post('userfile'),
                    'status' => 1,
                    'create_at'=>date('Y-m-d'),
                );
                //dd($form_data);
                if($this->db->insert('sidebar', $form_data)){
                    $this->session->set_flashdata('success', 'সাইডবার যোগ হয়েছে');
                }else{
                    $this->session->set_flashdata('error', $this->db->error());
                }
                redirect('index.php/adminpanel/sidebar/all');
            }else{
                $this->data['meta_title'] = 'সাইডবার যোগ করুন';
                $this->data['subview'] = 'sidebar/add';
                $this->load->view('backend/_layout_main', $this->data);
            }
            
        }
    }
    public function edit($id){
        if (!$this->ion_auth->logged_in()){
            redirect('index.php/adminpanel/dashboard');
        }else{
            $this->form_validation->set_rules('title', 'Title', 'required');
            if ($this->form_validation->run() == true) {
                $form_data= array();
                $form_data = array(
                    'title' => $this->input->post('title'),
                    'category' => $this->input->post('category'),
                    'file' => $this->input->post('userfile'),
                    'status' => 1,
                    'create_at'=>date('Y-m-d'),
                );
                //dd($form_data);
                $this->db->where('id', $this->input->post('id'));
                if($this->db->update('sidebar', $form_data)){
                    $this->session->set_flashdata('success', 'সাইডবার সফলভাবে আপডেট হয়েছে');
                }else{
                    $this->session->set_flashdata('error', $this->db->error());
                }
                redirect('index.php/adminpanel/sidebar/all');
            }else{
                $this->data['result'] = $this->db->get_where('sidebar', array('id' => $id))->row();
                $this->data['meta_title'] = 'সাইডবার আপডেট করুন';
                $this->data['subview'] = 'sidebar/edit';
                $this->load->view('backend/_layout_main', $this->data);
            }
            
        }
    }
    public function deactivate($id){
        $this->db->where('id', $id);
        $this->db->update('sidebar', array('status' => 1));
        $this->session->set_flashdata('success', 'সাইডবার সফলভাবে বন্ধ করা হয়েছে');
        redirect('index.php/adminpanel/sidebar/all');
    }
    public function activate($id){
        $this->db->where('id', $id);
        $this->db->update('sidebar', array('status' => 0));
        $this->session->set_flashdata('success', 'সাইডবার সফলভাবে  খোলা করা হয়েছে');
        redirect('index.php/adminpanel/sidebar/all');
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('sidebar');
        $this->session->set_flashdata('success', 'সাইডবার সফলভাবে  ডিলিট করা হয়েছে');
        redirect('index.php/adminpanel/sidebar/all');
    }
}