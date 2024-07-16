<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends Frontend_Controller {

   var $img_path;

   function __construct (){
      parent::__construct();
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning"> <i class="fa fa-warning"></i> ', '</div>');

      $this->img_path = realpath(APPPATH . '../assets/images/member_img/');
      $this->img_path_payment = realpath(APPPATH . '../assets/images/member_img');
      $this->img_path_receipt = realpath(APPPATH . '../assets/images/receipt_img');

      $this->test_img_path = realpath(APPPATH . '../assets/images/test');

      if ($this->ion_auth->logged_in()){
         // $this->DB2 = $this->load->database('another_db', TRUE);
         $this->userSessID = $this->session->userdata('user_id');

         // Load another database
         $DayCare = $this->Common_model->get_user_details($this->userSessID);
         // print_r($DayCare); exit;
         if($DayCare->day_care_id){
            $this->DC_DBName  = $DayCare->database_name;
            $this->DC_ID      = $DayCare->day_care_id;   
            // $this->DC_DBName = 'daycare_1';
            $this->Site_model->loadCustomerDatabase($this->DC_DBName);
         }else{
            if($_SERVER['HTTP_HOST'] === 'localhost'){
               $this->Site_model->loadCustomerDatabase('daycare_1');
            }else{
               $this->Site_model->loadCustomerDatabase('daycare_1');
            }
         }
      }

   }

   public function test()
      {
         echo 'Hello';
          echo phpinfo(); exit;

         $this->form_validation->set_rules('userfile', '', 'callback_file_check');

         //Validate and input data
         if ($this->form_validation->run() == true) {
            // Image Upload
            $new_file_name = time().'-'.$_FILES["userfile"]['name'];
            $config['allowed_types']= 'jpg|png|jpeg';
            $config['upload_path']  = $this->test_img_path;
            $config['file_name']    = $new_file_name;
            $config['max_size']     = 600;

            $this->load->library('upload', $config);
            //upload file to directory
            if($this->upload->do_upload()){
               $uploadData = $this->upload->data();
               $config = array(
                  'source_image' => $uploadData['full_path'],
                  'new_image' => $this->test_img_path,
                  'maintain_ratio' => TRUE,
                  'width' => 300,
                  'height' => 300
                  );
               $this->load->library('image_lib',$config);
               $this->image_lib->initialize($config);
               $this->image_lib->resize();

               $uploadedFile = $uploadData['file_name'];
               // $members_data['payment_slip'] = $new_file_name;

            }else{
               $this->data['message'] = $this->upload->display_errors();
               print_r($this->data['message']);
            }
         }

         // Dropdown
         // $this->data['day_cares'] = $this->Common_model->get_daycares(); 
         // $this->data['method'] = 'newapplication'; 
         $this->data['meta_title'] = 'Test';               
         $this->data['subview'] = 'test_upload';
         $this->load->view('frontend/_layout_main', $this->data);

      }

   public function index()
   {
      // Load View

      $this->data['meta_title'] = 'হোম';
      $this->data['subview'] = 'index';
      $this->load->view('frontend/_layout_main', $this->data);
   }

      public function under_construction()
   {
      // Load View

      $this->data['meta_title'] = 'হোম';
      $this->data['subview'] = 'fixing';
      $this->load->view('frontend/_layout_main', $this->data);
   }
      public function get_file($file)
   {
      $this->data['meta_title'] = 'হোম';
      $this->data['subview'] = 'get_file';
      $this->data['file'] = $file;
      $this->load->view('frontend/_layout_main', $this->data);
   }

   
   public function shishu_academy_district()
   {   
      //view
      $this->data['meta_title'] = 'বাংলাদেশ শিশু একাডেমী জেলা শাখা সমূহ';
      $this->data['subview'] = 'shishu_academy_district'; #Name of the file
      $this->load->view('frontend/_layout_main', $this->data); #Main Layout
   }

   public function shishu_academy_upazila()
   {   
      //view
      $this->data['meta_title'] = 'বাংলাদেশ শিশু একাডেমী উপজেলা শাখা সমূহ';
      $this->data['subview'] = 'shishu_academy_upazila'; #Name of the file
      $this->load->view('frontend/_layout_main', $this->data); #Main Layout
   }

   public function entertainment()
      {
         $this->data['meta_title'] = "চিত্তোবিনোদন";
         $this->data['subview'] = 'entertainment'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

    public function child_law()
      {
         $this->data['meta_title'] = "শিশু দিবাযত্ন কেন্দ্র পরিচালনার প্রয়োজনীয় আইনসমূহ";
         $this->data['subview'] = 'child_law'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }  

   public function admission_procedure()
   {
      //Method for admission
      $this->data['meta_title'] = 'ভর্তি প্রক্রিয়া';
      $this->data['subview'] = 'admission_procedure';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function about_us()
   {
      // Load View

      $this->data['meta_title'] = 'test';
      $this->data['subview'] = 'about_us';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function services(){
      // Load View

      $this->data['meta_title'] = 'সেবা সমূহ';      
      $this->data['subview'] = 'services';
      $this->load->view('frontend/_layout_main', $this->data);
   }


   public function contact_us(){

      $this->data['day_care_address'] = $this->Site_model->get_day_cares_address();

         // Load View

      $this->data['meta_title'] = 'যোগাযোগ';
      $this->data['subview'] = 'contact_us';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function registration_old(){   

      //user
      $tables = $this->config->item('tables','ion_auth');
      $identity_column = $this->config->item('identity','ion_auth');
      $this->data['identity_column'] = $identity_column;

      // validate form input field
      if($identity_column!=='email') {
         $this->form_validation->set_rules('identity','username','required|is_unique['.$tables['users'].'.'.$identity_column.']|callback_username_valid');
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'valid_email');
      } else {
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
      }
      $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');

      $this->form_validation->set_rules('first_name', 'first name (Bangla)', 'required|trim');
      $this->form_validation->set_rules('last_name', 'last name (Bangla)', 'required|trim');
      $this->form_validation->set_rules('mobile_no', 'mobile number', 'required|trim');

      //Validate and input data
      if ($this->form_validation->run() == true) {
         $email    = strtolower($this->input->post('email'));
         $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
         $password = $this->input->post('password');

         // Array data
         $additional_data = array(
           'first_name'    => $this->input->post('first_name'),
           'last_name'     => $this->input->post('last_name'),                
           'phone'         => $this->input->post('mobile_no'),                
           'email'         => $this->input->post('identity'),
           'gender'        => $this->input->post('gender')              
           );

         // echo "<pre>";
         // print_r($additional_data);
         // exit();

         //$user_group = array('3'); // parents 
         $id = $this->ion_auth->register($identity, $password, $email, $additional_data);

         // Send Message
         $name = $this->input->post('first_name').' '.$this->input->post('last_name');
         $mobile = '+88'.$this->input->post('mobile_no');
         $message = 'প্রিয় '. $name .', শিশু দিবাযত্ন কেন্দ্রে আপনাকে স্বাগতম।';
         $this->send_sms($mobile, $message);
         
         // redirect them back to the admin page
         redirect("index.php/my-profile");
      }

      // Load View
      $this->data['meta_title'] = 'রেজিস্ট্রেশন';                
      $this->data['subview'] = 'registration';
      $this->load->view('frontend/_layout_main', $this->data);
   }


   public function registration(){   

      //user
      $tables = $this->config->item('tables','ion_auth');
      $identity_column = $this->config->item('identity','ion_auth');
      $this->data['identity_column'] = $identity_column;

      // validate form input field
      if($identity_column!=='email') {
         $this->form_validation->set_rules('identity','username','required|is_unique['.$tables['users'].'.'.$identity_column.']|callback_username_valid');
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'valid_email');
      } else {
         $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
      }

      $this->form_validation->set_rules('first_name', 'first name (Bangla)', 'required|trim');
      $this->form_validation->set_rules('last_name', 'last name (Bangla)', 'required|trim');
      
      $this->form_validation->set_rules(
        'mobile_no', 'mobile number', 'required|trim|is_unique[users.phone]',
        array(
                'required'      => 'আপনাকে অবশ্যই মোবাইল নম্বর দিতে হবে',
                'is_unique'     => 'এই মোবাইল নং টি ইতি মধ্যে ব্যবহার করা হয়েছে'
        )
      );

      //Validate and input data
      if ($this->form_validation->run() == true) {
         $email    = strtolower($this->input->post('email'));
         $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
         $password = '87654321';
         $otp_code = rand(1111,9999);

         // Array data
         $additional_data = array(
           'first_name'    => $this->input->post('first_name'),
           'last_name'     => $this->input->post('last_name'),                
           'phone'         => $this->input->post('mobile_no'),                
           'email'         => $this->input->post('identity'),
           'gender'        => $this->input->post('gender'),              
            'otp'          => $otp_code
           );



         // echo "<pre>";
         // print_r($additional_data);
         // exit();

         //$user_group = array('3'); // parents 
         $id = $this->ion_auth->register($identity, $password, $email, $additional_data);

         //generate session
         $newdata = array(
           'id'  => $id,
           'otp' => $otp_code
         );

         $this->session->set_userdata('new_data',$newdata);


         // Send Message
         $name = $this->input->post('first_name').' '.$this->input->post('last_name');
         $mobile = '+88'.$this->input->post('mobile_no');
         $message = 'প্রিয় '. $name .', শিশু দিবাযত্ন কেন্দ্রে আপনাকে স্বাগত । আপনার ওটিপি হল - '. $otp_code .' , এই ওটিপি ব্যবহার করে  আপনার পাসওয়ার্ড সেট করুন।';
         $this->send_sms($mobile, $message);
         
         // redirect them back to the admin page
         redirect('index.php/set_password');
      }

      // Load View
      $this->data['meta_title'] = 'রেজিস্ট্রেশন';                
      $this->data['subview'] = 'registration';
      $this->load->view('frontend/_layout_main', $this->data);
   }

   public function forgotten_password(){

      $this->form_validation->set_rules('mobile_no', 'mobile number', 'required|trim');

      //Validate and input data
      if ($this->form_validation->run() == true) {
         $mobile_no = $this->input->post('mobile_no');

         // Check exists
         if($this->Common_model->exists('users', 'phone', $mobile_no)){
            $user =$this->Site_model->get_info_by_mobile($mobile_no);
            $otp_code = rand(1111,9999);
            // $otp_code = $user->password;
            $name = $user->first_name;
            // print_r($user->password);exit('user');
            // Send Message
            $mobile = '+88'.$mobile_no;
            $message = 'Your Password is '. $otp_code;
            $message = 'প্রিয়  '. $name .', আপনার ওটিপি হল - '. $otp_code .' এই ওটিপি ব্যবহার করে পাসওয়ার্ড পুনরায় সেট করুন';
            // $this->send_sms($mobile, $message);
            if($this->send_sms($mobile, $message)){
               // Save to date base where mobile no matched OTP Code
               $dataArr = array('otp' => $otp_code);
               $this->Common_model->edit('users', $user->id, 'id', $dataArr);

               // Redigt to reset password
               $newdata = array(
                  'id'  => $user->id,
                  'otp' => $otp_code
               );
               // $this->session->set_userdata($newdata); 
              $this->session->set_userdata('new_data', $newdata);

              // Redirect to reset password
             redirect("index.php/site/reset_password");

              // print_r($user);exit('alis');
            }
         }else{
            // Mobile no not exists
              exit('Mobile no not exists');
         }

      }
      

      // Load View
      $this->data['meta_title'] = ' পাসওয়ার্ড পুনরুদ্ধার';                
      $this->data['subview'] = 'forgot_password';
      $this->load->view('frontend/_layout_main', $this->data);
         
   }

   public function set_password(){      

      $this->form_validation->set_rules('otp', 'otp', 'required|trim');
      $this->form_validation->set_rules('password', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
      $this->form_validation->set_rules('confirm_password', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');


      // Validate and input data
      if ($this->form_validation->run() == true) {
         // Cross match OTP
         $newData = $this->session->all_userdata();
         // print_r($newData); exit('dfd');
         
         if($this->Common_model->exists('users', 'otp', $newData['new_data']['otp'])){
            // finally change the password
            $user =$this->Site_model->get_info($newData['new_data']['id']);
            $identity = $user->username; //$user->{$this->config->item('identity', 'ion_auth')};
            // print_r($identity);exit('identity');
            $change = false;
            if ($newData['new_data']['otp'] == $this->input->post('otp')) {
               $change = $this->ion_auth->reset_password($identity, $this->input->post('password'));
            }

            if ($change){
               // if the password was successfully changed
               $this->session->set_flashdata('message', $this->ion_auth->messages());
               redirect("index.php/login");
            } else {
               $this->session->set_flashdata('message', $this->ion_auth->errors());
               redirect('index.php/site/set_password'.$code);
            }
         }
         
      }
      
      //Validate and input data
      
      

      // Load View
      $this->data['meta_title'] = ' পাসওয়ার্ড পুনরুদ্ধার';                
      $this->data['subview'] = 'set_password';
      $this->load->view('frontend/_layout_main', $this->data);
         
   }

   public function reset_password(){      

      $this->form_validation->set_rules('otp', 'otp', 'required|trim');
      $this->form_validation->set_rules('password', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[confirm_password]');
      $this->form_validation->set_rules('confirm_password', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');


      // Validate and input data
      if ($this->form_validation->run() == true) {
         // Cross match OTP
         $newData = $this->session->all_userdata();
         // print_r($newData['new_data']['otp']); exit('dfd');
         
         if($this->Common_model->exists('users', 'otp', $newData['new_data']['otp'])){
            // finally change the password
            $user =$this->Site_model->get_info($newData['new_data']['id']);
            $identity = $user->username; //$user->{$this->config->item('identity', 'ion_auth')};

            // print_r($identity);exit('identity');
            $change = $this->ion_auth->reset_password($identity, $this->input->post('password'));
            if ($change){
               // if the password was successfully changed
               $this->session->set_flashdata('message', $this->ion_auth->messages());
               redirect("index.php/login");
            } else {
               $this->session->set_flashdata('message', $this->ion_auth->errors());
               redirect('index.php/site/reset_password'.$code);
            }
         }
         
      }
      
      //Validate and input data
      
      

      // Load View
      $this->data['meta_title'] = ' পাসওয়ার্ড পুনরুদ্ধার';                
      $this->data['subview'] = 'reset_password';
      $this->load->view('frontend/_layout_main', $this->data);
         
   }

   public function login(){   

      //validate form input
      $this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
      $this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

      $this->data['login_error'] = '';

      if ($this->form_validation->run() == true){
         // check to see if the user is logging in
         // check for "remember me"
         $remember = (bool) $this->input->post('remember');

         if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)){

            // Check group
            if (!$this->ion_auth->in_group(array('parents'))){
               // redirect them to the login page
               $this->ion_auth->logout();
               $this->session->set_flashdata('error', 'Parents login only!');
               $this->data['login_error'] = 'Parents login only!';
               // redirect('login');
            }

            //if the login is successful
            //redirect them back to the home page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('index.php/my-profile');
         }else{
            // if the login was un-successful
            // redirect them back to the login page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
               redirect('index.php/login'); // use redirects instead of loading views for compatibility with MY_Controller libraries
            }
         }else{
            // the user is not logging in so display the login page
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['identity'] = array('name' => 'identity',
               'id'    => 'identity',
               'type'  => 'text',
               'class' => 'form-control',
               'placeholder' => 'Email',
               'value' => $this->form_validation->set_value('identity'),
               );
            $this->data['password'] = array('name' => 'password',
               'id'   => 'password',
               'type' => 'password',
               'class' => 'form-control',
               'placeholder' => 'Password',
               );
         }
         
      // Load View
         $this->data['meta_title'] = 'লগইন';                
         $this->data['subview'] = 'login';
         $this->load->view('frontend/_layout_main', $this->data);
      }


      // log the user out
      public function logout()
      {
         // log the user out
         $logout = $this->ion_auth->logout();

         // redirect them to the login page
         $this->session->set_flashdata('message', $this->ion_auth->messages());
         redirect(base_url());
      }

      public function app_view($id){
         // echo $id;

         $info = $this->Site_model->get_application_info($id);
         // print_r()
         // echo json_encode($this->Site_model->get_application_info($id));



         $html = '<table class="tg">';

         $html .= '<tr> <td class="tg-dath">শিশুর নাম: </td><td class="tg-wra3">'.$info->child_name.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম তারিখ: </td><td class="tg-wra3">'.$info->child_dob.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">লিঙ্গ: </td><td class="tg-wra3">'.$info->gender.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">ভর্তির তারিখে শিশুর বয়স: </td><td class="tg-wra3">'.$info->child_age.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর ওজন: </td><td class="tg-wra3">'.$info->child_weight.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর উচ্চতা: </td><td class="tg-wra3">'.$info->child_height.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম চিহ্ন: </td><td class="tg-wra3">'.$info->birth_mark.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর জন্ম সনদ নম্বর: </td><td class="tg-wra3">'.$info->birth_certificate_no.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর কোন বিশেষ খাদ্যে সমস্যা থাকলে উহার বর্ণনা: </td><td class="tg-wra3">'.$info->describe_food.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর বিশেষ কোন শারীরিক অসুস্থতা থাকলে উহার বর্ণনা: </td><td class="tg-wra3">'.$info->describe_health_problem.'</td></tr>';
         $html .= '<tr> <td class="tg-dath">শিশুর কয়টি টিকা সম্পন্ন করেছে?: </td><td class="tg-wra3">'.$info->describe_health_problem.'</td></tr>';         
         $html .= '</table><br><br>';
         echo $html;
      }  


      public function my_profile( $edit = 'no'){   
         if (!$this->ion_auth->logged_in()):
            redirect('index.php/login');
         endif;

         // User Info
         $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         // Basic
         $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
         // Application List
         // print_r($this->data['info']);//exit('ids');
         // exit('alidfgh');
         // $this->data['results'] = $this->Site_model->get_application_data($this->userSessID);
         $this->data['results'] = $this->Site_model->get_application($this->userSessID);

         $this->data['day_care_list'] = $this->Site_model->get_day_cares();

         foreach ($this->data['day_care_list'] as $item) {
            $data_arr[$item->id] = $this->dc_child_interest($item->database_name);
            //$gtotal['application'] = $data_arr[$item->id]['total_application'];
         }
         $this->data['seat_count'] = $data_arr;
         // echo '<pre>';
         // print_r($this->data['user_info']); exit;

         // Update Basic Info
         if($this->input->post('hide_update_info') == '11111'){

            $this->form_validation->set_rules('first_name', 'first name', 'required|trim');

            // update the password if it was posted
            if ($this->input->post('password')){
               $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
               $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }


            //Validate and input data
            if ($this->form_validation->run() == true) {
               $form_data = array(
                  'first_name'   => $this->input->post('first_name'),
                  'last_name'    => $this->input->post('last_name'),
                  'phone'        => $this->input->post('phone'),
                  'gender'       => $this->input->post('gender')     
                  );

               // update the password if it was posted
               if ($this->input->post('password')){
                  $data['password'] = $this->input->post('password');
                  // check to see if we are updating the user
                  $this->ion_auth->update($this->userSessID, $data);
               }

               $this->Common_model->edit('users', $this->userSessID, 'id', $form_data);
               // Message
               $this->session->set_flashdata('success', 'আপনার প্রোফাইল সংশোধন  হয়েছে। ধন্যবাদ');
               redirect('index.php/my-profile');
            }
         }
          //100 tk entry fee module
         if($this->input->post('hide_app_info') == '33333'){

            $this->form_validation->set_rules('userfile', 'file required', 'callback_file_check');
           
            if ($this->form_validation->run() == true) {

              
                  // Image Upload
               if($_FILES['userfile']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path_receipt;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path_receipt,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile = $uploadData['file_name'];
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }

               if($uploadedFile != '' || $uploadedFile != NULL){
                  $form_data['money_receipt'] = $uploadedFile;
                  $form_data['is_verified'] = 1;
                  $this->session->set_flashdata('success', 'আপনার নিবন্ধন সম্পূর্ণ হয়েছে। ধন্যবাদ');
               }

               $this->Common_model->edit('users', $this->userSessID, 'id', $form_data);
               // Message
               redirect('index.php/my-profile');

               }
            }


         if($this->input->post('hide_app_info') == '22222'){
            
            // Application Form
            $this->form_validation->set_rules('day_cares_id', 'Day Cares Id', 'required|trim');
            // $this->form_validation->set_rules('child_name', 'Child name', 'required|trim');

            // If file selected
            if(@$_FILES['userfile']['size'] > 0){
               $this->form_validation->set_rules('userfile', '', 'callback_file_check');
            }

            // If Immunization selected
            if(@$_FILES['userfile1']['size'] > 0){
               $this->form_validation->set_rules('userfile1', '', 'callback_file_check');
            }
            

            // If Immunization selected
            if(@$_FILES['userfile2']['size'] > 0){
               $this->form_validation->set_rules('userfile2', '', 'callback_file_check');
            }
            

            // If Immunization selected
            if(@$_FILES['userfile3']['size'] > 0){
               $this->form_validation->set_rules('userfile3', '', 'callback_file_check');
            }
            

            //Validate and input data
            if ($this->form_validation->run() == true) {

               // Dynamic DB Name
               $day_care_info = $this->Common_model->get_row('day_cares', $this->input->post('day_cares_id'));
               $this->Site_model->loadCustomerDatabase($day_care_info->database_name);


               //Registration table
               $registrations_data  = $_POST['registrations'];
               $registrations_data_ = array(
                  'day_cares_id' => $this->input->post('day_cares_id'),
                  'parents_id'   => $this->userSessID,
                  'created'      => date('Y-m-d H:i:s'),        
                  );
               $registrations_data = array_merge($registrations_data, $registrations_data_);

                // Image Upload
               if($_FILES['userfile']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }


               // Immunization Image Upload
               if($_FILES['userfile1']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile1"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile1')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile1 = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }



               // Immunization Image Upload
               if($_FILES['userfile2']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile2"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile2')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile2 = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }



               // Immunization Image Upload
               if($_FILES['userfile3']['size'] > 0){
                  $new_file_name = time().'-'.$_FILES["userfile3"]['name'];
                  $config['allowed_types']= 'jpg|png|jpeg';
                  $config['upload_path']  = $this->img_path;
                  $config['file_name']    = $new_file_name;
                  $config['max_size']     = 600;

                  $this->load->library('upload', $config);
                  //upload file to directory
                  if($this->upload->do_upload('userfile3')){
                     $uploadData = $this->upload->data();
                     $config = array(
                        'source_image' => $uploadData['full_path'],
                        'new_image' => $this->img_path,
                        'maintain_ratio' => TRUE,
                        'width' => 300,
                        'height' => 300
                        );
                     $this->load->library('image_lib',$config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $uploadedFile3 = $uploadData['file_name'];
                     // print_r($uploadedFile);
                  }else{
                     $this->data['message'] = $this->upload->display_errors();
                  }
               }


               if($_FILES['userfile']['size'] > 0){
                  $registrations_data['parents_image'] = $uploadedFile;
               }

               if($_FILES['userfile1']['size'] > 0){
                  $registrations_data['guardian_image'] = $uploadedFile1;
               }

               if($_FILES['userfile2']['size'] > 0){
                  $registrations_data['birth_certificate'] = $uploadedFile2;
               }

               if($_FILES['userfile3']['size'] > 0){
                  $registrations_data['father_mother_job_certificate'] = $uploadedFile3;
               }

               /*echo "<pre>";
               print_r($registrations_data);
               echo "</pre>";*/
               $this->Site_model->save_other_db('registrations', $registrations_data);
               $insert_id = $this->Site_model->last_insert_id();
               $monthly_fee = $this->Site_model->get_regular_monthly_fee($_POST['registrations']['child_admit_interest']);
               //Member table 
               $members_data  = $_POST['members'];
               $members_data_ = array(
                  'parents_id'         => $this->userSessID,
                  'registrations_id'   => $insert_id,
                  'member_types_id'    => 1,
                  'monthly_fee'        => $monthly_fee,
                  'day_cares_id'       => $this->input->post('day_cares_id'),
                  'created'   => date('Y-m-d H:i:s'),        
                  );
               $members_data = array_merge($members_data, $members_data_);

              
               /*echo "<pre>";
               print_r($members_data);
               echo "</pre>";
               exit;*/
               $this->Site_model->save_other_db('members', $members_data);
               $insert_member_id = $this->Site_model->last_insert_id();

               // update user Day care
               $user_daycare_data = array(
                  'user_id'      => $this->userSessID,
                  'daycare_id'   => $this->input->post('day_cares_id'),
                  'member_id'    => $insert_member_id
                  );
               // $this->Site_model->edit_user('users', $this->userSessID, 'id', $user_data);
               $this->Common_model->save('users_daycares', $user_daycare_data);


               // Send Message
               $dc_name = $this->Site_model->get_daycare_name($this->input->post('day_cares_id'));
               $exp = explode(" ", $dc_name);
               $daycare_name = $exp[0];
               $user = $this->ion_auth->user()->row();
               
               $name = $this->input->post('first_name').' '.$this->input->post('last_name');
               $mobile = '+88'.$user->phone;
               $message = $dc_name.' আপনার শিশু অপেক্ষমাণ তালিকাভুক্ত হয়েছে,ধন্যবাদ। শিশুর বয়স গ্রুপের উপর ভিত্তি করে মাসিক সেবা মূল্য '.$monthly_fee.'/- টাকা নির্ধারণ করা হয়েছে ।';
               $this->send_sms($mobile, $message);

               // print_r($mobile.','. $message);exit('fee');
               // Message
               $this->session->set_flashdata('success', 'আপনার আবেদনটি সম্পন্ন হয়েছে। ধন্যবাদ');
               redirect('index.php/my-profile');
            }
         }
         

         // Dropdown
         // $this->data['day_cares'] = $this->Common_model->get_daycares(); 
         $this->data['day_cares'] = $this->Common_model->get_three_daycares(); 


         // Load View
         $this->data['method'] = 'my_profile'; 
         $this->data['meta_title'] = 'প্রোফাইল';                
         $this->data['subview'] = 'my_profile';
         // $this->data['subview'] = 'childenroll_form';
         $this->data['edit'] = $edit == 'edit' ? true : false;
         $this->load->view('frontend/_layout_main', $this->data);
      }




      public function dc_child_interest($database_other){
         // Database Load
         $this->Site_model->loadCustomerDatabase($database_other);

         $results['total_sec_1'] = $this->Site_model->get_child_admit_interest_by_status(1);
         $results['total_sec_2'] = $this->Site_model->get_child_admit_interest_by_status(2);
         $results['total_sec_3'] = $this->Site_model->get_child_admit_interest_by_status(3);
         $results['total_sec_4'] = $this->Site_model->get_child_admit_interest_by_status(4);

         return $results;
      }


      public function dc_seat_availability($database_other){
         // Database Load
         // print_r($database_other);exit;
         $this->Site_model->loadCustomerDatabase($database_other);
         $results = $this->Site_model->get_seat_count($database_other);

         return $results;
      }

      public function newapplication($dcID, $appID)
      {

         if (!$this->ion_auth->logged_in()){redirect('index.php/login');}

         // Student info
         $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $appID);
         // echo "<pre>";print_r($this->data['student_info']);exit('student_info');
         // User Info
         $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         // print_r($this->userSessID);exit('alllliii');
         // Basic
         $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
         // Application List
         // $this->data['results'] = $this->Site_model->get_application(NULL, $id);
         $this->data['results'] = $this->Site_model->get_application($this->userSessID);
         // $this->data['member_info'] = $this->Site_model->get_application_info($id);
         // echo "<pre>";
         // print_r($this->data['student_info']->day_cares_id);exit;

         
         // If file selected
         if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
         }


         //Validate and input data
         if ($this->form_validation->run() == true) {

            // Dynamic DB Name
            $day_care_info = $this->Common_model->get_row('day_cares', $this->data['results'][0]->day_cares_id);
            $this->Site_model->loadCustomerDatabase($day_care_info->database_name);

         // exit($appID);
            

            //Member table 
            $members_data  = $_POST['members'];
            $members_data_ = array(
               /*'parents_id'         => $this->userSessID,
               'registrations_id'   => $insert_id,*/
               'member_types_id'    => 1,
               'day_cares_id'       => $dcID,
               'created'            => date('Y-m-d H:i:s'),      
               'status'             => 1,
               'is_applied'         => 1       
               );
            $members_data = array_merge($members_data, $members_data_);

            // Image Upload
            if($_FILES['userfile']['size'] > 0){
               $new_file_name = time().'-'.$_FILES["userfile"]['name'];
               $config['allowed_types']= 'jpg|png|jpeg';
               $config['upload_path']  = $this->img_path;
               $config['file_name']    = $new_file_name;
               $config['max_size']     = 600;

               $this->load->library('upload', $config);
               //upload file to directory
               if($this->upload->do_upload('userfile')){
                  $uploadData = $this->upload->data();
                  $config = array(
                     'source_image' => $uploadData['full_path'],
                     'new_image' => $this->img_path,
                     'maintain_ratio' => TRUE,
                     'width' => 300,
                     'height' => 300
                     );
                  $this->load->library('image_lib',$config);
                  $this->image_lib->initialize($config);
                  $this->image_lib->resize();

                  $uploadedFile = $uploadData['file_name'];
                  // print_r($uploadedFile);
               }else{
                  $this->data['message'] = $this->upload->display_errors();
               }
            }
            // Image Upload
            if($_FILES['userfile1']['size'] > 0){
               $new_file_name = time().'-'.$_FILES["userfile1"]['name'];
               $config['allowed_types']= 'jpg|png|jpeg';
               $config['upload_path']  = $this->img_path;
               $config['file_name']    = $new_file_name;
               $config['max_size']     = 600;

               $this->load->library('upload', $config);
               //upload file to directory
               if($this->upload->do_upload('userfile1')){
                  $uploadData = $this->upload->data();
                  $config = array(
                     'source_image' => $uploadData['full_path'],
                     'new_image' => $this->img_path,
                     'maintain_ratio' => TRUE,
                     'width' => 300,
                     'height' => 300
                     );
                  $this->load->library('image_lib',$config);
                  $this->image_lib->initialize($config);
                  $this->image_lib->resize();

                  $uploadedFile1 = $uploadData['file_name'];
                  // print_r($uploadedFile);
               }else{
                  $this->data['message'] = $this->upload->display_errors();
               }
            }
            // Image Upload
            if($_FILES['userfile2']['size'] > 0){
               $new_file_name = time().'-'.$_FILES["userfile2"]['name'];
               $config['allowed_types']= 'jpg|png|jpeg';
               $config['upload_path']  = $this->img_path;
               $config['file_name']    = $new_file_name;
               $config['max_size']     = 600;

               $this->load->library('upload', $config);
               //upload file to directory
               if($this->upload->do_upload('userfile2')){
                  $uploadData = $this->upload->data();
                  $config = array(
                     'source_image' => $uploadData['full_path'],
                     'new_image' => $this->img_path,
                     'maintain_ratio' => TRUE,
                     'width' => 300,
                     'height' => 300
                     );
                  $this->load->library('image_lib',$config);
                  $this->image_lib->initialize($config);
                  $this->image_lib->resize();

                  $uploadedFile2 = $uploadData['file_name'];
                  // print_r($uploadedFile);
               }else{
                  $this->data['message'] = $this->upload->display_errors();
               }
            }

            if($_FILES['userfile']['size'] > 0){
                  $members_data['parents_sign'] = $uploadedFile;
               }

            if($_FILES['userfile1']['size'] > 0){
                  $members_data['child_image'] = $uploadedFile1;
               }

            if($_FILES['userfile2']['size'] > 0){
                  $members_data['child_vaccine_card'] = $uploadedFile2;
               }

            
            // $this->Site_model->edit_user('users', $this->userSessID, 'id', $user_data);
            $this->Site_model->edit_member('daycare_'.$dcID.'.members',$appID,'id',$members_data);
            // echo"<pre>";print_r($members_data); exit('minasdar');
            // $this->Common_model->save('users_daycares', $user_daycare_data);


            // Send Message
            $dc_name = $this->Site_model->get_daycare_name($dcID);
            $exp = explode(" ", $dc_name);
            $daycare_name = $exp[0];
            $user = $this->ion_auth->user()->row();
            // $name = $this->input->post('first_name').' '.$this->input->post('last_name');
            // $mobile = '+88'.$user->phone;
            // $message = $daycare_name.' কেন্দ্রে,আপনার শিশু অপেক্ষমাণ তালিকাভুক্ত হয়েছে,ধন্যবাদ';
            // $this->send_sms($mobile, $message);

            // Message
            $this->session->set_flashdata('success', 'আপনার আবেদনটি সম্পন্ন হয়েছে। ধন্যবাদ');
            redirect('index.php/my-profile');
         }
         // }

         // Dropdown
         $this->data['day_cares'] = $this->Common_model->get_daycares(); 
         // $this->data['method'] = 'newapplication'; 
         $this->data['meta_title'] = 'আবেদন';               
         $this->data['subview'] = 'newapplication_form';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function subsidary_application($dcID, $appID)
      {
         if (!$this->ion_auth->logged_in()){redirect('index.php/login');}
         
         // Student info
         $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $appID);
         $regID = $this->data['student_info']->reg_id;
         // echo "<pre>";print_r($this->data['student_info']);exit;
         // User Info
         $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         // print_r($this->userSessID);exit('alllliii');
         // Basic
         $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
         // Application List
         // $this->data['results'] = $this->Site_model->get_application(NULL, $id);
         $this->data['results'] = $this->Site_model->get_application($this->userSessID);
         // $this->data['member_info'] = $this->Site_model->get_application_info($id);
         
         //=======myprofile========//

         
            // Application Form
         $this->form_validation->set_rules('registrations[family_monthly_income]', 'Family Monthly Income', 'required|trim');
            
            

            //Validate and input data
         if ($this->form_validation->run() == true) {
            // print_r($this->input->post('family_monthly_income')); exit('idfmdad');

            // Dynamic DB Name
            $day_care_info = $this->Common_model->get_row('day_cares', 1);

            $this->Site_model->loadCustomerDatabase($day_care_info->database_name);


            //Registration table
            $registrations_data  = $_POST['registrations'];
            $registrations_data_ = array(
               // 'day_cares_id' => $this->input->post('day_cares_id'),
               'day_cares_id' => $this->data['student_info']->day_cares_id,
               'parents_id'   => $this->userSessID,
               );
            $registrations_data = array_merge($registrations_data, $registrations_data_);
         

            $this->Site_model->edit_registration('daycare_'.$dcID.'.registrations',$regID,'id',$registrations_data);

            //Member table
            // $members_data  = $_POST['members'];
            $members_data = array(
               // 'day_cares_id' => $this->input->post('day_cares_id'),
               // 'day_cares_id' => $this->data['student_info']->day_cares_id,
               'subsidies' => 1,
               // 'parents_id'   => $this->userSessID,
               'created'      => date('Y-m-d H:i:s'),        
               );
            // $members_data = array_merge($members_data, $members_data_);
            
            $this->Site_model->edit_member('daycare_'.$dcID.'.members',$appID,'id',$members_data);
            // echo "<pre>";print_r($members_data);exit($appID);


            // Send Message
            // $dc_name = $this->Site_model->get_daycare_name($this->input->post('day_cares_id'));
            $dc_name = $this->Site_model->get_daycare_name($this->data['student_info']->day_cares_id);
            $exp = explode(" ", $dc_name);
            $daycare_name = $exp[0];
            $user = $this->ion_auth->user()->row();
            

            // Message
            $this->session->set_flashdata('success', 'আপনার ভর্তুকি আবেদনটি সম্পন্ন হয়েছে। ধন্যবাদ');
            redirect('index.php/my-profile');
         }


         //=====//myprofile========//
         

         // Dropdown
         $this->data['day_cares'] = $this->Common_model->get_daycares(); 
         // $this->data['method'] = 'newapplication'; 
         $this->data['meta_title'] = 'ভর্তুকির আবেদন';               
         $this->data['subview'] = 'subsidy_form';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function payment($dcID, $appID)
      {
         // print_r($id);
         if (!$this->ion_auth->logged_in()){redirect('index.php/login');}

         $this->data['student_info'] = $this->Site_model->get_student_details($dcID, $appID);
         // echo "<pre>";print_r($this->data['student_info']);exit('student_info');
         // User Info
         $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         // print_r($this->userSessID);exit('alllliii');
         // Basic
         $this->data['info'] = $this->Common_model->get_user_details($this->userSessID);
         // Application List
         // $this->data['results'] = $this->Site_model->get_application(NULL, $id);
         // $this->data['results'] = $this->Site_model->get_application($this->userSessID);

         // User Info
         // $this->data['user_info'] = $this->Site_model->get_info($this->userSessID);
         $this->data['results'] = $this->Site_model->get_member_info($appID);
         // Basic
        
        
         
         // If file selected
         if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
         }

       

         //Validate and input data
         if ($this->form_validation->run() == true) {

         // Dynamic DB Name
         $day_care_info = $this->Common_model->get_row('day_cares', $dcID);
         $this->Site_model->loadCustomerDatabase($day_care_info->database_name);

        

         //Member table 
         $members_data  = $_POST['members'];
         
         $members_data_ = array(
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
         // print_r($appID);exit('fffsssid');
               $this->data['message'] = $this->upload->display_errors();
            }
         }

       
         $this->Site_model->edit_member('daycare_'.$dcID.'.members',$appID,'id',$members_data);
         // $this->Site_model->edit_member('daycare_1.members',$id,'id',$members_data);
         // $this->Common_model->save('users_daycares', $user_daycare_data);


         // Send Message
         $dc_name = $this->Site_model->get_daycare_name($this->data['results']->day_cares_id);
         $exp = explode(" ", $dc_name);
         $daycare_name = $exp[0];
         $user = $this->ion_auth->user()->row();
         

         // Message
         $this->session->set_flashdata('success', 'আপনার পেমেন্ট টি সম্পন্ন হয়েছে। ধন্যবাদ');
         redirect('index.php/my-profile');
      }
         // }

         // Dropdown
         $this->data['day_cares'] = $this->Common_model->get_daycares(); 
         // $this->data['method'] = 'newapplication'; 
         $this->data['meta_title'] = 'পেমেন্ট আবেদন';               
         $this->data['subview'] = 'payment_form';
         $this->load->view('frontend/_layout_main', $this->data);
      }


     

      public function success()
      { 

      //view
         $this->data['meta_title'] = 'Success';
         $this->data['subview'] = 'success';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function day_care_centers()
      {   
      //view
         $this->data['meta_title'] = 'Day Care Centers';
         $this->data['subview'] = 'day_care_centers'; #Name of the file
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function mohila_day_care_centers()
      {
         $this->db->select('*');  
         $this->db->from('day_cares_others');  
         $this->db->where('type_id',1);  
         $this->data['results'] = $this->db->get()->result();
         // print_r($result);
         // exit;  
         // echo "hello"; 
         // exit;
         $this->data['meta_title'] = "মহিলা বিষয়ক অধিদপ্তরের আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ";
         $this->data['subview'] = 'day_care_centers_under_mohila'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
         
      }

      public function mohila_day_care_centers_national(){

         $this->db->select('*');  
         $this->db->from('day_cares_others');  
         $this->db->where('type_id',2);  
         $this->data['results'] = $this->db->get()->result();
         // print_r($result);
         // exit;  
         // echo "hello"; 
         // exit;
         $this->data['meta_title'] = "জাতীয় মহিলা সংস্থার আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ";
         $this->data['subview'] = 'mohila_day_care_centers_national'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout

      }


      public function six_to_twelve_children_day_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age day care";
         $this->data['subview'] = 'six_to_twelve_children_day_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      #6-12 year children

      public function six_to_twelve_children_food_nutrition()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function six_to_twelve_children_excitement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function six_to_twelve_children_health_care()
      {

         // $this->data['results'] = $this->Common_model->get_doctors();
         // $this->data['division'] = $this->Common_model->get_division();
         // $this->data['district'] = $this->Common_model->get_district();
         // $this->data['upazila'] = $this->Common_model->get_upazila_thana();
         // echo 'hello'; exit;

         $this->data['meta_title'] = "প্রাথমিক স্বাস্থ্য সেবা";
         $this->data['subview'] = 'six_to_twelve_children_health_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_children_mental_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_children_health_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function six_to_twelve_childen_curricular()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'six_to_twelve_childen_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }


      #12-30 year children

      public function twelve_to_thirty_children_day_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         // $this->data['subview'] = 'twelve_to_thirty_children_day_care'; #day_care_centers_under_mohila.php
         $this->data['subview'] = 'under_construction';
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      // public public function FunctionName()
      // {
      //    # code...
      // }
      public function twelve_to_thirty_children_food_nutrition()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'twelve_to_thirty_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }

      public function twelve_to_thirty_children_excitement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'twelve_to_thirty_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_children_mental_improvement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'twelve_to_thirty_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_children_health_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'twelve_to_thirty_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout   
      }

      public function twelve_to_thirty_childen_curricular()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'twelve_to_thirty_childen_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data); #Main Layout
      }


      public function four_to_six_years_children_curricular()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function four_to_six_years_children_day_care()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_day_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function four_to_six_years_children_excitement()
      {
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function four_to_six_years_children_food_nutrition()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function four_to_six_years_children_health_care()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_health_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function four_to_six_years_children_health_improvement()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function four_to_six_years_children_mental_improvement()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'four_to_six_years_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }






      public function two_to_four_years_children_curricular()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_curricular'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function two_to_four_years_children_day_care()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_day_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function two_to_four_years_children_excitement()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_excitement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function two_to_four_years_children_food_nutrition()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_food_nutrition'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function two_to_four_years_children_health_care()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_health_care'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function two_to_four_years_children_health_improvement()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_health_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function two_to_four_years_children_mental_improvement()
      {
         # code...
         $this->data['meta_title'] = "Children who are between 6 to 12 years age food nutrition";
         $this->data['subview'] = 'two_to_four_years_children_mental_improvement'; #day_care_centers_under_mohila.php
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function day_care_details($id)
      {   

         $this->data['day_care_detail'] = $this->Site_model->get_day_care_detail($id);


         // // $db_load = $this->Site_model->loadCustomerDatabase('daycare_1');
         //    // $this->load->database('daycare_1');
         //    $config['hostname'] = 'localhost';
         //    $config['username'] = 'root';
         //    $config['password'] = '';
         //    $config['database'] = 'daycare_1';
         //    $this->load->database($config);
         // // public function get_data($day_care) {
         //    // count query
         //    $this->db->select('m.id, m.child_name, m.phone, m.image_file');
         //    $this->db->from('members m');
         //    $this->db->where('m.member_types_id', 2);
         //    $this->db->where('m.day_cares_id', $id);
         //    $this->db->order_by('m.id', 'DESC');
         //    $query = $this->db->get()->result();

            // return $query;
         // } 
         // $DayCare = $this->Common_model->get_user_details($this->userSessID);  
         // $this->DC_DBName  = $DayCare->database_name;
         // $this->DC_ID      = $DayCare->day_care_id;
         // $this->DBName = 'daycare_1';
         // $this->loadCustomerDatabase('daycare_1');

         // echo '<pre>';
         $this->data['staffs'] =  $this->Site_model->get_staff_data($id);        
         $this->data['galleries'] =  $this->Site_model->get_gallery_client($id);
  // exit;
         
         // print_r($this->data['staffs']); exit;      

      //view
         $this->data['meta_title'] = 'Day Care Details';
         $this->data['subview'] = 'day_care_details';
         $this->load->view('frontend/_layout_main', $this->data);
         // $this->load->view('day_care_centers.php', $this->data);
      }



      public function events(){   

         $this->data['meta_title'] = 'ইভেন্টস';                   
         $this->data['method'] = 'events';        
         $this->data['subview'] = 'events';
         $this->load->view('frontend/_layout_main', $this->data);
      } 
      
      public function notice(){

         $this->db->where('status', 0);
         $this->data['notice'] = $this->db->get('notice')->result();
         // dd($this->data['notice']);
         $this->data['meta_title'] = 'নোটিশ';
         $this->data['subview'] = 'notice';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function event_details(){   

         $this->data['meta_title'] = 'ইভেন্টের বিস্তারিত';                   
         $this->data['method'] = 'events details';        
         $this->data['subview'] = 'event_details';
         $this->load->view('frontend/_layout_main', $this->data);
      } 

      public function gallery(){        
         $this->data['category'] = $this->Site_model->get_category('gallery_category');
         $this->data['gallery'] = $this->Site_model->get_gallery();
         $this->data['method'] = 'gallery';        
         $this->data['meta_title'] = 'গ্যালারি';        
         $this->data['subview'] = 'gallery';
         $this->load->view('frontend/_layout_main', $this->data);
      }  

      public function err404(){
         // $this->data['related_item'] = $this->Site_model->get_related_course_not_found();

         $this->data['meta_title'] = 'Page not found';
         $this->data['subview'] = 'err404';
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function sendemail(){
         $this->data['setting'] = $this->Common_model->get_info('setting');
         $this->load->library('email');

         // $this->email->initialize(array(
         //   'protocol' => 'smtp',
         //   'smtp_host' => 'smtp.sendgrid.net',
         //   'smtp_user' => 'sendgridusername',
         //   'smtp_pass' => 'sendgridpassword',
         //   'smtp_port' => 587,
         //   'crlf' => "\r\n",
         //   'newline' => "\r\n"
         // ));

         $this->email->from($this->input->post('email'), $this->input->post('name'));
         $this->email->to($this->data['setting']->contact_email);
         $this->email->subject($this->input->post('subject'));
         $this->email->message($this->input->post('message'));
         $this->email->send();

         // echo $this->email->print_debugger();
         redirect('contact-us');
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

      public function file_check($str){
         $this->load->helper('file');
         $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
         $mime = get_mime_by_extension($_FILES['userfile']['name']);
         $file_size = 600000; 
         $size_kb = '600 KB';

         if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
            if(!in_array($mime, $allowed_mime_type_arr)){                
               $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
               return false;
            }elseif($_FILES["userfile"]["size"] > $file_size){
               // $this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
               $this->form_validation->set_message('file_check', 'আপনার আপলোড কৃত ফাইলের সাইজ ৬০০ কিলোবাইটের অধিক। ');
               return false;
            }else{
               return true;
            }
         }else{
            $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
            return false;
         }
      }

      function ajax_exists_identity(){
         // echo 'true';
         $item = $_POST['inputData'];
         $result = $this->Common_model->exists('users', 'username', $item);
         // echo $this->db->last_query(); exit;
         if ($result == 0) {
            echo 'true';
         }else{
            echo 'false';
         }
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

      public function covid_19(){
         $this->data['meta_title'] = 'কোভিড-১৯ সংক্রমন প্রতিরোধ নির্দেশিকা';
         $this->data['subview'] = 'covid_19';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function children_rights(){
         $this->data['meta_title'] = 'শিশু অধিকার সনদ প্রতিপালন নির্দেশিকা';
         $this->data['subview'] = 'children_rights';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function children_health_service(){
         $this->data['meta_title'] = 'শিশুর প্রাক- প্রারম্ভিক শিক্ষা পাঠ্যক্রম';
         $this->data['subview'] = 'children_health_service';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function children_activiy(){
         $this->data['meta_title'] = 'শিশুর শারীরিক বিকাশ ও শারীরিক ক্রিয়াকলাপের নির্দেশিকা';
         $this->data['subview'] = 'children_activiy';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function primary_health(){
         $this->data['meta_title'] = 'শিশুর প্রাক- প্রারম্ভিক শিক্ষা পাঠ্যক্রম';
         $this->data['subview'] = 'primary_health';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function parents_hand_book(){
         $this->data['meta_title'] = 'অভিভাবক তথ্য হ্যান্ডবুক';
         $this->data['subview'] = 'parents_hand_book';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function primary_health_2(){
         $this->data['meta_title'] = 'প্রাথমিক স্বাস্থ্যসেবা';
         $this->data['subview'] = 'primary_health_2';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function physical_growth(){
         $this->data['meta_title'] = 'শারিরীক বিকাশ';
         $this->data['subview'] = 'physical_growth';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function mental_growth(){
         $this->data['meta_title'] = 'মানসিক বিকাশ';
         $this->data['subview'] = 'mental_growth';
         $this->load->view('frontend/_layout_main', $this->data);
      } 

      public function entertainment_art(){
         $this->data['meta_title'] = 'চিত্ত বিনোদন';
         $this->data['subview'] = 'entertainment_art';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function food(){
         $this->data['meta_title'] = 'খাদ্য ও পুষ্টি';
         $this->data['subview'] = 'food';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function art(){
         $this->data['meta_title'] = 'শিল্প ও সংস্কৃতি';
         $this->data['subview'] = 'art';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function security(){
         $this->data['meta_title'] = 'নিরাপত্তা';
         $this->data['subview'] = 'security';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function stop_crime(){
         $this->data['meta_title'] = 'অভিভাবক তথ্য হ্যান্ডবুক';
         $this->data['subview'] = 'stop_crime';
         $this->load->view('frontend/_layout_main', $this->data);
      }      

      public function children_curriculum(){
         $this->data['meta_title'] = 'শিশুর প্রাক- প্রারম্ভিক শিক্ষা পাঠ্যক্রম';
         $this->data['subview'] = 'children_curriculum';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function child_rights_certificats(){
         $this->data['meta_title'] = 'শিশুর প্রাক- প্রারম্ভিক শিক্ষা পাঠ্যক্রম';
         $this->data['subview'] = 'child_rights_certificats';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function child_pre_education(){
         $this->data['meta_title'] = 'শিশুর প্রাক- প্রারম্ভিক শিক্ষা পাঠ্যক্রম';
         $this->data['subview'] = 'child_pre_education';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function nutrition_instruction(){
         $this->data['meta_title'] = 'শিশু খাদ্য ও পুষ্টি নির্দেশিকা';
         $this->data['subview'] = 'nutrition_instruction';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function admission_form(){
         $this->data['meta_title'] = 'শিশু খাদ্য ও পুষ্টি নির্দেশিকা';
         $this->data['subview'] = 'admission_form';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function enrollment_application(){
         $this->data['meta_title'] = '';
         $this->data['subview'] = 'enrollment_application';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function questions(){
         $this->data['meta_title'] = 'জরিপ প্রশ্নমালা';
         $this->data['subview'] = 'questions';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function general_question(){
         $this->data['meta_title'] = 'সাধারণ প্রশ্নবলী';
         $this->data['subview'] = 'general_question';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function children_vaccine(){
         $this->data['meta_title'] = 'শিশুর টিকাদান';
         $this->data['subview'] = 'children_vaccine';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function subsidary(){
         $this->data['meta_title'] = 'ভর্তুকি ফরম';
         $this->data['subview'] = 'subsidary';
         $this->load->view('frontend/_layout_main', $this->data);
      }

       public function at_galance(){
         $this->data['meta_title'] = 'At A Galance';
         $this->data['subview'] = 'at_galance';
         $this->load->view('frontend/_layout_main', $this->data);
      }
      public function at_pdmsg(){
         $this->data['meta_title'] = 'পরিচালক';
         $this->data['subview'] = 'pdmsg';
         $this->load->view('frontend/_layout_main', $this->data);
      }
       public function at_admsg(){
               $this->data['meta_title'] = 'সহকারী পরিচালক ';
               $this->data['subview'] = 'admsg';
               $this->load->view('frontend/_layout_main', $this->data);
            }
       public function at_pomsg(){
               $this->data['meta_title'] = 'প্রোগ্রাম অফিসার';
               $this->data['subview'] = 'pomsg';
               $this->load->view('frontend/_layout_main', $this->data);
            }
       public function at_apmsg(){
               $this->data['meta_title'] = 'সহকারী প্রোগ্রামার';
               $this->data['subview'] = 'apmsg';
               $this->load->view('frontend/_layout_main', $this->data);
            }
       public function at_acmsg(){
               $this->data['meta_title'] = 'হিসাবরক্ষক';
               $this->data['subview'] = 'acmsg';
               $this->load->view('frontend/_layout_main', $this->data);
            }
       public function at_comsg(){
               $this->data['meta_title'] = 'কম্পিউটার অপারেটর';
               $this->data['subview'] = 'comsg';
               $this->load->view('frontend/_layout_main', $this->data);
            }

      public function law_un_child(){
         $this->data['meta_title'] = 'জাতিসংঘ শিশু অধিকার সনদ, ১৯৮৯';
         $this->data['subview'] = 'law_un_child';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_national_women_dev(){
         $this->data['meta_title'] = 'জাতীয় নারী উন্নয়ন নীতি, ২০১১';
         $this->data['subview'] = 'law_national_women_dev';
         $this->load->view('frontend/_layout_main', $this->data);
      }


      public function law_national_edu_law(){
         $this->data['meta_title'] = 'জাতীয় শিক্ষা নীতি, ২০১০';
         $this->data['subview'] = 'law_national_edu_law';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_national_child_law(){
         $this->data['meta_title'] = 'জাতীয় শিশু নীতি, ২০১১';
         $this->data['subview'] = 'law_national_child_law';
         $this->load->view('frontend/_layout_main', $this->data);
      }



      public function law_pre_primary(){
         $this->data['meta_title'] = 'প্রাক-প্রাথমিক শিক্ষাক্রম, ২০১১';
         $this->data['subview'] = 'law_pre_primary';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_pre_primary_structure(){
         $this->data['meta_title'] = 'প্রাক-প্রাথমিক শিক্ষার পরিচালনা কাঠামো, ২০০৮';
         $this->data['subview'] = 'law_pre_primary_structure';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_child_law(){
         $this->data['meta_title'] = 'শিশু আইন, ২০১৩';
         $this->data['subview'] = 'law_child_law';
         $this->load->view('frontend/_layout_main', $this->data);
      }



      public function law_child_dc_center_law(){
         $this->data['meta_title'] = 'শিশু দিবাযত্ন কেন্দ্র আইন, ২০২১';
         $this->data['subview'] = 'law_child_dc_center_law';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_child_dc_design_instruction(){
         $this->data['meta_title'] = 'শিশু দিবাযত্ন কেন্দ্রের নকশা এবং কারিগরী নির্দেশিকা';
         $this->data['subview'] = 'law_child_dc_design_instruction';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function law_child_care_law(){
         $this->data['meta_title'] = 'শিশুর প্রারম্ভিক যত্ন ও বিকাশের সমন্বিত নীতি-২০১৩';
         $this->data['subview'] = 'law_child_care_law';
         $this->load->view('frontend/_layout_main', $this->data);
      }

      public function child_mental_health_instruction(){
         $this->data['meta_title'] = 'মানসিক স্বাস্থ্য সেবা নির্দেশিকা';
         $this->data['subview'] = 'child_mental_health_instruction';
         $this->load->view('frontend/_layout_main', $this->data);
      }
   }