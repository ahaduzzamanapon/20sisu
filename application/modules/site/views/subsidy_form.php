<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h3{font-family: 'Kalpurush', sans-serif; text-align: center; font-weight: bold; font-size:16px;}
	h4{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}

   .title {
      text-align: center;
      padding: 10px 15px;
      border: 1px solid #ccc;
      display: inline-block;
      font-size: 24px;
      margin-bottom: 0px !important;
   }
</style>
<div class="row">
	<?php $this->load->view('frontend/right_side_bar'); ?>   
	
   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      <script>
         function func_details(id){
            // alert(id);

            $.ajax({
               type: "GET",
               url: hostname+'index.php/site/app_view/'+id,
               success: function(response) {
                  // AppendResponse(response);
                  // alert(response);
                  $('.appview').show();
                  $('.applications-list').hide();
                  $('.list_view').show();
                  $('.appview').html(response);
                  // console.log(response);
               }
            });
         }

         $(".list_view").click(function(){
          $('.applications-list').show();
          $('.appview').hide();
          $('.list_view').hide();

       });
      </script>

      <div style="text-align: center;">
         <p class="title"><?php echo $meta_title;?></p>
      </div>

      <div>
         <form action="<?=base_url('index.php/subsidary-application/'.$student_info->day_cares_id.'/'.$student_info->member_id)?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php //echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
                     <!-- <h2 align="center">শিশু তালিকা ভুক্তির আবেদন</h2> -->
                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">পার্ট-১: সাধারণ তথ্য</legend>
                     <div class="row form-row">
                           <!-- <div class="col-md-12">
                              <div class="form-group">
                                 <?php echo form_error('day_cares_id'); ?>
                                 <label>ডে কেয়ার সেন্টার নাম</label>
                                 <?php 
                                 $more_attr = 'class="form-control" ';
                                 echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                                 ?>
                              </div>
                           </div> -->              
                       
                           <div class="col-md-12">
                                <div class="form-group">
                                    <label>১। আপনি কি পূর্ণ কর্মঘন্টার (৯টা - ৫টা) কর্মজীবী নারী?</label><br>
                                    <input type="radio" name="registrations[child_mother_work_5-9]" value="yes"<?=set_value('applicant_relation')=='yes'?'checked':'checked';?>> হ্যাঁ 
                                    <input type="radio" name="registrations[child_mother_work_5-9]" value="no"<?=set_value('applicant_relation')=='no'?'':'';?>> না
                                 </div>
                           </div>

                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>২। আপনার পারিবারিক মাসিক আয় কি ৪৯,৯৯৯/- টাকার নিম্নে? </label><br>
                                    <input type="radio" name="registrations[family_monthly_income_less_50000]" value="yes" <?=set_value('family_monthly_income_less_50000')=='yes'?'checked':'checked';?>> হ্যাঁ 
                                    <input type="radio" name="registrations[family_monthly_income_less_50000]" value="no" <?=set_value('family_monthly_income_less_50000')=='no'?'':'';?>> না
                                     
                                 </div>
                              </div>
                     </div>
                  
                  </fieldset>


                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">পার্ট-২: আবেদনকারীর তথ্য </legend>
                          <div class="col-md-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <label>৩।  মাতার নাম:</label>
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name', $student_info->child_mother_name)?>" class="form-control"placeholder="" required>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <label>৪। ভর্তিকৃত শিশুর নাম: </label>
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" name="members[child_name]"  value="<?=set_value('child_name', $student_info->child_name)?>" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <label>৫। ঠিকানা:</label>
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" name="registrations[child_mother_permanent_address]" value="<?=set_value('child_mother_permanent_address', $student_info->child_mother_permanent_address)?>" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <label>ই-মেইল আইডি:</label>
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" name="registrations[child_mother_email]" value="<?=set_value('child_mother_email', $student_info->child_mother_email)?>" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <label>মোবাইল নম্বর:</label>
                                    </div>
                                    <div class="col-md-9">
                                       <input type="text" name="registrations[child_mother_ph_no]" value="<?=set_value('child_mother_ph_no', $student_info->child_mother_ph_no)?>" class="form-control" placeholder="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                  </fieldset>

                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">পার্ট-৩: আর্থিক তথ্য</legend>
                       <div class="row form-row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>৬। মাতার মাসিক আয়ের পরিমাণ</label><br>
                                    <input type="radio" name="registrations[morther_monthly_income]" value="1">  ০ - ৭,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[morther_monthly_income]" value="2">  ৮,০০০ - ১৯,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[morther_monthly_income]" value="3"> ২০,০০০ - ৩৪,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[morther_monthly_income]" value="4"> ৩৫,০০০ - ৪৯,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[morther_monthly_income]" value="5"> ৫০,০০০ অথবা ততোধিক<br>
                                    
                                  </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>৭। পিতার মাসিক আয়ের পরিমাণ</label><br>
                                    <input type="radio" name="registrations[father_monthly_income]" value="1">  ০ - ৭,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[father_monthly_income]" value="2">  ৮,০০০ - ১৯,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[father_monthly_income]" value="3"> ২০,০০০ - ৩৪,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[father_monthly_income]" value="4"> ৩৫,০০০ - ৪৯,৯৯৯ টাকা<br>
                                    <input type="radio" name="registrations[father_monthly_income]" value="5"> ৫০,০০০ অথবা ততোধিক<br>
                                    
                                 </div>
                              </div>

                              <div class="col-md-10">
                                 <div class="form-group">
                                    <div class="row">
                                       <div class="col-md-5">
                                          <label>৮। পারিবারিক মোট মাসিক আয়:</label>
                                       </div>
                                       <div class="col-md-5">
                                          <input type="text" name="registrations[family_monthly_income]" value="<?=set_value('family_monthly_income')?>" class="form-control" placeholder="">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-10">
                                 <div class="form-group">
                                    <label>৯। সর্বশেষ বাৎসরিক আয়কর রিটার্নে দাখিলকৃত পারিবারিক মোট আয়:</label>
                                       <div class="row">
                                          <div class="col-md-4" style="text-align: center;">
                                              কর বছর
                                             <input type="text" name="registrations[tax_paying_year]" value="<?=set_value('tax_paying_year')?>" class="form-control" placeholder="">
                                          </div>
                                          <div class="col-md-6" style="text-align: center;">
                                                 পারিবারিক আয়
                                             <input type="text" name="registrations[family_total_monthly_income]" value="<?=set_value('family_total_monthly_income')?>" class="form-control" placeholder="">
                                          </div>
                                       </div>
                                 </div>
                              </div>
                        </div>
                  </fieldset>

                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">পার্ট-৪: সংযুক্তিসমূহ</legend>
                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="checkbox" name="registrations[attachment_1]" value="1">  নিয়োগকারী কর্তৃপক্ষের নিকট হতে মাতা-পিতার মাসিক বেতনের প্রত্যয়নপত্র অথবা বেতন বিবৃতির ব্যাংক স্টেটমেন্ট;<br>
                                 <input type="checkbox" name="registrations[attachment_2]" value="1">  পারিবারিক মোট মাসিক আয়;<br>
                                 <input type="checkbox" name="registrations[attachment_3]" value="1">  সর্বশেষ বাৎসরিক আয়কর দাখিলের প্রমাণপত্র।<br>
                               </div>
                           </div>
                        </div>
                  


                     <input type="hidden" name="hide_app_info" value="33333">

                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="submit" name="submit2" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                              </div>
                           </div>
                        </div>

                  </fieldset>
               </div>
         </form>
      </div>
   </div>
</div>