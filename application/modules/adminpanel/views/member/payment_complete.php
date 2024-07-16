<style type="text/css">
   .tg  {border-collapse:collapse;border-spacing:0; width: 100%}
   .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
   .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
   .tg .tg-x5m0{background-color:#c0c0c0;text-align:right;vertical-align:top;font-weight: bold;}
   .tg .tg-kftd{background-color:#efefef;text-align:left;vertical-align:top; }
   .tg .tg-9czc{background-color:#c0c0c0;text-align:right;vertical-align:middle; width: 163px!important; font-weight: bold;}
   .tg .tg-0lax{text-align:left;vertical-align:top;width: 200px;}
   .tg .tg-0pky{background-color:#efefef;text-align:left;vertical-align:top;}
   .tg .tg-9czc{background-color:#c0c0c0;text-align:right;vertical-align:middle; width: 120px; font-weight: bold;}
</style>

<section class="content-header">
   <h1> <?=$meta_title; ?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
      <li class="active"><?=$meta_title; ?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <!-- <h3 class="box-title">সদস্যদের বিস্তারিত</h3> -->
               <!-- <a href="<?=base_url('index.php/adminpanel/member/details_pdf/'.$info->id)?>" target="_blank" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;">PDF Generate</a> -->
               <!-- <a href="<?=base_url('index.php/adminpanel/member/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit </a>           -->
            </div>        
            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>
               <?php //echo "<pre>";print_r($info);exit('ali'); ?>
               <div class="row">
                  <div class="col-md-7">
                     <fieldset>
                        <legend style="color: #0d0d0d;font-weight: 700; padding: 5px; background-color: #3c8dbc;">সদস্যের সাধারণ তথ্য</legend>
                        <table class="table">
                           <tr>
                              <th class="tg-9czc">শিশুর নাম</th>
                              <td class="tg-nluh"><?=$info->child_name?></td>
                              <th class="tg-9czc">মায়ের নাম</th>
                              <td class="tg-0pky"><?=$info->child_mother_name?></td>
                           </tr>
                           <tr>
                              <th class="tg-9czc">বয়স</th>
                              <td class="tg-0pky"><?=eng2bng($info->child_age)?></td>
                              <th class="tg-9czc">পদবী</th>
                              <td class="tg-0pky"><?=$info->child_mother_designation?></td>
                           </tr>
                           <tr>
                              <th class="tg-9czc">ওজন</th>
                              <td class="tg-0pky"><?=eng2bng($info->child_weight)?></td>
                              <th class="tg-9czc">কর্মস্থান</th>
                              <td class="tg-0pky"><?=$info->child_mother_working_place?></td>
                           </tr>
                           <tr>
                              <th class="tg-9czc">উচ্চতা</th>
                              <td class="tg-0pky"><?=eng2bng($info->child_height)?></td>
                              <th class="tg-9czc">মাসিক সেবামূল্য</th>
                              <td class="tg-0pky"><?=eng2bng($info->monthly_fee)?></td>
                           </tr>
                        </table>
                     </fieldset>
                  </div>
               <?php if ($info->payment_status == 0): ?>
                  <?php if ($info->is_paid == 0): ?>
                     <div class="col-md-12 ">
                        
                        <?php 
                        $attributes = array('id' => '');
                        echo form_open_multipart("index.php/adminpanel/member/payment/".$info->id);
                        ?>
                        <div class="row " >
                           <div class="col-md-6" style="margin-top: 25px;margin-bottom: 25px;">
                              <fieldset class="scheduler-border" >
                                 <!-- <legend class="scheduler-border">Child Admission Payment Completion Form</legend> -->
                                 <legend class="scheduler-border">শিশু ভর্তির অর্থপ্রদান ফর্ম</legend>
                                 <div class="row form-row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>রশিদ</label>
                                          <div><?php echo form_error('userfile'); ?></div>
                                          <input type="file" name="userfile" required>
                                          <!-- <p class="help-block">File type jpg, png, jpeg are allowed.</p> -->
                                          
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>তারিখ</label>
                                          <input type="date" name="members[payment_date]" value="<?=set_value('payment_date')?>" class="form-control" placeholder="" autocomplete="off">
                                          
                                       </div>
                                    </div>
                                 </div>
                              </fieldset>
                            </div>
                        </div>
                           <div class="col-md-4" style="text-align:center;">
                              <?php echo form_submit('submit', 'সংরক্ষণ', "class='btn btn-primary pull-right'"); ?>
                           </div>
                     </div>
                  <?php endif ?>

                  <?php if ($info->is_paid == 1): ?>
                     <div class="col-md-12">
                        <?php 
                        $attributes = array('id' => '');
                        echo form_open("index.php/adminpanel/member/payment_complete/".$info->id);
                        ?>

                        <div class="row ">
                           
                           <div class="col-md-6">
                              <div class="form-group">
                                 <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">পেমেন্ট</legend>
                                    <label>পেমেন্ট স্ট্যাটাস <span class='required'>*</span></label><br>
                                    <input type="checkbox" name="payment_status" value="1"> পেমেন্ট সম্পূর্ণ
                                 </fieldset>
                              </div> 
                              <?php echo form_submit('submit', 'সংরক্ষণ করুন', "class='btn btn-primary pull-right'"); ?>
                           </div>
                           <div class="col-md-6 ">
                              <div class="container"> 
                                 <div class="form-group">
                                    <fieldset class="scheduler-border">
                                       <label style="font-size: 25px;color: green ">পেমেন্ট রসিদ</label><br>
                                       <img src="<?php echo base_url('assets/images/member_img/'. $info->payment_slip);?>" />
                                       <!-- <img src="<?php echo base_url('assets/images/member_img/1638252816-dakhila2.jpg');?>" /> -->
                                    </fieldset>
                                 </div>   
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  <?php endif ?>
               <?php endif ?>
               <?php if ($info->payment_status == 1): ?>
                  <div class="col-md-5">
                     <h3 style="font-size: 50px; color:green; text-align:center;font-weight: bold;">ইতোমধ্যে পরিশোধ করেছে</h3>
                  </div>
               <?php endif ?>
               </div>
            </div>
            <!-- /.box-body -->
            <?php echo form_close();?>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->


<script type="text/javascript">

   $().ready(function() {
      // validate signup form on keyup and submit
      $("#jsvalidation").validate({
         rules: {
            is_verified: {required: true}            
         }
      });

   });
</script>


