<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends MY_Model {
   //public $customDB;

   public function __construct() {
      parent::__construct();
      // $this->load->database('another_db', TRUE);
      // $DB2 = $this->load->database('another_db', TRUE);      
   }


   public function get_child_admit_interest() 
   { 
      /*$this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 1);
      $this->customDB->where('status', $status);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;*/

      $this->customDB->select('r.id, r.child_admit_interest');
      $this->customDB->join('members m', 'm.registrations_id = r.id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', 1);
      // $this->customDB->where('r.child_admit_interest', $status);
      $this->customDB->group_by('r.child_admit_interest');
      return $this->customDB->get('registrations r')->result(); 

      // return count($tmp) > 0 ? $tmp[0]->count : 0;
   } 

   public function get_child_admit_interest_by_status($status) 
   { 
      /*$this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 1);
      $this->customDB->where('status', $status);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;*/

      $this->customDB->select('COUNT(*) as count');
      $this->customDB->join('members m', 'm.registrations_id = r.id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', 1);
      $this->customDB->where('r.child_admit_interest', $status);
      $tmp = $this->customDB->get('registrations r')->result(); 
      // return count($tmp) > 0 ? $tmp[0]->count : 0;
      return $tmp[0]->count;
   } 

   public function get_members_count() {
      // count query
      $this->db->select('COUNT(*) as count');
      $this->db->from('members');
      $q = $this->db->get()->result();

      $tmp = $q;
      $ret['num_rows'] = $tmp[0]->count;

      return $ret;
   }

   public function get_count_child_gender($gender) {      
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 1);
      $this->customDB->where('gender', $gender);
      $this->customDB->where('status', 1);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;
   }

   public function get_count($table) {

      $this->db->select('count(*)');
      $query = $this->db->get($table);
      $cnt = $query->row_array();

      return $cnt['count(*)'];
   }

   public function get_all_member($status) {      
      $this->customDB->select('m.id, m.monthly_fee, m.comments, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      $this->customDB->order_by('m.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }
   public function get_info_all($id) {
      
      $this->customDB->select('m.id, m.monthly_fee, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');

      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.id', $id);
      $query = $this->customDB->get()->row();

      return $query;
   }


   public function get_count_child($status) {      
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 1);
      $this->customDB->where('status', $status);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;
   }

   public function get_count_staff() {      
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('member_types_id', 2);
      $tmp = $this->customDB->get('members')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->count;
      return count($tmp) > 0 ? $tmp[0]->count : 0;
   }

   public function get_count_advance_bill() {      
      $budget_id = $this->customDB->select('MAX(id) as id')->where('budget_types_id', 2)->get('budgets')->row()->id;
      $this->customDB->select('SUM(amount) as amount');
      $this->customDB->where('budgets_id', $budget_id);
      $tmp = $this->customDB->get('budget_items')->result();
      // echo $this->customDB->last_query(); exit;        
      // return $tmp[0]->amount;
      return count($tmp) > 0 ? $tmp[0]->amount : 0;
   }

   public function get_count_attendance_today() {  
      $this->customDB->select('COUNT(*) as count');
      $this->customDB->where('DATE(time)', date('Y-m-d'));
      $this->customDB->group_by('attendances.members_id');
      $tmp = $this->customDB->get('attendances')->result();
      // echo $this->customDB->last_query(); exit;
      return count($tmp) > 0 ? count($tmp) : 0;

      // if(count($tmp) > 0) {
      //    return $tmp[0]->count;                  
      // }else{
      //    return 0;
      // }
   }



   public function get_day_cares() {
      $where_in = array('1','2','11');
      $this->db->select('*');  
      $this->db->where_in('id',$where_in);      
      $query =  $this->db->get('day_cares');

      return $query->result();
   }
   
   public function get_three_day_cares() {
      $where_in = array('1,2,11'); 
      $this->db->select('*');        
      $this->db->where_in('id',$where_in);        
      $query =  $this->db->get('day_cares');

      return $query->result();
   }


   public function get_male_female_child_gender($gender) { 

      $this->customDB->select('m.id, m.monthly_fee, m.comments, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');

      $this->customDB->where('m.member_types_id', 1);
       $this->customDB->where('m.status', 1);
      $this->customDB->where('gender', $gender);
      $this->customDB->order_by('m.id', 'ASC');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_child_admit_interest_list_by_status($status) 
   { 

      $this->customDB->select('m.id, m.monthly_fee, m.comments, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.created, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');
      $this->customDB->from('registrations r');
      $this->customDB->join('members m', 'm.registrations_id = r.id', 'LEFT');

      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', 1);
      $this->customDB->where('r.child_admit_interest', $status);

      $this->customDB->order_by('r.id', 'ASC');
      return $query = $this->customDB->get()->result();

   } 


   public function applicant_member_search($status) {
      
      $this->customDB->select('m.id, m.day_cares_id,m.comments, m.monthly_fee, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.is_paid, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest, r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no,  r.child_admit_interest, r.child_number');

      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      if ($this->input->get('year_group')) {
         $this->customDB->where('r.child_admit_interest',$this->input->get('year_group'));
      }
      if ($this->input->get('date_joining')) {
         $this->customDB->where('r.child_doj',date('Y-m-d', strtotime($this->input->get('date_joining'))));
      }
      if ($this->input->get('date_dirth')) {
         $this->customDB->where('m.child_dob',date('Y-m-d', strtotime($this->input->get('date_dirth'))));
      }
      $query = $this->customDB->get()->result();

      return $query;
   }


}
