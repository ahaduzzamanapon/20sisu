<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends Backend_Controller {

	public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('index.php/login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Attendance_model');
      $this->userSessID = $this->session->userdata('user_id');
      
      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Attendance_model->loadCustomerDatabase($this->DC_DBName);
   }

   public function index(){
      redirect('index.php/adminpanel/attendance/all');
   }

   public function all(){      
      $this->data['results'] = $this->Attendance_model->get_data($this->DC_ID);
      
      // Load View
      $this->data['meta_title'] = 'সমস্ত উপস্থিতি';
      $this->data['subview'] = 'attendance/all';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function today($type_id){      
      $this->data['results'] = $this->Attendance_model->get_today_attendance($this->DC_ID, $type_id);
      // echo $this->db->last_query(); exit;
      
      // Load View
      $this->data['meta_title'] = 'আজকের উপস্থিতি';
      $this->data['subview'] = 'attendance/today';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function report(){   
      // Validation
      $this->form_validation->set_rules('type_id', 'Select Type', 'required|trim');     
      $this->form_validation->set_rules('date_start', 'date start', 'required|trim');     
      // $this->form_validation->set_rules('date_end', 'date end', 'required|trim');

      $this->data['results'] = 0;
      $this->data['info'] = 0;     

      if ($this->form_validation->run() == true){
         $type_id    = $this->input->post('type_id');
         $member_id  = $this->input->post('members_id');
         $date_start = $this->input->post('date_start');
         $date_end   = $this->input->post('date_end');
         if(!$date_end){$date_end = $date_start;}

         // Results
         $this->data['results'] = $this->Attendance_model->get_report($this->DC_ID, $type_id, $member_id, $date_start, $date_end);
         // print_r($this->data['results']); exit;
      }

      // Dropdown
      $this->data['members'] = $this->Attendance_model->get_member_staff($this->DC_ID); 
      $this->data['type'] = $this->Attendance_model->get_type();
      // print_r($this->data['type']);exit();
      // Load View
      $this->data['meta_title'] = 'উপস্থিতি রিপোর্ট';
      $this->data['subview'] = 'attendance/report';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function add(){
      // Validation
      $this->form_validation->set_rules('members_id', 'select member', 'required|trim');     
      $this->form_validation->set_rules('time', 'date and time', 'required|trim');     

      // Validate and Input
      if ($this->form_validation->run() == true){
         $emp_id = $this->input->post('members_id');

         $machine_id = $this->Attendance_model->get_machine_id($emp_id);

         $form_data = array(
                           'members_id'   => $machine_id,
                           'time'         => $this->input->post('time'),
                           'day_cares_id' => $this->DC_ID,
                           'created'      => date('Y-m-d H:i:s')
                        );

         if($this->Attendance_model->save_other_db('attendances', $form_data)){                
            $this->session->set_flashdata('success', 'New data insert successfully.');
            redirect("index.php/adminpanel/attendance/all");
         }
      }

      // Dropdown
      $this->data['type'] = $this->Attendance_model->get_type();
      $this->data['members'] = $this->Attendance_model->get_member_staff($this->DC_ID); 

      // view
      $this->data['meta_title'] = 'অ্যাড উপস্থিতি';
      $this->data['subview'] = 'attendance/add';
      $this->load->view('backend/_layout_main', $this->data);
   }

   /*ZuelAli, 2021-02-15, File Upload*/
   public function logfileupload(){
      if($this->input->post('upload')){
         if ($_FILES['logfile']['name']) {
            if($this->logFileExecute($_FILES['logfile']['tmp_name'])){                
               $this->session->set_flashdata('success', 'File Upload and Execute successfully.');
         // print_r('1ghss');exit('ali');
            }
            // else{$this->session->set_flashdata('success', 'File Uploading Failed.');}
         }
      }
      // Load View
      $this->data['meta_title'] = 'উপস্থিতি ফাইল আপলোড';
      $this->data['subview'] = 'attendance/fileupload';
      $this->load->view('backend/_layout_main', $this->data);
   }

   /*ZuelAli, 2021-02-15, File Execute*/
   function logFileExecute($file_name){
      $day_cares_id = $this->DC_ID;
      $lines = file($file_name);
      foreach (array_values($lines) AS $line){
         list($prox_no,$date_time,$device_id,$test1,$name,$test3,$test4,$test4) = explode(',', trim($line) );
            // print_r($prox_no);exit('zuel');

         $num_rows = $this->db->where("time", $date_time)
                              ->where("members_id", $prox_no)
                              ->where("day_cares_id", $day_cares_id)
                              ->get('daycare_'.$day_cares_id.'.attendances')->num_rows();

         if($num_rows == 0 ){
            $data = array(
                     'time' => $date_time,
                     'device_id' => $device_id,
                     'members_id' => $prox_no,
                     'day_cares_id'  => $day_cares_id,
                     'created'  => date('Y-m-d H:i:s')
                  );
            $this->db->insert('daycare_'.$day_cares_id.'.attendances', $data);
         }

      }
      return true;
   }

   // public function edit($id){
   //    $this->form_validation->set_rules('child_name', 'name', 'required|trim');     
   //    $this->data['info'] = $this->Attendance_model->get_info($id);
   //    // print_r($this->data['info']); exit;

   //    if ($this->form_validation->run() == true){

   //       $form_data = array(
   //          'child_name'   => $this->input->post('child_name'),
   //          'phone'        => $this->input->post('phone'),
   //          );

   //       // print_r($form_data); exit;
   //       if($this->Attendance_model->edit_otherdb('members', $id, 'id', $form_data)){
   //          $this->session->set_flashdata('success', 'Information update successfully.');
   //          redirect('adminpanel/attendance/all');
   //       }
   //    }

   //    // Load View
   //    $this->data['meta_title'] = 'Edit Attendance';
   //    $this->data['subview'] = 'attendance/edit';
   //    $this->load->view('backend/_layout_main', $this->data);
   // }

}