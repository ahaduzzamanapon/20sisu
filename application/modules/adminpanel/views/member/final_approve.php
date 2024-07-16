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
               <!-- <h3 class="box-title">ডিটেইলস মেম্বার</h3> -->
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

               <div class="row">
                  <div class="col-md-12">
                     <fieldset>
                        <legend style="color: #0d0d0d;font-weight: 700; padding: 5px; background-color: #e7f4ff;">সদস্যের সাধারণ তথ্য</legend>
                        <table class="table table-bordered table-striped table-responsive" >
                          
                           <tr>
                              <td style="font-weight: bold;">শিশুর নাম</td>
                              <td><?=$info->child_name?></td>
                              <td style="font-weight: bold;">বয়সভিত্তিক গ্রুপ</td>
                              <td><?=$info->child_admit_interest== 1 ? ' প্রারম্ভিক পর্যায় (৬ মাস - ১২ মাস)':($info->child_admit_interest == 2 ? 'প্রাক-প্রারম্ভিক পর্যায় (১২ মাস - ৩০মাস)':($info->child_admit_interest == 3 ? 'প্রারম্ভিক পর্যায় (৩০ মাস - ৪৮ মাস)':($info->child_admit_interest == 4 ? 'প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর)': ''))) ;?></td>
                           </tr>
                           <tr>
                              
                              <td style="font-weight: bold;">মায়ের নাম</td>
                              <td><?=$info->child_mother_name?></td>
                              <td style="font-weight: bold;">মায়ের পদবী</td>
                              <td><?=$info->child_mother_designation?></td>
                           </tr>
                           <tr>
                              <td style="font-weight: bold;">মায়ের প্রতিষ্ঠানের নাম: </td>
                              <td><?=$info->child_mother_working_institute?></td>
                              <td style="font-weight: bold;">প্রতিষ্ঠানের ঠিকানা</td>
                              <td><?=$info->child_mother_working_place?></td>
                           </tr>
                           <tr>
                              <td style="font-weight: bold;">মায়ের প্রতিষ্ঠানের ধরণ: </td>
                              <td>
                                 <?=
                                 $info->child_mother_working_institute_type == '1' ? 
                                 'সরকারি': ($info->child_mother_working_institute_type == '2' ? 
                                 'আধা-সরকারি':($info->child_mother_working_institute_type == '3' ?
                                 'স্বায়ত্তশাসিত': ($info->child_mother_working_institute_type == '4' ?
                                 'বেসরকারি':($info->child_mother_working_institute_type == '5' ? 
                                 'অন্যান্য':''))))
                                  ?>
                                     
                                  </td>
                              <td style="font-weight: bold;">মায়ের পেশার ধরণ:</td>
                              <td><?=eng2bng($info->child_mother_work_type == '1' ? 'পূর্ণ কর্মঘন্টার কর্মজীবী' : 'খন্ডকালীন কর্মজীবী')?></td>
                           </tr>
                           <tr>
                              <td style="font-weight: bold;">মাসিক সেবামূল্য</td>
                              <td><?=eng2bng($info->monthly_fee)?>/- টাকা</td>
                              <td style="font-weight: bold;">মায়ের জাতীয় পরিচয়পত্রের নম্বর: </td>
                              <td><?=eng2bng($info->child_mother_national_no)?></td>
                           </tr>
                           <!-- <tr>
                              <td style="font-weight: bold;">ওজন</td>
                              <td><?=$info->child_weight?></td>
                              <td style="font-weight: bold;">উচ্চতা</td>
                              <td><?=$info->child_height?></td>
                              
                           </tr> -->
                        </table>
                     </fieldset>
                  </div>
                  <?php if ($seat_count<=$seat_limit) { ?>
                     <div class="col-md-12">
                        <?php 
                        $attributes = array('id' => 'jsvalidation');
                        echo form_open('index.php/adminpanel/member/verified_approve/'.$info->id.'/'.$info->day_cares_id, $attributes);
                        ?>
                        <fieldset>
                           <legend style="color: #0d0d0d;font-weight: 700; padding: 5px; background-color: #e7f4ff;">কেন্দ্রের সাধারণ তথ্য ও অনুমোদন</legend>
                           <div class="row row-form">
                              <div class="col-md-6">
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>মোট আসন <span class='required'>*</span></label>
                                       <p><?=eng2bng($seat_limit);?></p>
                                    </div>  
                                 </div>

                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>ফাঁকা আসন <span class='required'>*</span></label>
                                       <p><?=eng2bng($seat_limit-$seat_count);?></p>
                                    </div>  
                                 </div>
                              </div>
                              

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>যাচাইকৃত স্থিতি <span class='required'>*</span></label> <br>
                                    <?php echo form_error('is_verified');?>
                                    <input type="radio" name="is_verified" value="4" id="selectedV" <?=set_value('is_verified')==4?'checked':'checked';?>>&nbsp; অনুমোদন করুন &nbsp; &nbsp; 
                                    <input type="radio" name="is_verified" value="6" <?=set_value('is_verified')==6?'':'';?>>&nbsp; বাতিল করুন
                                 </div>  
                              </div>
                              <div class="col-md-6 text-center">
                                 <?php echo form_submit('submit', 'সংরক্ষণ করুন', "class='btn btn-primary pull-right'"); ?>
                              </div>
                           </div>
                        </fieldset>

                     </div>
                  <?php }else{  ?>
                      <div class="col-md-5">
                         <div class="col-md-6">
                              <div class="form-group">
                                 <label>মোট আসন <span class='required'>*</span></label>
                                 <p><?=eng2bng($seat_limit);?></p>
                              </div>  
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>ফাকা আসন <span class='required'>*</span></label>
                                 <p><?=eng2bng($seat_limit-$seat_count);?></p>
                              </div>  
                           </div>
                         <h3 style="font-size: 30px; color:red; text-align:center;font-weight: bold;">এখন আসন খালি নেই</h3>
                      </div>
                  <?php }?> 

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


