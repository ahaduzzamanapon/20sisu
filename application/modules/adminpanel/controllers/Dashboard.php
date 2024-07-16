<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->ion_auth->logged_in()):
         redirect('index.php/login');
      endif;

      // $this->load->database();
      // $this->load->driver('cache');

      // if (!$this->ion_auth->in_group(array('parents'))){
      //     redirect(base_url());
      // }

      $this->load->model('Dashboard_model');
   }

   public function index(){      
      if($this->ion_auth->is_admin()){         
         $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

         $gtotal['application'] = 0;
         $gtotal['child'] = 0;
         $gtotal['male'] = 0;
         $gtotal['female'] = 0;
         $gtotal['staff'] = 0;
         $gtotal['attendance'] = 0;
         $gtotal['sec_1'] = 0;
         $gtotal['sec_2'] = 0;
         $gtotal['sec_3'] = 0;
         $gtotal['sec_4'] = 0;

         foreach ($this->data['day_care_list'] as $item) {
            $data_arr[$item->id] = $this->dc_statistics($item->database_name);
            $gtotal['application'] += $data_arr[$item->id]['total_application'];
            $gtotal['child'] += $data_arr[$item->id]['total_child'];
            $gtotal['male'] += $data_arr[$item->id]['total_child_male'];
            $gtotal['female'] += $data_arr[$item->id]['total_child_female'];
            $gtotal['staff'] += $data_arr[$item->id]['total_staff'];
            $gtotal['attendance'] += $data_arr[$item->id]['total_attendance_today'];
         }

         foreach ($this->data['day_care_list'] as $item) {
            $data_arra[$item->id] = $this->dc_child_interest($item->database_name);
            $gtotal['sec_1'] += $data_arra[$item->id]['total_sec_1'];
            $gtotal['sec_2'] += $data_arra[$item->id]['total_sec_2'];
            $gtotal['sec_3'] += $data_arra[$item->id]['total_sec_3'];
            $gtotal['sec_4'] += $data_arra[$item->id]['total_sec_4'];
          }  

         $this->data['result_dc'] = $data_arr;
         // echo "<pre>";print_r($this->data['result_dc']);exit;
         $this->data['result_gTotal_application'] = $gtotal['application'];
         $this->data['result_gTotal_child'] = $gtotal['child'];
         $this->data['result_gTotal_child_male'] = $gtotal['male'];
         $this->data['result_gTotal_child_female'] = $gtotal['female'];
         $this->data['result_gTotal_staff'] = $gtotal['staff'];
         $this->data['result_gTotal_attendance'] = $gtotal['attendance'];
         $this->data['result_gTotal_sec_1'] = $gtotal['sec_1'];
         $this->data['result_gTotal_sec_2'] = $gtotal['sec_2'];
         $this->data['result_gTotal_sec_3'] = $gtotal['sec_3'];
         $this->data['result_gTotal_sec_4'] = $gtotal['sec_4'];


         // echo '<pre>';
         // print_r($this->data); exit; 

         // echo $this->data['result_dc'][1]['total_attendance'];
         //exit;

         // Load View
         $this->data['meta_title'] = 'ড্যাশবোর্ড';
         $this->data['subview'] = 'dashboard/index';
         $this->load->view('backend/_layout_main', $this->data);

      }else if($this->ion_auth->in_group(array('dc_admin'))){
         $userDetails = $this->Common_model->get_user_details();
         // echo $user_group; exit;
         // echo $userDetails->day_care_id; exit;
         $this->data['day_care_info'] = $this->Common_model->get_row('day_cares', $userDetails->day_care_id);

         $this->data['dc_statistics'] = $this->dc_statistics($this->data['day_care_info']->database_name);
         $this->data['dc_child_interest'] = $this->dc_child_interest($this->data['day_care_info']->database_name);
         
         // $this->data['child_admit_statistics'] = $this->getdata($this->data['day_care_info']->database_name);



         // print_r($this->data['dc_child_interest']); exit;         
         
         // Load View
         $this->data['meta_title'] = 'ড্যাশবোর্ড';
         $this->data['subview'] = 'dashboard/dc_admin_index';
         $this->load->view('backend/_layout_main', $this->data);
      }
   }

   public function application_list(){

      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->dc_applicant($item->database_name);
         //$gtotal['application'] = $data_arr[$item->id]['total_application'];
      }

      $this->data['results'] = $data_arr;
      // $this->data['result_gTotal_application'] = $gtotal['application'];

      // $this->data['results'] = $this->Member_model->get_data(0); 

      // echo '<pre>';
      // print_r($this->data['results']); exit;

      $this->data['meta_title'] = 'সমস্ত আবেদন';
      $this->data['subview'] = 'dashboard/application_list';
      $this->load->view('backend/_layout_main', $this->data);
   }  

   public function dc_applicant($database_other){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      $results = $this->Dashboard_model->get_all_member(0);

      return $results;
   } 

   public function dc_statistics($database_other){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);

      $results['total_child'] = $this->Dashboard_model->get_count_child(1);
      $results['total_child_male'] = $this->Dashboard_model->get_count_child_gender('Male');
      $results['total_child_female'] = $this->Dashboard_model->get_count_child_gender('Female');
      $results['total_application'] = $this->Dashboard_model->get_count_child(0);
      $results['total_advance_bill'] = $this->Dashboard_model->get_count_advance_bill();
      $results['total_staff'] = $this->Dashboard_model->get_count_staff();
      $results['total_attendance_today'] = $this->Dashboard_model->get_count_attendance_today();

      return $results;
   }

   public function getdata() { 
      // echo 'hello'; exit;
      $userDetails = $this->Common_model->get_user_details();
      // echo $user_group; exit;
      // echo $userDetails->day_care_id; exit;
      $dc = $this->Common_model->get_row('day_cares', $userDetails->day_care_id);
      $this->Dashboard_model->loadCustomerDatabase($dc->database_name);

      $data = $this->Dashboard_model->get_child_admit_interest(); 

      /*echo '<pre>';
      print_r($this->Dashboard_model->get_child_admit_interest_by_status(4)); exit;*/
 
      // data to json 
 
      $responce->cols[] = array( 
         "id" => "", 
         "label" => "Topping", 
         "pattern" => "", 
         "type" => "string" 
      ); 
      $responce->cols[] = array( 
         "id" => "", 
         "label" => "Total", 
         "pattern" => "", 
         "type" => "number" 
      ); 
      
      foreach($data as $cd) 
      { 
         if($cd->child_admit_interest == 1){
            $name = 'প্রারম্ভিক পর্যায় (৬ মাস - ১২ মাস)';
            $count = $this->Dashboard_model->get_child_admit_interest_by_status(1);
         }elseif($cd->child_admit_interest == 2){
            $name = 'প্রাক-প্রারম্ভিক পর্যায় (১২ মাস - ৩০মাস)';
            $count = $this->Dashboard_model->get_child_admit_interest_by_status(2);
         }elseif($cd->child_admit_interest == 3){
            $name = 'প্রারম্ভিক পর্যায় (৩০ মাস - ৪৮ মাস)';            
            $count = $this->Dashboard_model->get_child_admit_interest_by_status(3);
         }elseif($cd->child_admit_interest == 4){
            $name = 'প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর)';
            $count = $this->Dashboard_model->get_child_admit_interest_by_status(4);
         }

         $responce->rows[]["c"] = array( 
            array( 
               "v" => "$name", 
               "f" => null 
            ) , 
            array( 
               "v" => (int)$count, //(int)$cd->quantity, 
               "f" => null 
            ) 
         ); 
      } 

      echo json_encode($responce); 
   } 

   public function dc_child_interest($database_other){
      // Database Load
      $dbName=$this->Dashboard_model->loadCustomerDatabase($database_other);
      $results['total_sec_1'] = $this->Dashboard_model->get_child_admit_interest_by_status(1);
      $results['total_sec_2'] = $this->Dashboard_model->get_child_admit_interest_by_status(2);
      $results['total_sec_3'] = $this->Dashboard_model->get_child_admit_interest_by_status(3);
      $results['total_sec_4'] = $this->Dashboard_model->get_child_admit_interest_by_status(4);

      return $results;
   }

   public function getdata_admin() { 
      $data=array();
      $data['gtotal_sec_1']='';
      $data['gtotal_sec_2']='';
      $data['gtotal_sec_3']='';
      $data['gtotal_sec_4']='';
      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->dc_child_interest($item->database_name);
         // $gtotal['application'] += $data_arr[$item->id]['total_application'];
      }

         // $this->data['result_dc'] = $data_arr;

         foreach ($data_arr as $value) {            
            // $data[] array('id');
            $data['gtotal_sec_1'] += $value['total_sec_1'];
            $data['gtotal_sec_2'] += $value['total_sec_2'];
            $data['gtotal_sec_3'] += $value['total_sec_3'];
            $data['gtotal_sec_4'] += $value['total_sec_4'];
         }
         /*echo '<pre>';
         print_r($data); exit;*/

      // echo 'hello'; exit;
      // $userDetails = $this->Common_model->get_user_details();
      // echo $user_group; exit;
      // echo $userDetails->day_care_id; exit;
      // $dc = $this->Common_model->get_row('day_cares', $userDetails->day_care_id);
      // $this->Dashboard_model->loadCustomerDatabase($dc->database_name);

      // $data = $this->Dashboard_model->get_child_admit_interest(); 

      /*echo '<pre>';
      print_r($this->Dashboard_model->get_child_admit_interest_by_status(4)); exit;*/
 
      // data to json 
 
      $responce->cols[] = array( 
         "id" => "", 
         "label" => "Topping", 
         "pattern" => "", 
         "type" => "string" 
      ); 
      $responce->cols[] = array( 
         "id" => "", 
         "label" => "Total", 
         "pattern" => "", 
         "type" => "number" 
      ); 


      foreach($data as $key => $value) 
      { 
         // print_r($cd); exit;
         if($key == 'gtotal_sec_1'){
            $name = 'প্রারম্ভিক উদ্দীপনা পর্যায় (৬ মাস - ১২ মাস)';
            $count = $value;
         }elseif($key == 'gtotal_sec_2'){
            $name = 'প্রাক-প্রারম্ভিক শিখন পর্যায় (১২ মাস - ৩০মাস)';
            $count = $value;
         }elseif($key == 'gtotal_sec_3'){
            $name = 'প্রারম্ভিক শিখন পর্যায় (৩০ মাস - ৪৮ মাস)';            
            $count = $value;
         }elseif($key == 'gtotal_sec_4'){
            $name = 'প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর)';
            $count = $value;
         }

         $responce->rows[]["c"] = array( 
            array( 
               "v" => "$name", 
               "f" => null 
            ) , 
            array( 
               "v" => (int)$count, //(int)$cd->quantity, 
               "f" => null 
            ) 
         ); 
      } 

      echo json_encode($responce); 
   } 

   public function blank(){
      $this->data['meta_title'] = 'খালি পৃষ্ঠা';
      $this->data['subview'] = 'dashboard/blank';
      $this->load->view('backend/_layout_main', $this->data);
   }	

}