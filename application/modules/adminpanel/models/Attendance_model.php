<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Attendance_model extends MY_Model {

   public function __construct() {
      parent::__construct();
   }

   public function get_data($day_care) {
    $date = date('Y-m-d');
    // $date = '2021-02-16';
    // $this->customDB->get('members');
    // echo "<pre>";
    // print_r($this->customDB->group_by('id')->get('members')->result());exit();


      // count query
      $this->customDB->select('a.*, MIN(a.time) as intime, MAX(a.time) as outtime, m.child_name, m.machine_id');
      $this->customDB->from('attendances a');
      // $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->join('members m', 'm.machine_id = a.members_id');
      $this->customDB->where('a.day_cares_id', $day_care);
      // $this->customDB->where('DATE(a.time)', date('Y-m-d'));
      $this->customDB->where('DATE(a.time)', $date);
      $this->customDB->group_by('a.members_id, DATE(a.time)');
      $this->customDB->order_by('a.id', 'DESC');
      $query = $this->customDB->get()->result();

      return $query;
   }  

   public function get_info($id) {
      $query = $this->customDB->from('members')->where('id', $id)->get()->row();
      return $query;
   }  

   public function get_report($day_care, $type_id, $member_id=NULL, $start_date=NULL, $end_date=NULL) {
    // echo 'hello'; exit;
      // count query
      $this->customDB->select('a.*, MIN(a.time) as intime, MAX(a.time) as outtime, m.child_name, m.machine_id');
      $this->customDB->from('attendances a');
      // $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->join('members m', 'm.machine_id = a.members_id');
      $this->customDB->where('a.day_cares_id', $day_care);
      $this->customDB->where('m.member_types_id', $type_id);
      if($member_id != NULL){
         $this->customDB->where('a.members_id', $member_id);         
      }
      if($start_date != NULL){
        $this->customDB->where("date(a.time) BETWEEN '$start_date' AND '$end_date'");       
      }
      $this->customDB->group_by('a.members_id,date(a.time)');
      $this->customDB->order_by('date(a.time),m.child_name', 'DESC');
      // $this->customDB->order_by('a.id', 'DESC');
      $query = $this->customDB->get()->result();
      // echo $this->customDB->last_query(); exit;
      return $query;
   } 

   public function get_today_attendance($day_care, $type_id) {
   	// $this->customDB->select('count(a.members_id)');
      $this->customDB->select('a.*, MIN(a.time) as intime, MAX(a.time) as outtime, m.child_name, m.machine_id, m.member_types_id');
      $this->customDB->from('attendances a');
      // $this->customDB->join('members m', 'm.id = a.members_id', 'LEFT');
      $this->customDB->join('members m', 'm.machine_id = a.members_id');
      $this->customDB->where('m.member_types_id', $type_id);
      $this->customDB->where('a.day_cares_id', $day_care);
      $this->customDB->where('DATE(a.time)', date('Y-m-d'));
      $this->customDB->group_by('a.members_id, date(a.time)');
      $this->customDB->order_by('a.id', 'ASC');
      $query = $this->customDB->get()->result();
      // print_r($query);exit();
      // echo $this->customDB->last_query(); exit;
      return $query;
   } 

   public function get_member_staff($day_care){
        $data[''] = '--- Select Member ---';
        $this->customDB->select('id, child_name');
        $this->customDB->from('members');
        $this->customDB->where('member_types_id', 2);
        $this->customDB->where('day_cares_id', $day_care);
        $this->customDB->order_by('id', 'ASC');
        $query = $this->customDB->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['child_name'];
        }

        return $data;
    }

    public function get_type(){
        $data[''] = '--- Select ---';
        $query = $this->customDB->get('member_types');

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['name'];
        }
        return $data;
    }
    public function get_machine_id($emp_id)
    {
     return $this->customDB->select('machine_id')
                                 ->where('id',$emp_id)
                                 ->get('members')->row()->machine_id;
    }
   // function delete($id) {
   //    $img_path = 'slider_img/';
   //    $info = $this->get_info($id);

   //    if(!empty($info->image_file)){
   //       @unlink($img_path.$info->image_file);
   //       // @unlink($img_path_thumbs.$info->image_file);
   //    }

   //    $this->db->where('id', $id);
   //    $this->db->delete('slider');

   //    return TRUE;
   // }

   // function delete_img($id) {
   //    $img_path = 'slider_img/';
   //    $info = $this->get_info($id);

   //    if(!empty($info->image_file)){
   //       @unlink($img_path.$info->image_file);
   //    }

   //    return TRUE;
   // }

}
