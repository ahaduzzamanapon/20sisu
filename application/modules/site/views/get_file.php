<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">
      <?php if ($file=='no') {?>
         <h2 style="font-weight: bolder;text-align: center;">Under Construction</h2>
         
     <?php }else{
            $data_side_data=$this->db->where('id',$file)->get('sidebar')->row();

      echo $data_side_data->file;
     } ?>
   </div>   
</div>