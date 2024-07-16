<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends Backend_Controller {
   var $img_path;
   var $img_path_immunization;

   public function __construct(){
      parent::__construct();
      if (!$this->ion_auth->logged_in()):
         redirect('index.php/login');
      endif;

      $this->load->model('Common_model');
      $this->load->model('Member_model');
      $this->load->model('Dashboard_model');
      $this->load->model('Site/Site_model');
      $this->img_path = realpath(APPPATH . '../member_img');
      $this->img_path_payment = realpath(APPPATH . '../assets/images/member_img');
      $this->img_path_immunization = realpath(APPPATH . '../immunization_img');
      
      $this->userSessID = $this->session->userdata('user_id');


      
      // Load another database
      $DayCare = $this->Common_model->get_user_details($this->userSessID);  
      $this->DC_DBName  = $DayCare->database_name;
      $this->DC_ID      = $DayCare->day_care_id;
      // $this->DBName = 'daycares_1';
      $this->Member_model->loadCustomerDatabase($this->DC_DBName);
   }  

   public function index(){       
      $this->data['results'] = $this->Member_model->get_data(1);
      // print_r($this->data['results']); exit;

      //Load page
      // $this->data['meta_title'] = 'Member List';
      $this->data['meta_title'] = 'বর্তমানে সেবা গ্রহণকারী শিশুর তালিকা';
      $this->data['subview'] = 'member/index';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function request(){      
      $this->data['results'] = $this->Member_model->get_data(0); 
      // print_r($this->data['results']); exit;

      //Load page
      // $this->data['meta_title'] = 'Member Request/Application';
      $this->data['meta_title'] = 'অপেক্ষমাণ শিশুর তালিকা';
      $this->data['subview'] = 'member/request';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function verified_request($status){ 


      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->dc_verified_applicant($item->database_name, $status);
         //$gtotal['application'] = $data_arr[$item->id]['total_application'];
      }

      $this->data['results'] = $data_arr;     
      // echo "<pre>"; print_r($this->data['results']); exit;

      //Load page
      // $this->data['meta_title'] = 'Member Request/Application';
      if ($status == 3) {
         $this->data['meta_title'] = 'ভর্তির জন্য উপযুক্ত আবেদন কৃত শিশুর তালিকা';
         $this->data['subview'] = 'member/verified_application_list';

      }elseif ($status == 5){

         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে অ্যাডমিন দ্বারা প্রত্যাখাত শিশুদের তালিকা';
         $this->data['subview'] = 'member/reject_application_list';

      }elseif ($status == 2){

         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্র ছেড়ে যাওয়া শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_complete_list';

      }elseif ($status == 1){

         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে সেবা গ্রহণকারী শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_running_list';

      }elseif ($status == 4){

         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে ভর্তির জন্য উপযুক্ত অপেক্ষমান শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_complete_pending_list';

      }elseif ($status == 0){

         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে সমস্ত আবেদন শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_complete_pending_list';

      }
      $this->load->view('backend/_layout_main', $this->data);
   }  

   public function dc_verified_applicant($database_other, $status){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      // $results = $this->Member_model->get_data_all(0);
      $results = $this->Dashboard_model->get_all_member($status);

      return $results;
   }    

   public function completed(){      
      $this->data['results'] = $this->Member_model->get_data(2); 
      // print_r($this->data['results']); exit;

      //Load page
      // $this->data['meta_title'] = 'Member Completed';
      $this->data['meta_title'] = 'পূর্ববর্তী সেবা গ্রহণকারী শিশুর তালিকা';
      $this->data['subview'] = 'member/completed';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function subsidies(){      
      $this->data['info'] = $this->Member_model->get_user_info($this->userSessID);
      $dcID = $this->data['info']->day_care_id;
      $this->data['results'] = $this->Member_model->get_data_for_subsidy($dcID,'1');

      // echo "<pre>";print_r($this->data['results']); exit;

      //Load page
      // $this->data['meta_title'] = 'Member Completed';
      $this->data['meta_title'] = 'ভর্তুকি আবেদন';
      $this->data['subview'] = 'member/subsidies';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function subsidies_approve($id){
      // exit('ali');
      $this->data['info'] = $this->Member_model->get_user_info($this->userSessID);
      $dcID = $this->data['info']->day_care_id;
      $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $id);
      $age_group_id = $this->data['student_info']->child_admit_interest;
      $salary_group_id = $this->data['student_info']->morther_monthly_income;
      $fee = $this->Member_model->get_subsidy_fee($age_group_id,$salary_group_id);
      // echo "<pre>";print_r($age_group_id .','.$salary_group_id.','.$fee);exit;

      $members_data = array(
         'subsidies_approved' => 1,
         'monthly_fee '       => $fee,
         );
            
      $this->Site_model->edit_member('daycare_'.$dcID.'.members',$id,'id',$members_data);
      
      
      $this->data['results'] = $this->Member_model->get_data_for_subsidy($dcID,'1');



      $row = $this->Common_model->get_row('users', $this->data['student_info']->parents_id);
      // echo "<pre>";print_r($row); exit;

      $mobile = '+88'.$row->phone;
      $message = 'আপনার ভর্তুকি আবেদন সফলভাবে অনুমোদিত হয়েছে. আপনার বর্তমান মাসিক সেবামূল্য '.$fee.'/-  টাকা। ভর্তি সম্পূর্ণ করতে যত তাড়াতাড়ি সম্ভব পেমেন্ট সম্পূর্ণ করুন। ধন্যবাদ!';
      $this->send_sms($mobile, $message);

      //Load page
      // $this->data['meta_title'] = 'Member Completed';
      $this->data['meta_title'] = 'শিশুের বিবরণ';
      $this->data['subview'] = 'member/subsidies_approve';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function complete_status($id){      
      // $this->data['results'] = $this->Member_model->get_data(2); 
      // print_r($this->data['results']); exit;
      $this->data['info'] = $this->Member_model->get_info($id);

      $form_data['status'] =  2;
      $form_data['completion_date'] =  date('Y-m-d');

      if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
         // Get user
         $member = $this->Member_model->get_top_applicant();
         $user = $this->ion_auth->user($member->parents_id)->row();

         // Change is waiting list 
         $form_data2 = array('is_waiting_sms_send' => 1);
         $this->Member_model->edit_otherdb('members', $member->id, 'id', $form_data2);

         $dc_name = $this->Member_model->get_daycare_name($member->day_cares_id);
         $exp = explode(" ", $dc_name);
         $daycare_name = $exp[0];

         // Send Message
         $mobile = '+88'.$user->phone;
         $message = $daycare_name.' দিবাযত্ন কেন্দ্রে আপনার শিশু ভর্তি কোটা উন্মুক্ত হয়েছে, অনুগ্রহ করে যোগাযোগ করুন';
         $this->send_sms($mobile, $message);

         $this->session->set_flashdata('success', 'Change status successfully.');
         redirect('index.php/adminpanel/member');
      }

      //Load page
      // $this->data['meta_title'] = 'Member Completed';
      // $this->data['subview'] = 'member/completed';
      // $this->load->view('backend/_layout_main', $this->data);
   }


   public function edit2($id){
      $this->data['info'] = $this->Member_model->get_info($id);

      $this->form_validation->set_rules('machine_id', 'Machine ID', 'required|trim');

      // Validate and insert data
      if ($this->form_validation->run() == true){

         $form_data['machine_id'] = $this->input->post('machine_id');
         // print_r($form_data); exit;
         // print_r($id); exit('id');

         if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
            $this->session->set_flashdata('success', 'Machine ID Updated successfully.');
            redirect('index.php/adminpanel/member');
         }
      }

      // $this->data['meta_title'] = 'Member Edit';
      $this->data['meta_title'] = 'শিশুর সম্পাদনা করুন';
      $this->data['subview'] = 'member/edit2';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function payment_complete($id){
      $this->data['info'] = $this->Member_model->get_info($id);
      $date = $this->data['info']->child_doj; 
      // echo"<pre>";  print_r($date); exit;
      $this->data['dc_info'] = $this->Common_model->get_user_details($this->userSessID);
      $dcID = $this->data['dc_info']->day_care_id;
      $dcName = $this->data['dc_info']->first_name;
      $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $id);
      $this->form_validation->set_rules('payment_status', 'Payment Status', 'required|trim');
      // echo $this->form_validation->run();
      // exit('1');
      $row = $this->Common_model->get_row('users', $this->data['student_info']->parents_id);
      // echo "<pre>";print_r($this->data['dc_info']->first_name); exit;

      // Validate and insert data
      if ($this->form_validation->run() == true){
         $form_data['pament_received'] = 1;
         $form_data['payment_status'] = $this->input->post('payment_status');

         $this->Site_model->edit_member('daycare_'.$dcID.'.members',$id,'id',$form_data);
         // exit('zueffl');
         $mobile = '+88'.$row->phone;
         $message = 'আপনার পেমেন্ট সফলভাবে সম্পূর্ণ হয়েছে। আপনি '.$date.' তারিখ থেকে আপনার সন্তানকে ,'.$dcName.' শিশু দিবাযত্ন কেন্দ্রে রাখতে পারেন। ধন্যবাদ!';
         // print_r($mobile); exit($message);
         $this->send_sms($mobile, $message);
         $this->session->set_flashdata('success', 'Machine ID Updated successfully.');
         redirect('index.php/adminpanel/member');
         
      }

      // $this->data['meta_title'] = 'Member Edit';
      $this->data['meta_title'] = 'পেমেন্ট সম্পাদনা করুন';
      $this->data['subview'] = 'member/payment_complete';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function payment($id)
   {

      if (!$this->ion_auth->logged_in()){redirect('login');}
      // User Info
      $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
      // print_r($this->userSessID);exit('alllliii');
      // Basic
      $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
      $dcID = $this->data['info']->day_care_id;
      
      // Student info
      $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $id);
      $childId = $this->data['student_info']->id;
      
      // echo "<pre>";
      // print_r($this->data['student_info']);exit;
      
      
      // If file selected
      if(@$_FILES['userfile']['size'] > 0){
         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
      }


      //Validate and input data
      if ($this->form_validation->run() == true) {

         // Dynamic DB Name
         $day_care_info = $this->Common_model->get_row('day_cares', $this->data['student_info']->day_cares_id);
         $this->Site_model->loadCustomerDatabase($day_care_info->database_name);

        

         //Member table 
         $members_data  = $_POST['members'];
         
         $members_data_ = array(
            
            'member_types_id'    => 1,
            // 'day_cares_id'       => $this->data['student_info']->day_cares_id,
            'created'            => date('Y-m-d H:i:s'),      
            'is_paid'            => 1       
            );
         $members_data = array_merge($members_data, $members_data_);

         // Image Upload
         if($_FILES['userfile']['size'] > 0){
            $new_file_name = time().'-'.$_FILES["userfile"]['name'];
            $config['allowed_types']= 'jpg|png|jpeg';
            $config['upload_path']  = $this->img_path_payment;
            $config['file_name']    = $new_file_name;
            $config['max_size']     = 600;

            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload()){
               $uploadData = $this->upload->data();
               $config = array(
                  'source_image' => $uploadData['full_path'],
                  'new_image' => $this->img_path_payment,
                  'maintain_ratio' => TRUE,
                  'width' => 300,
                  'height' => 300
                  );
               $this->load->library('image_lib',$config);
               $this->image_lib->initialize($config);
               $this->image_lib->resize();

               $uploadedFile = $uploadData['file_name'];
               // print_r($this->img_path_payment);exit('zuel');
               $members_data['payment_slip'] = $new_file_name;

            }else{
         // print_r($id);exit('fffsssid');
               $this->data['message'] = $this->upload->display_errors();
            }
         }

       
         $this->Site_model->edit_member('daycare_'.$dcID.'.members',$id,'id',$members_data);
         // $this->Site_model->edit_member('daycares_1.members',$id,'id',$members_data);
         // $this->Common_model->save('users_daycares', $user_daycare_data);


         // Send Message
         $dc_name = $this->Site_model->get_daycare_name($this->data['student_info']->day_cares_id);
         $exp = explode(" ", $dc_name);
         $daycare_name = $exp[0];
         $user = $this->ion_auth->user()->row();
         

         // Message
         $this->session->set_flashdata('success', 'আপনার পেমেন্ট টি সম্পন্ন হয়েছে। ধন্যবাদ');
         redirect('index.php/adminpanel/member');
      }
      // }
      /*// Dropdown
      $this->data['day_cares'] = $this->Common_model->get_daycares(); 
      $this->data['meta_title'] = 'পেমেন্ট আবেদন';               
      $this->data['subview'] = 'payment_form';
      $this->load->view('frontend/_layout_main', $this->data);*/
   }


   public function approve($id){
      $this->data['info'] = $this->Member_model->get_info($id);
      $dcID = $this->data['info']->day_cares_id;
      $groupID = $this->data['info']->child_admit_interest;
      $this->data['seat_limit'] = $this->Member_model->get_seat_limit($groupID);
      $this->data['seat_count'] = $this->Member_model->get_seat_count($dcID, $groupID);

      // echo"<pre>";print_r($this->data);exit('id');

      $this->form_validation->set_rules('is_verified', 'verify status', 'required|trim');

      // Validate and insert data
      if ($this->form_validation->run() == true){

         $form_data['status'] = $this->input->post('is_verified');
         $form_data['comments'] = $this->input->post('comments');
         // print_r($form_data); exit;

         if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
            /*if($this->input->post('is_verified')){
               $row = $this->Common_model->get_row('users', $this->data['info']->registrations_id);
               // Send Message
               $mobile = '+88'.$row->phone;
               $message = 'Your application approve successfully. Please contact us as soon as possible. Thank You!';
               $this->send_sms($mobile, $message);
            }*/
            $this->session->set_flashdata('success', 'সুপার এডমিনের নিকট চুড়ান্ত অনুমোদনের জন্য প্রেরণ করা হয়েছে..');
            redirect('index.php/adminpanel/member/request');
         }
      }
      $this->data['meta_title'] = 'শিশুর অনুমোদন ফরম';
      $this->data['subview'] = 'member/approve';
      $this->load->view('backend/_layout_main', $this->data);
   }


   public function verified_approve($id, $dcID){
      $this->data['info'] = $this->Member_model->get_info_all($id, $dcID);
      // $dcID = $this->data['info']->day_cares_id;
      $groupID = $this->data['info']->child_admit_interest;
      $this->data['seat_limit'] = $this->Member_model->get_seat_limit($groupID);
      $this->data['seat_count'] = $this->Member_model->get_seat_count($dcID, $groupID);

      // echo"<pre>";print_r($this->data);exit('id');

      $this->form_validation->set_rules('is_verified', 'verify status', 'required|trim');

      // Validate and insert data
      if ($this->form_validation->run() == true){

         $form_data['status'] = $this->input->post('is_verified');

         if($this->Member_model->edit_otherdb('members', $id, 'id', $form_data)){
            if($this->input->post('is_verified')){
               $row = $this->Common_model->get_row('users', $this->data['info']->parents_id);
               // echo"<pre>";print_r($row); exit('alisddd');
               // Send Message
               $mobile = '+88'.$row->phone;
               $message = 'প্রিয় '.$row->first_name.' আপনার তালিকা ভুক্তির আবেদন সফলভাবে অনুমোদিত হয়েছে। যত তাড়াতাড়ি সম্ভব আপনার প্যানেল থেকে ভর্তির ফর্ম জমা দিন. ধন্যবাদ!';
               $this->send_sms($mobile, $message);
            }
            $this->session->set_flashdata('success', 'Approve member status change successfully.');
            redirect('index.php/adminpanel/member/verified_request/4');
         }
      }

      // $this->data['meta_title'] = 'Member Approve';
      $this->data['meta_title'] = 'শিশুর চুড়ান্ত অনুমোদিত ফর্ম';
      $this->data['subview'] = 'member/final_approve';
      $this->load->view('backend/_layout_main', $this->data);

   }



   public function dc_verified_applicant_info($database_other, $id){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      // $results = $this->Member_model->get_data_all(0);
      $info = $this->Dashboard_model->get_info_all($id);
      // $this->data['info'] = $this->Member_model->get_info_all($id);


      return $info;
   } 



   public function details_all($id, $dcID){
      $this->data['info'] = $this->Member_model->get_info_all($id, $dcID);
      // echo"<pre>";print_r($this->data['info']);exit('ali');
      // $this->data['meta_title'] = 'Member Details';
      $this->data['meta_title'] = 'শিশুর বিস্তারিত তথ্য';
      $this->data['subview'] = 'member/details';
      $this->load->view('backend/_layout_main', $this->data);
   }

   
   public function details($id){
      $this->data['info'] = $this->Member_model->get_info($id);
      // echo"<pre>";print_r($this->data['info']->is_paid);exit('ali');
      // $this->data['meta_title'] = 'Member Details';
      $this->data['meta_title'] = 'শিশুর বিস্তারিত তথ্য';
      $this->data['subview'] = 'member/details';
      $this->load->view('backend/_layout_main', $this->data);
   }

   public function details_pdf($id){
      $this->data['headding'] = "PDF Details";

      $this->data['info'] = $this->Member_model->get_info($id);        
      $html = $this->load->view('member/details_pdf', $this->data, true);   
      $file_name = $id.".pdf";

      // Generate PDF
      $mpdf = new mPDF('', 'A4', 10, 'nikosh', 10, 10, 10, 5);
      // $mpdf->showImageErrors = true;
      $mpdf->WriteHtml($html);
      $mpdf->output($file_name, 'I'); //download it for 'D'. 
   }

   public function details_pdf_all($id, $dcID){
      // echo phpinfo(); exit;
      $this->data['headding'] = "PDF Details";

      $this->data['info'] = $this->Member_model->get_info_all($id, $dcID);        
      $html = $this->load->view('member/details_pdf_all', $this->data, true);   
      $file_name = $id.".pdf";

      // Generate PDF
      $mpdf = new mPDF('', 'A4', 10, 'nikosh', 10, 10, 10, 5);
      // $mpdf->showImageErrors = true;
      $mpdf->WriteHtml($html);
      $mpdf->output($file_name, 'I'); //download it for 'D'. 
   }

   function send_sms($mobile, $message){
      // print_r($mobile.' , '.$message);exit('zuel');
      $api_key = "C20019945dde54c4697d80.43761214";
      $contacts = $mobile;
      $senderid = '8804445629106';
      $sms = $message;

      $URL = "http://sms.nanoitworld.com/smsapi?api_key=".urlencode($api_key)."&type=text&contacts=".urlencode($contacts)."&senderid=".urlencode($senderid)."&msg=".urlencode($sms);

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$URL);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch, CURLOPT_POST, 0);
      try{
         $output = $content=curl_exec($ch);
        // print_r($output);
      }catch(Exception $ex){
         $output = "-100";
      }
      return $output; 
   }

   public function ajax_get_district_by_div($id){
      header('Content-Type: application/x-json; charset=utf-8');
      echo (json_encode($this->Common_model->get_district_by_div_id($id)));
   }

   public function username_valid($str){
      // alpha_dash_space
      // return (!preg_match("/^([-a-z0-9_ ])+$/i", $str)) ? FALSE : TRUE;
      if (! preg_match('/^\S*$/', $str)) {
         $this->form_validation->set_message('username_valid', 'The %s field may only contain alpha characters & no white spaces.');
         return FALSE;
      } else {
         return TRUE;
      }
   } 

   public function file_check($str){
      $this->load->helper('file');
      $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
      $mime = get_mime_by_extension($_FILES['userfile']['name']);
      $file_size = 1050000; 
      $size_kb = '1 MB';

      if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
         if(!in_array($mime, $allowed_mime_type_arr)){                
            $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
            return false;
         }elseif($_FILES["userfile"]["size"] > $file_size){
            $this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
            return false;
         }else{
            return true;
         }
      }else{
         $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
         return false;
      }
   }

   function delete($id) {
      $this->data['info'] = $this->Member_model->delete($id);
      $this->session->set_flashdata('success', 'Information delete successfully.');
      redirect('index.php/adminpanel/member');
   }


   public function get_male_female_by_type($gender){ 
      if ($gender == 1) {
         $gender = "Male";
      } else {
         $gender = "Female";
      }

      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->get_db_verified_applicant($item->database_name, $gender);
      }

      $this->data['results'] = $data_arr; 

      if ($gender == "Male") {

         $this->data['subview'] = 'member/male_list';
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে ছেলে শিশুদের তালিকা';

      }elseif ($gender == "Female"){

         $this->data['subview'] = 'member/female_list';
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে মেয়ে শিশুদের তালিকা';

      }
      // echo "<pre>"; print_r($this->data); exit;    

      $this->load->view('backend/_layout_main', $this->data);
   }  

   public function get_child_admit_interest_list_by_status($status){ 

      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->get_db_child_admit_interest($item->database_name, $status);
      }

      $this->data['results'] = $data_arr; 

      if ($status == 1) {

         $this->data['meta_title'] = 'প্রারম্ভিক পর্যায় (৬ মাস - ১২ মাস) তালিকা';

      }elseif ($status == 2){

         $this->data['meta_title'] = 'প্রারম্ভিক পর্যায় (১২ মাস - ৩০ মাস) তালিকা';

      }elseif ($status == 3){

         $this->data['meta_title'] = 'প্রারম্ভিক পর্যায় (৩০ মাস - ৪৮ মাস) তালিকা';

      }elseif ($status == 4){

         $this->data['meta_title'] = 'প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর) তালিকা';

      }
      // echo "<pre>"; print_r($this->data); exit;    

      $this->data['subview'] = 'member/child_admited_list';
      $this->load->view('backend/_layout_main', $this->data);
   }  

   public function get_db_verified_applicant($database_other, $gender){
      // Database Load
      // echo $database_other; exit;
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      // $results = $this->Member_model->get_data_all(0);
      $results = $this->Dashboard_model->get_male_female_child_gender($gender);

      return $results;
   } 

   public function get_db_child_admit_interest($database_other, $status){
      // Database Load
      // echo $database_other; exit;
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      // $results = $this->Member_model->get_data_all(0);
      $results = $this->Dashboard_model->get_child_admit_interest_list_by_status($status);

      return $results;
   } 


   public function verified_request_search($status){ 
      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->dc_verified_applicant_search($item->database_name, $status);
      }
      $this->data['results'] = $data_arr;     
      // echo "<pre>"; print_r($data_arr); exit;

      //Load page
      if ($status == 1) {
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে সেবা গ্রহণকারী শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_running_list';
      } elseif ($status == 2){
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্র ছেড়ে যাওয়া শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_complete_list';

      } elseif ($status == 3) {
         $this->data['meta_title'] = 'ভর্তির জন্য উপযুক্ত আবেদনকৃত শিশুর তালিকা';
         $this->data['subview'] = 'member/verified_application_list';

      } elseif ($status == 4){
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে ভর্তির জন্য উপযুক্ত অপেক্ষমান শিশুদের তালিকা';
         $this->data['subview'] = 'member/final_complete_pending_list';

      } elseif ($status == 5){
         $this->data['meta_title'] = 'দিবাযত্ন কেন্দ্রে অ্যাডমিন দ্বারা প্রত্যাখ্যাত শিশুদের তালিকা';
         $this->data['subview'] = 'member/reject_application_list';
      }

      $this->load->view('backend/_layout_main', $this->data);
   }     

   public function dc_verified_applicant_search($database_other, $status){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      // $results = $this->Member_model->get_data_all(0);
      $results = $this->Dashboard_model->applicant_member_search($status);

      return $results;
   } 

}