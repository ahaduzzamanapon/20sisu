<style type="text/css">
   fieldset{font-family: 'Kalpurush', sans-serif;}
   h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
</style>

<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>

   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      <ul class="nav nav-tabs">
         <li class="active"><a data-toggle="tab" href="#home"><strong>আমার প্রোফাইল</strong></a></li>
         <?php if($user_info->is_verified == 2) {?>
            <li><a data-toggle="tab" href="#menu1"><strong>আবেদনের তালিকা</strong></a></li>
            <li><a data-toggle="tab" href="#menu2"><strong>শিশুর তালিকা ভুক্তির আবেদন</strong></a></li>
         <?php }?>
      </ul>

      <div class="tab-content">
         <!-- আমার প্রোফাইল info -->
         <div id="home" class="tab-pane fade in active">
            <div  class="col-md-12" style="<?php if(!$edit){ echo 'display: none;'; } ?>  border:0px solid; background-color: #fff;padding-top:30px;">
               <?php echo form_open("index.php/my-profile/edit");?>

               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?> 

               <h4 class="pull-left" style="font-weight: bold">বেসিক তথ্য সংশোধন করুন</h4>
               <div><?php echo validation_errors(); ?></div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের প্রথম অংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="first_name" value="<?=set_value('first_name' , $user_info->first_name)?>" class="form-control" placeholder="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের শেষাংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="last_name" value="<?=set_value('last_name' , $user_info->last_name)?>" class="form-control" placeholder="">
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>মোবাইল নম্বর <span class="required">*</span></label>
                           <input type="text" name="phone" value="<?=set_value('phone' , $user_info->phone)?>" class="form-control" placeholder="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>লিঙ্গ</label><br>
                           <input type="radio" name="gender" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> পুরুষ
                           <input type="radio" name="gender" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মহিলা
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>পাসওয়ার্ড</label>
                           <input type="password" name="password" value="" class="form-control">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>পুনরায় পাসওয়ার্ড</label>
                           <input type="password" name="password_confirm" value="" class="form-control">
                        </div>
                     </div>

                  </div>

                  <div class="row form-row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                        </div>
                     </div>
                  </div>
               </div>
               <input type="hidden" name="hide_update_info" value="11111">
               <?php echo form_close();?>
            </div>
            <div  class="col-md-12" style="<?php if($edit){ echo 'display: none;'; } ?>  border:0px solid; background-color: #fff;padding-top:30px;">
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?> 

               <h4 class="pull-left" style="font-weight: bold">বেসিক তথ্য</h4>
               <a class="btn btn-success pull-right" href="<?=base_url();?>index.php/my-profile/edit" style="font-weight: bold">এডিট করুন</a>

               <table class="table table-bordered basic">
                  <tbody>
                     <tr>
                        <th width="150">নাম</th>
                        <td><?=$user_info->first_name.' '.$user_info->last_name?></td>
                     </tr>
                     <tr>
                        <th>ইমেইল</th>
                        <td><?=$user_info->username?></td>
                     </tr>
                     <tr>
                        <th>ফোন নং</th>
                        <td><?=$user_info->phone?></td>
                     </tr>
                     <tr>
                        <th>লিঙ্গ</th>
                        <td><?=$user_info->gender?></td>
                     </tr>
                  </tbody>
               </table> 
            </div>
            <?php if($user_info->is_verified == 0) {?>
               <div class="col-md-12">
                  <form method="post" action="<?php echo base_url('index.php/my-profile/') ?>" role="form" enctype="multipart/form-data">
                     <h4 style="color: green;">তথ্য দেখার জন্য ১০০ টাকা নিবন্ধন ফি এর রিসিট আপলোড করুন .</h4><div><?php echo form_error('userfile'); ?></div>
                     <span style="color: red;">(৬০০ KB এর কম)</span>
                     <input type="file" name="userfile" >
                     <input type="submit" name="submit" class="btn btn-success pull-right" value="সংরক্ষণ করুন">
                                          
                     <input type="hidden" name="hide_app_info" value="33333">
                  </form>
               </div>
            
            <?php }elseif($user_info->is_verified == 3) {?>
               <div class="col-md-12">
                  <form method="post" action="<?php echo base_url('index.php/my-profile/') ?>" role="form" enctype="multipart/form-data">
                     <h4 style="color: green;">আপনার দয়া তথ্যটি ভুল ছিল নিবন্ধন ফি এর রিসিট পুনরায় আপলোড করুন .</h4><div><?php echo form_error('userfile'); ?></div>
                     <input type="file" name="userfile" >
                     <input type="submit" name="submit" class="btn btn-success pull-right" value="সংরক্ষণ করুন">
                                          
                     <input type="hidden" name="hide_app_info" value="33333">
                  </form>
               </div>
            <?php }elseif($user_info->is_verified == 1) {?>
               <div class="col-md-12 text-center"><h4 style="color: green;">আপনার তথ্য যাচাই এর জন্য অপেক্ষমান রয়েছে</h4></div>
            <?php }else {?>
               <div class="col-md-12">
                  <table class="table table-bordered table-striped table-responsive">
                     <h5 style="font-weight: bold;text-decoration: underline; ">  মতিঝিল শিশু দিবাযত্ন কেন্দ্র</h5>   
                     
                     <tbody style="background-color: #f3f0f0;">
                        <?php 
                        $sl=0;                     
                        // foreach ($seat_count as $row) { 
                           
                           ?>
                           <tr>
                              <th style="background-color: lightblue;">বয়স ভিত্তিক গ্রূপের নাম</th>
                              <th style="background-color: lightblue;">আসন বাকি</th>
                           </tr>
                           <tr>
                              <td>প্রারম্ভিক উদ্দীপনা পর্যায় ( ৪ মাস - ১২ মাস )</td>
                              <td><?php echo 6-$seat_count[1]['total_sec_1'];?></td>
                           </tr>
                           <tr>   
                              <td>প্রাক-প্রারম্ভিক শিখন পর্যায় ( ১২ মাস - ৩০ মাস)</td>
                              <td><?php echo 12-$seat_count[1]['total_sec_2'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রারম্ভিক শিখন পর্যায় (৩০ মাস – ৪৮ মাস)</td>
                              <td><?php echo 18-$seat_count[1]['total_sec_3'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রাক-প্রাথমিক স্কুল পর্যায় ( ৪ বছর - ৬ বছর )</td>
                              <td><?php echo 24-$seat_count[1]['total_sec_4'];?></td> 
                           </tr>
                          
                     </tbody>
                  </table>
                  <table class="table table-bordered table-striped table-responsive">
                     <h5 style="font-weight: bold;text-decoration: underline; "> ভূমি ভবন শিশু দিবাযত্ন কেন্দ্র</h5>   
                     
                     <tbody style="background-color: #f3f0f0;">
                        <?php 
                        $sl=0;                     
                        // foreach ($seat_count as $row) { 
                           
                           ?>
                           <tr>
                              <th style="background-color: lightblue;">বয়স ভিত্তিক গ্রূপের নাম</th>
                              <th style="background-color: lightblue;">আসন বাকি</th>
                           </tr>
                           <tr>
                              <td>প্রারম্ভিক উদ্দীপনা পর্যায় ( ৪ মাস - ১২ মাস )</td>
                              <td><?php echo 6-$seat_count[2]['total_sec_1'];?></td>
                           </tr>
                           <tr>   
                              <td>প্রাক-প্রারম্ভিক শিখন পর্যায় ( ১২ মাস - ৩০ মাস)</td>
                              <td><?php echo 12-$seat_count[2]['total_sec_2'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রারম্ভিক শিখন পর্যায় (৩০ মাস – ৪৮ মাস)</td>
                              <td><?php echo 18-$seat_count[2]['total_sec_3'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রাক-প্রাথমিক স্কুল পর্যায় ( ৪ বছর - ৬ বছর )</td>
                              <td><?php echo 24-$seat_count[2]['total_sec_4'];?></td> 
                           </tr>
                          
                     </tbody>
                  </table>
                  <table class="table table-bordered table-striped table-responsive">
                     <h5 style="font-weight: bold;text-decoration: underline; "> বাংলাদেশ সরকারি কর্ম কমিশন</h5>   
                     
                     <tbody style="background-color: #f3f0f0;">
                        <?php 
                        $sl=0;                     
                        // foreach ($seat_count as $row) { 
                           
                           ?>
                           <tr>
                              <th style="background-color: lightblue;">বয়স ভিত্তিক গ্রূপের নাম</th>
                              <th style="background-color: lightblue;">আসন বাকি</th>
                           </tr>
                           <tr>
                              <td>প্রারম্ভিক উদ্দীপনা পর্যায় ( ৪ মাস - ১২ মাস )</td>
                              <td><?php echo 6-$seat_count[11]['total_sec_1'];?></td>
                           </tr>
                           <tr>   
                              <td>প্রাক-প্রারম্ভিক শিখন পর্যায় ( ১২ মাস - ৩০ মাস)</td>
                              <td><?php echo 12-$seat_count[11]['total_sec_2'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রারম্ভিক শিখন পর্যায় (৩০ মাস – ৪৮ মাস)</td>
                              <td><?php echo 18-$seat_count[11]['total_sec_3'];?></td>
                           </tr>   
                           <tr>   
                              <td>প্রাক-প্রাথমিক স্কুল পর্যায় ( ৪ বছর - ৬ বছর )</td>
                              <td><?php echo 24-$seat_count[11]['total_sec_4'];?></td> 
                           </tr>
                          
                     </tbody>
                  </table>
               </div>
            <?php }?>


            
         </div>
         <!-- /home -->


         <!-- আবেদনের তালিকা info -->
         <div id="menu1" class="tab-pane fade">
            <div class="col-md-12" style="background-color: #fff;padding-top:30px;">
               <div style="float: left;">
                  <h4 style="font-weight: bold;" class="pull-left">আবেদনের তালিকা</h4>
               </div>
               <div style="float: right;">
                  <span class="btn btn-success btn-xs list_view" style="display: none;">তালিকা দেখুন</span>
               </div>

               <style type="text/css">
               .tg  {border-collapse:collapse;border-spacing:0; clear: both; width: 100%;}
               .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
               .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
               .tg .tg-dath{background-color:#a9e9f9;border-color:#9698ed;text-align:right;vertical-align:middle; width: 350px;}
               .tg .tg-wra3{border-color:#9698ed;text-align:left;vertical-align:middle}
               </style>
               
               <div class="appview"></div>

               <table class="table table-bordered applications-list" >
                  <thead>
                     <tr>
                        <th>ক্রম </th>
                        <th>তারিখ</th>
                        <th style="text-align: center;">ডে কেয়ার সেন্টারের নাম</th>
                        <th style="text-align: center;">শিশুর নাম</th>
                        <th width="110">অ্যাকশন</th>
                     </tr>
                  </thead>
                  <tbody>  
                  <?php $sl=0;   
                  if(isset($results) && !empty($results)){
                     foreach ($results as $row) {  $sl++;    ?>
                        <tr>
                           <td><?=$sl?></td>
                           <td><?=@date('Y-m-d', strtotime($row->created))?></td>
                           <td><?=@$this->Site_model->get_daycare_name($row->day_cares_id)?></td>
                           <td><?=@$row->child_name?></td>
                           <td> 
                              <?php if($row->status==4&&$row->is_applied==0){ ?>
                                 <a href="<?=base_url('index.php/new-application/'.$row->day_cares_id.'/'.$row->id)?>" class="btn btn-success btn-xs">ভর্তির আবেদন করুন</a>
                             <?php }elseif ($row->status==0) {?>
                              <p align="center" style="font-size: 12px;color: blue ">আবেদনটি অপেক্ষমান রয়েছে</p>
                             <?php }elseif ($row->status==3) {?>
                              <p align="center" style="font-size: 12px;color: midnightblue; ">আবেদনটি চুড়ান্ত অনুমোদনের জন্য অপেক্ষমান রয়েছে</p>
                             <?php }elseif ($row->status==5) {?>
                              <p align="center" style="font-size: 12px;color: red;font-weight: bold; ">আবেদনটি বাতিল করা হয়েছে</p>
                             <?php }elseif ($row->is_applied==1 && $row->subsidies==0 && $row->is_paid==0) {?>
                              <a href="<?=base_url('index.php/subsidary-application/'.$row->day_cares_id.'/'.$row->id)?>" class="btn btn-success btn-xs">ভর্তুকির আবেদন করুন  </a><p style="text-align:center;">অথবা</p>
                              <a href="<?=base_url('index.php/payment/'.$row->day_cares_id.'/'.$row->id)?>" class="btn btn-success btn-xs">পেমেন্ট সম্পূর্ণ করুন </a>
                              <?php }elseif ($row->subsidies==1 && $row->subsidies_approved==0) {?>
                              <p align="center" style="font-size: 12px;color: green ">ভর্তুকির জন্য আবেদন জমা দেওয়া হয়েছে । অনুমোদনের জন্য অপেক্ষা করুন</p>
                              <?php }elseif ($row->is_applied==1 && $row->subsidies_approved==1 && $row->is_paid==0) {?>
                              <a href="<?=base_url('index.php/payment/'.$row->day_cares_id.'/'.$row->id)?>" class="btn btn-success btn-xs">পেমেন্ট সম্পূর্ণ করুন </a>
                             <?php }elseif ($row->is_applied==1 && $row->pament_received==0) {?>
                              <p align="center" style="font-size: 12px;color: green ">পেমেন্ট জমা দেওয়া হয়েছে এবং অনুমোদনের জন্য অপেক্ষা করুন</p>
                             <?php }elseif ($row->is_applied==1) {?>
                              <p align="center" style="font-size: 12px;color: green ">ইতিমধ্যে ভর্তি সম্পূর্ণ হয়েছে</p>
                             <?php }else {?>
                              <p align="center" style="font-size: 12px;color: darkgray ">পরিসমাপ্তি</p>
                             <?php }?>
                           </td>
                        </tr>
                     <?php }}else{ ?>
                        <tr>
                           <td colspan="5" style="text-align: center;">
                              কোন আবেদন পাওয়া যাইনি
                           </td>
                        </tr>   
                     <?php } ?>   
                  </tbody>
               </table>
            </div>
         </div> <!-- /menu1 -->            


         <style>
            /* ---------------------------------------------------------------
            *
            *  # Steps wizard
            *
            *  An all-in-one wizard plugin that is extremely flexible, compact and feature-rich
            *
            * --------------------------------------------------------- */
            /*=================================
                      Registration
            ===================================*/


            .form-wizard {
              color: #4b4444 !important;
              padding: 15px 0px;
            }
            label {
              margin-bottom: .1rem !important;
            }


            .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
              background-color: rgba(23,36,49,1);
              color: #ffffff;
              display: inline-block;
              min-width: 100px;
              min-width: 95px;
              padding: 8px;
              margin-top: 20px;
              text-align: center;
            }
            .forgrt-wizard {
              width: 40%;
              margin-top: 0px !important;
            }
            .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
              color: #ffffff;
              opacity: 0.6;
              text-decoration: none;
            }
            .form-wizard .wizard-fieldset {
              display: none;
            }

            .form-wizard .wizard-fieldset.show {
              display: block;
            }
            .form-wizard .wizard-form-error {
              display: none;
              background-color: #d70b0b;
              position: absolute;
              left: 0;
              right: 0;
              bottom: 0;
              height: 2px;
              width: 100%;
            }
            .form-wizard .form-wizard-previous-btn {
                background-color: rgba(23,36,49,1);
            }

            .form-wizard .form-control:focus {
              box-shadow: none;
            }

            .form-wizard .form-group {
              position: relative;
              /*margin: 25px 0 0 0;*/
            }

            .form-wizard .form-wizard-steps li {
              width: 20%;
              float: left;
              position: relative;
              left: 7%;
            }
            .form-wizard .form-wizard-steps li::after {
              background-color: #f3f3f3;
              content: "";
              height: 5px;
              left: 0;
              position: absolute;
              right: 0;
              top: 50%;
              transform: translateY(-50%);
              width: 100%;
              border-bottom: 1px solid #dddddd;
              border-top: 1px solid #dddddd;
            }
            .form-wizard .form-wizard-steps li span {
              background-color: #dddddd;
              border-radius: 50%;
              display: inline-block;
              height: 35px;
              line-height: 35px;
              position: relative;
              text-align: center;
              width: 40px;
              z-index: 1;
            }
            .form-wizard .form-wizard-steps li:last-child::after {
              /*width: 50%;*/
              width: 0%;
            }
            .form-wizard .form-wizard-steps li:last-child {
                width: 0% !important;
                float: left;
                
            } 

            .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
              background-color: rgba(23,36,49,1);
              color: #ffffff;
            }
            .form-wizard .form-wizard-steps li.activated span, .form-wizard .form-wizard-steps li.activated span {
              background: #31d200;
              color: #ffffff;
            }
            .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
              background-color: rgba(23,36,49,1);
              /*left: 50%;
              width: 50%;*/
            }
            .form-wizard .form-wizard-steps li.activated::after{
              width: 100%;
              border-color: #31d200;
              background: #31d200;
            }
            .form-wizard .form-wizard-steps li:last-child::after {
              left: 0;
            }
            .form-wizard .wizard-password-eye {
              position: absolute;
              right: 32px;
              top: 50%;
              transform: translateY(-50%);
              cursor: pointer;
            }

         </style>    



         <!-- শিশু তালিকা ভুক্তির আবেদন info -->
         <div id="menu2" class="tab-pane fade main">
            <div class="form-wizard">
               <form method="post" action="<?php echo base_url('index.php/my-profile/') ?>" role="form" enctype="multipart/form-data"> 

                   <ul class="list-unstyled form-wizard-steps clearfix">
                       <li class="active"><span>পার্ট ১</span></li>
                       <li><span>পার্ট ২</span></li>
                       <li><span>পার্ট ৩</span></li>
                       <li><span>পার্ট ৪</span></li>
                       <li><span>পার্ট ৫</span></li>
                   </ul>

                  <fieldset class="wizard-fieldset scheduler-border show">
                     <legend class="scheduler-border">পার্ট ১ সাধারণ তথ্য</legend>
                     <div class="row form-row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="wizard-form-label">আবেদনকারীর নাম</label>
                              <input type="text" name="registrations[applicant_name]" value="<?=set_value('applicant_name')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>২. আবেদনকারীর সাথে শিশুর সম্পর্ক </label><br>
                              <input type="radio" name="registrations[applicant_relation]" value="Mother" <?=set_value('applicant_relation')=='Mother'?'checked':'checked';?>> মা 
                              <input type="radio" name="registrations[applicant_relation]" value="Father" <?=set_value('applicant_relation')=='Father'?'':'';?>> বাবা
                              <input type="radio" name="registrations[applicant_relation]" value="Guardian" <?=set_value('applicant_relation')=='Guardian'?'':'';?>> অন্যান্য
                           </div>
                        </div>
                     </div> 

                     <h5>৩. মাতার তথ্য</h5>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">নাম</label>
                              <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">জন্ম তারিখ</label>
                              <input type="date" name="registrations[child_mother_dob]" value="<?=set_value('child_mother_dob')?>" class="form-control wizard-required" placeholder="" autocomplete="off">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>  

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">জাতীয় পরিচয়পত্রের নম্বর</label>
                              <input type="text" name="registrations[child_mother_national_no]" value="<?=set_value('child_mother_national_no')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">ই-মেইল আইডি</label>
                              <input type="text" name="registrations[child_mother_email]" value="<?=set_value('child_mother_email')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">বাসার ফোন নম্বর(যদি থাকে)</label>
                              <input type="text" name="registrations[child_mother_parmanent_ph_no]" value="<?=set_value('child_mother_parmanent_ph_no')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">মোবাইল নম্বর</label>
                              <input type="text" name="registrations[child_mother_ph_no]" value="<?=set_value('child_mother_ph_no')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="wizard-form-label">বাসার ঠিকানা</label>
                              <input type="text" name="registrations[child_mother_permanent_address]" value="<?=set_value('child_mother_permanent_address')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                     </div> 

                     <h5>৪. পিতার তথ্য</h5>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">নাম</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">জন্ম তারিখ</label>
                              <input type="date" name="registrations[child_father_dob]" value="<?=set_value('child_father_dob')?>" class="form-control wizard-required" placeholder="" autocomplete="off">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>  

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">জাতীয় পরিচয়পত্রের নম্বর</label>
                              <input type="text" name="registrations[child_father_national_no]" value="<?=set_value('child_father_national_no')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">ই-মেইল আইডি</label>
                              <input type="text" name="registrations[child_father_email]" value="<?=set_value('child_father_email')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">বাসার ফোন নম্বর(যদি থাকে)</label>
                              <input type="text" name="registrations[child_father_permanent_address]" value="<?=set_value('child_father_permanent_address')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="wizard-form-label">মোবাইল নম্বর</label>
                              <input type="text" name="registrations[child_father_ph_no]" value="<?=set_value('child_father_ph_no')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="wizard-form-label">বাসার ঠিকানা</label>
                              <input type="text" name="registrations[child_father_permanent_address]" value="<?=set_value('child_father_permanent_address')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                     </div> 

                     <h5>৫. মাতা পিতার অবর্তমানে অভিভাবকের তথ্য</h5>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>নাম</label>
                              <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>জন্ম তারিখ</label>
                              <input type="date" name="registrations[child_parents_dob]" value="<?=set_value('child_parents_dob')?>" class="form-control wizard-required" placeholder="" autocomplete="off">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>  

                        <div class="col-md-6">
                           <div class="form-group">
                                 <label>জাতীয় পরিচয়পত্রের নম্বর</label>
                                 <input type="text" name="registrations[child_parents_national_no]" value="<?=set_value('child_parents_national_no')?>" class="form-control wizard-required" placeholder="">
                                 <div class="wizard-form-error"></div>
                              </div>
                        </div>
                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মোবাইল নম্বর</label>
                              <input type="text" name="registrations[child_parents_ph_no]" value="<?=set_value('child_parents_ph_no')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                                 <label>বাসার ঠিকানা</label>
                                 <input type="text" name="registrations[child_parents_present_address]" value="<?=set_value('child_parents_present_address')?>" class="form-control wizard-required" placeholder="">
                                 <div class="wizard-form-error"></div>
                              </div>
                        </div>
                     </div>

                     <div class="form-group clearfix">
                        <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
                     </div>
                  </fieldset>

                  <fieldset class="wizard-fieldset scheduler-border">
                     <legend class="scheduler-border">পার্ট ২ মাতা-পিতার পেশা সংক্রান্ত তথ্য (অবশ্যই পূরণীয়)</legend>
                     <h5>৬. মাতার তথ্য</h5>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পেশা</label>
                              <input type="text" name="registrations[child_mother_work_name]" value="<?=set_value('child_mother_work_name')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পেশার ধরণঃ</label><br>
                              <input checked="true" type="radio" name="registrations[child_mother_work_type]" value="1"> পূর্ণ কর্মঘন্টার কর্মজীবী
                              <input type="radio" name="registrations[child_mother_work_type]" value="1"> খন্ডকালীন কর্মজীবী
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পদবী</label>
                              <input type="text" name="registrations[child_mother_designation]" value="<?=set_value('child_mother_designation')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের নাম</label>
                              <input type="text" name="registrations[child_mother_working_institute]" value="<?=set_value('child_mother_working_institute')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের ফোন নম্বর(যদি থাকে)</label>
                              <input type="text" name="registrations[child_mother_work_ph_no]" value="<?=set_value('child_mother_work_ph_no')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>প্রতিষ্ঠান ঠিকানা</label>
                              <input type="text" name="registrations[child_mother_working_place]" value="<?=set_value('child_mother_working_place')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>কর্মস্থল কর্তৃপক্ষ নাম ও পদবী</label>
                              <input type="text" name="registrations[child_mother_work_md]" value="<?=set_value('child_mother_work_md')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>কর্মস্থল নিয়ন্ত্রণকারী কর্তৃপক্ষের ঠিকানা</label>
                              <input type="text" name="registrations[child_mother_work_md_add]" value="<?=set_value('child_mother_work_md_add')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের ধরণঃ</label>
                              <input checked="true" type="radio" name="registrations[child_mother_working_institute_type]" value="1"> সরকারি
                              <input type="radio" name="registrations[child_mother_working_institute_type]" value="2"> আধা-সরকারি
                              <input type="radio" name="registrations[child_mother_working_institute_type]" value="3"> স্বায়ত্তশাসিত
                              <input type="radio" name="registrations[child_mother_working_institute_type]" value="4"> বেসরকারি
                              <input type="radio" name="registrations[child_mother_working_institute_type]" value="5"> অন্যান্য
                           </div>
                        </div>
                     </div> 
                     <h5>৭. পিতার তথ্য</h5>
                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পেশা</label>
                              <input type="text" name="registrations[child_father_work_name]" value="<?=set_value('child_father_work_name')?>" class="form-control wizard-required wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পেশার ধরণঃ</label><br>
                              <input checked="true" type="radio" name="registrations[child_father_work_type]" value="1"> পূর্ণ কর্মঘন্টার কর্মজীবী
                              <input type="radio" name="registrations[child_father_work_type]" value="1"> খন্ডকালীন কর্মজীবী
                            </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পদবী</label>
                              <input type="text" name="registrations[child_father_designation]" value="<?=set_value('child_father_designation')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের নাম</label>
                              <input type="text" name="registrations[child_father_working_institute]" value="<?=set_value('child_father_working_institute')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের ফোন নম্বর(যদি থাকে)</label>
                              <input type="text" name="registrations[child_father_work_ph_no]" value="<?=set_value('child_father_work_ph_no')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>কর্মস্থল কর্তৃপক্ষ নাম ও পদবী</label>
                              <input type="text" name="registrations[child_father_work_md]" value="<?=set_value('child_father_work_md')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>কর্মস্থল নিয়ন্ত্রণকারী কর্তৃপক্ষের ঠিকানা</label>
                              <input type="text" name="registrations[child_father_work_md_add]" value="<?=set_value('child_father_work_md_add')?>" class="form-control wizard-required" placeholder="">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>প্রতিষ্ঠানের ধরণঃ</label>
                              <input checked="true" type="radio" name="registrations[child_father_working_institute_type]" value="1"> সরকারি
                              <input type="radio" name="registrations[child_father_working_institute_type]" value="4"> আধা-সরকারি
                              <input type="radio" name="registrations[child_father_working_institute_type]" value="5"> স্বায়ত্তশাসিত
                              <input type="radio" name="registrations[child_father_working_institute_type]" value="2"> বেসরকারি
                              <input type="radio" name="registrations[child_father_working_institute_type]" value="3">অন্যান্য
                           </div>
                        </div>
                     </div>

                     <div class="form-group clearfix">
                        <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
                        <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
                     </div>
                  </fieldset>  
                   
                  <fieldset class="wizard-fieldset scheduler-border">
                     <legend class="scheduler-border">পার্ট ৩ শিশু তালিকাভুক্তির তথ্য</legend>
                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৮. আপনি কোন বয়স গ্রুপে শিশুকে ভর্তি করতে আগ্রহী?</label><br>
                              <input checked="true" type="radio" name="registrations[child_admit_interest]" value="1"> প্রারম্ভিক উদ্দীপনা পর্যায় (৪ মাস - ১২ মাস)<br>
                              <input type="radio" name="registrations[child_admit_interest]" value="2"> প্রাক-প্রারম্ভিক শিখন পর্যায় (১২ মাস - ৩০মাস)<br>
                              <input type="radio" name="registrations[child_admit_interest]" value="3"> প্রারম্ভিক শিখন পর্যায় (৩০ মাস - ৪৮ মাস)<br>
                              <input type="radio" name="registrations[child_admit_interest]" value="4"> প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর)<br>
                           </div>
                        </div>

                        <div class="col-md-8">
                           <label>৯. এই শিশুর জন্য আপনার কখন শিশু দিবাযত্ন কেন্দ্র প্রয়োজন?</label>
                           <div class="form-group">
                              <input type="date" class="wizard-required form-control" type="text" name="registrations[child_doj]" value="<?=set_value('child_doj')?>" placeholder="" autocomplete="off">
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                       
                        <div class="col-md-6">
                           <div class="form-group">
                              <?php echo form_error('day_cares_id'); ?>
                              <label>১০. নিম্নের কোন কেন্দ্রে শিশু ভর্তি করতে চান?</label>
                              <label>ডে কেয়ার সেন্টার নাম</label>
                              <?php 
                              $more_attr = 'class="form-control wizard-required" required';
                              echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                              ?>
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>               
                     </div>


                     <div class="form-group clearfix">
                        <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
                        <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
                     </div>
                  </fieldset> 


                  <fieldset class="wizard-fieldset scheduler-border">
                     <legend class="scheduler-border"> পার্ট ৪ শিশুর তথ্য</legend>
                     <h5>১১. শিশু</h5>
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>নাম</label>
                              <input type="text" name="members[child_name]" value="<?=set_value('child_name')?>" class="form-control wizard-required" placeholder="" required>
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর জন্ম তারিখ</label>
                              <input type="date" name="members[child_dob]" value="<?=set_value('child_dob')?>" class="form-control wizard-required" placeholder="" autocomplete="off" required>
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>  

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>জন্ম নিবন্ধন নম্বর</label>
                              <input type="text" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no')?>" class="form-control wizard-required" placeholder="" required>
                              <div class="wizard-form-error"></div>
                           </div>
                        </div>
                     </div> 

                     <div class="form-group clearfix">
                        <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
                        <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
                     </div>
                  </fieldset> 

                  <fieldset class="wizard-fieldset scheduler-border">
                     <legend class="scheduler-border">পার্ট ৫ প্রয়োজনীয় সংযুক্তিসমূহ</legend>
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input type="checkbox" name="registrations[attachment_4]" value="1">  আবেদনকারীর (মাতা-পিতা বা বিকল্প অভিভাবকের) পাসপোর্ট সাইজের ছবি.<div><?php echo form_error('userfile'); ?></div>
                              <input type="file" name="userfile" ><br>
                              <input type="checkbox" name="registrations[attachment_5]" value="1">  মাতা-পিতা ও বিকল্প অভিভাবকের জাতীয় পরিচয়পত্রের কপি.<div><?php echo form_error('userfile1'); ?></div>
                              <input type="file" name="userfile1" ><br>
                              <input type="checkbox" name="registrations[attachment_6]" value="1">   শিশুর জন্মসনদের কপি.<div><?php echo form_error('userfile2'); ?></div>
                              <input type="file" name="userfile2" ><br>
                              <input type="checkbox" name="registrations[attachment_7]" value="1">   মাতা ও পিতার চাকুরী নিয়ন্ত্রণকারী কর্তৃপক্ষ কর্তৃক প্রত্যয়নপত্র.<div><?php echo form_error('userfile3'); ?></div>
                              <input type="file" name="userfile3" ><br>
                           </div>
                        </div>
                     </div>
                        
                     <input type="hidden" name="hide_app_info" value="22222">

                     <div class="form-group clearfix">
                        <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
                        <input type="submit" name="submit" class="form-wizard-submit float-right" value="সংরক্ষণ করুন">
                     </div>
                  </fieldset> 
               </form>
            </div>
         </div> <!-- /part2 -->                     
      </div>
   </div>
</div>

<script>
   jQuery(document).ready(function() {
      // click on next button
      jQuery('.form-wizard-next-btn').click(function() {
         var parentFieldset = jQuery(this).parents('.wizard-fieldset');
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         var next = jQuery(this);
         var nextWizardStep = true;
         parentFieldset.find('.wizard-required').each(function(){
            var thisValue = jQuery(this).val();

            if( thisValue == "") {
               jQuery(this).siblings(".wizard-form-error").slideDown();
               nextWizardStep = false;
            }
            else {
               jQuery(this).siblings(".wizard-form-error").slideUp();
            }
         });
         if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
               if(jQuery(this).hasClass('show')){
                  var formAtrr = jQuery(this).attr('data-tab-content');
                  jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                     if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                     }else{
                        jQuery(this).removeClass('active');
                     }
                  });
               }
            });
         }
      });
      //click on previous button
      jQuery('.form-wizard-previous-btn').click(function() {
         var counter = parseInt(jQuery(".wizard-counter").text());;
         var prev =jQuery(this);
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         prev.parents('.wizard-fieldset').removeClass("show","400");
         prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
         currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
         jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
               var formAtrr = jQuery(this).attr('data-tab-content');
               jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                  if(jQuery(this).attr('data-attr') == formAtrr){
                     jQuery(this).addClass('active');
                     var innerWidth = jQuery(this).innerWidth();
                     var position = jQuery(this).position();
                     jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                  }else{
                     jQuery(this).removeClass('active');
                  }
               });
            }
         });
      });
      //click on form submit button
      jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
         var parentFieldset = jQuery(this).parents('.wizard-fieldset');
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
               jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
               jQuery(this).siblings(".wizard-form-error").slideUp();
            }
         });
      });
      // focus on input field check empty or not
      jQuery(".form-control").on('focus', function(){
         var tmpThis = jQuery(this).val();
         if(tmpThis == '' ) {
            jQuery(this).parent().addClass("focus-input");
         }
         else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
         }
      }).on('blur', function(){
         var tmpThis = jQuery(this).val();
         if(tmpThis == '' ) {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
         }
         else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");
         }
      });
   });
</script>  

  <script>
       function func_details(id){
          // alert(id);

          $.ajax({
             type: "GET",
             url: hostname+'site/app_view/'+id,
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
  

