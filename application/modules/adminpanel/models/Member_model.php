<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($status) {
      // count query
      $this->customDB->select('m.id, m.monthly_fee, m.child_name, m.child_age, m.completion_date, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_doj, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_working_institute, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      $this->customDB->order_by('m.id', 'ASC');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_data_all($status) {
      // count query
      $this->customDB->select('m.id, m.monthly_fee, m.child_name, m.child_age, m.completion_date, m.child_weight, m.child_height, r.child_mother_name, r.child_doj, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', $status);
      $this->customDB->order_by('m.id', 'ASC');
      $query = $this->customDB->get()->result();

      return $query;
   }

   public function get_user_info($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();        

        return $query;
    }

   public function get_data_for_subsidy($dcID, $status) {
      // count query
      $dbName = 'daycare_'.$dcID;
      // exit($status);
      $this->loadCustomerDatabase($dbName);
      // count query
      $this->customDB->select('m.*,r.*, m.id as member_id, r.id as reg_id');
      $this->customDB->where('m.subsidies', $status);
      $this->customDB->join("registrations r", "r.id = m.registrations_id", 'LEFT');
      $this->customDB->from('members m');
      $query = $this->customDB->get()->result();

      return $query;

   }

   public function get_seat_count($dcID, $groupID) {
      // count query
      $dbName = 'daycare_'.$dcID;
      // exit($status);
      $this->loadCustomerDatabase($dbName);
      // count query
      // $this->customDB->select('m.*,r.*');
      $this->customDB->select('count(r.id) as total');
      $this->customDB->where('m.status', '1');
      $this->customDB->where('r.child_admit_interest', $groupID);
      $this->customDB->join("registrations r", "r.id = m.registrations_id", 'LEFT');
      $this->customDB->from('members m');
      $query = $this->customDB->get()->row()->total;

      return $query;

   }

   public function get_subsidy_fee($ageID, $salID) {
      // count query
      $this->db->select("mf.fee as fee");
      $this->db->from("daycare.daycare_susidy_fee_list mf");
      $this->db->join("daycare.child_age_group cage", "cage.id = mf.age_group_id", 'LEFT');
      $this->db->join("daycare.parents_salary_range psal", "psal.id = mf.salary_group_id", 'LEFT');
      
      $this->db->where("mf.age_group_id", $ageID);
      $this->db->where("mf.salary_group_id", $salID);
      $query = $this->db->get()->row()->fee;

      return $query;

   }

   public function get_seat_limit($groupID) {
      // count query
      $this->db->select("mf.total_seat as limit");
      $this->db->from("daycare.day_care_seat_limit mf");
      $this->db->where("mf.id", $groupID);
      $query = $this->db->get()->row()->limit;

      return $query;

   }

   public function get_top_applicant() {
      // count query
      $this->customDB->select('m.id, m.parents_id, m.day_cares_id, m.child_name, m.child_age, m.child_weight, m.child_height, r.child_mother_name, r.child_mother_designation, r.child_mother_working_place, r.child_mother_ph_no, r.child_mother_total_salary');
      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.member_types_id', 1);
      $this->customDB->where('m.status', 0);
      $this->customDB->where('m.is_waiting_sms_send', 0);
      $this->customDB->order_by('m.id', 'ASC');
      $this->customDB->limit(1);
      $query = $this->customDB->get()->row();

      return $query;
   }

   public function get_info($id) {
      
      $this->customDB->select('m.id, m.monthly_fee, m.child_vaccination, m.parents_sign, m.child_image, m.child_vaccine_card, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.parents_image, r.guardian_image, r.birth_certificate, r.father_mother_job_certificate, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');

      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.id', $id);
      $query = $this->customDB->get()->row();

      return $query;
   }



   public function get_info_all($id, $dcID) {
      
      $dbName = 'daycare_'.$dcID;
      // exit($dbName);
      $this->loadCustomerDatabase($dbName);

      $this->customDB->select('m.id, m.parents_id, m.child_vaccination, m.monthly_fee,m.parents_sign, m.child_image, m.child_vaccine_card,  m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.parents_image, r.guardian_image, r.birth_certificate, r.father_mother_job_certificate, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');

      $this->customDB->from('members m');
      $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');
      $this->customDB->where('m.id', $id);
      $query = $this->customDB->get()->row();

      return $query;
   }



   public function edit_otherdb($table, $id, $field, $data) {
    // print_r($field);exit('ali');
      $this->customDB->where($field, $id);
      if ($this->customDB->update($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function get_transactions($id) {
      // count query
      $this->db->select('t.*, p.project_name_en, pm.pm_name_en');
      $this->db->from('transactions t');
      $this->db->join('projects p', 'p.id = t.project_id', 'LEFT');
      $this->db->join('payment_methods pm', 'pm.id = t.trans_method', 'LEFT');
      $this->db->where('t.member_id', $id);
      $this->db->order_by('t.id', 'ASC');
      $query = $this->db->get()->result();

      return $query;
   }


   public function get_data_request() {
        // count query
    $this->db->select('u.id, u.name_bn, u.first_name, u.pay_member_fee, u.image_file, u.curr_working_place, d.desig_name_en');
    $this->db->from('users u');
    $this->db->join('designations d', 'd.id = u.curr_designation_id', 'LEFT');       
    $this->db->where('u.is_request', 1);
    $this->db->order_by('u.id', 'DESC');
    $query = $this->db->get()->result();

    return $query;
 }

 public function get_daycare_name($id){
        $this->db->select('id, title');
        $this->db->from('day_cares');
        $this->db->where('id', $id);
        $query = $this->db->get()->row()->title;        

        return $query;
    }



 function delete($id) {
    $img_path = 'member_img/';
    $info = $this->get_info($id);

    if(!empty($info->image_file)){
       @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
    }

    $this->db->where('id', $id);
    $this->db->delete('users');

    return TRUE;
 }

  function delete_img($id) {
    $img_path = 'member_img/';
    $info = $this->get_info($id);

    if(!empty($info->image_file)){
       @unlink($img_path.$info->image_file);
    }

    return TRUE;
  }

  public function get_male_female_child_gender($database_other, $gender) { 
    // Database Load
    $this->Dashboard_model->loadCustomerDatabase($database_other);
    // $results = $this->Member_model->get_data_all(0);


  $this->customDB->select('m.id, m.monthly_fee, m.comments, m.day_cares_id, m.payment_status, m.pament_received, m.status,m.registrations_id, m.child_name, m.child_dob, m.gender, m.child_age, m.child_weight, m.child_height, m.birth_mark, m.birth_certificate_no, m.describe_food, m.describe_health_problem, m.bcg, m.penta, m.pcb, m.opb, m.ipb, m.mr, m.ham, m.image_file, m.machine_id, m.is_paid, m.payment_slip, r.child_mother_name, r.child_mother_national_no, r.child_father_name, r.child_mother_work_type, r.child_father_national_no, r.child_parents_name, r.child_parents_ph_no, r.child_parents_national_no, r.child_mother_designation, r.child_mother_working_place,  r.child_mother_working_institute_type, r.child_mother_ph_no, r.child_mother_total_salary, r.child_mother_basic_salary, r.child_mother_pay_scale, r.child_mother_job_duration, r.child_doj, r.child_admit_interest,  r.child_father_total_salary, r.child_father_basic_salary, r.child_father_pay_scale,r.child_mother_working_institute, r.child_parents_present_address, r.child_mother_permanent_address, r.child_mother_parmanent_ph_no, r.child_father_permanent_address, r.child_father_ph_no, r.child_admit_interest, r.child_number');
    $this->customDB->from('members m');
    $this->customDB->join('registrations r', 'r.id = m.registrations_id', 'LEFT');

    $this->customDB->where('m.member_types_id', 1);
    $this->customDB->where('m.status', $status);
    $this->customDB->where('gender', $gender);
    $this->customDB->order_by('m.id', 'ASC');
    $query = $this->customDB->get()->result();

    return $query;
  }

}
