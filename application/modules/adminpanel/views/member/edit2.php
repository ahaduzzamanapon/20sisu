<style type="text/css">
   .tg  {border-collapse:collapse;border-spacing:0; width: 100%}
   .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
   .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
   .tg .tg-x5m0{background-color:#c0c0c0;text-align:right;vertical-align:top;font-weight: bold;}
   .tg .tg-kftd{background-color:#efefef;text-align:left;vertical-align:top; }
   .tg .tg-9czc{background-color:#dfdada;text-align:right;vertical-align:middle; width: 163px!important; font-weight: bold;}
   .tg .tg-0lax{text-align:left;vertical-align:top;width: 200px;}
   .tg .tg-0pky{background-color:#efefef;text-align:left;vertical-align:top;}
   .tg .tg-9czc{background-color:#dfdada;text-align:right;vertical-align:middle; width: 120px; font-weight: bold;}
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
               <h3 class="box-title">সদস্যদের বিস্তারিত</h3>
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
                  <div class="col-md-7">
                     <table class="tg">
                        <!--  <caption style="color: #ffffff;font-weight: 700; background-color: #10192d;padding: 5px;">MY PROFILE</caption> -->
                        <caption style="color: #10192d;font-weight: 700; background-color: #a69f9f;padding: 5px;">সদস্যদের তথ্য</caption>
               
                        <tr>
                           <td class="tg-9czc">শিশুর নাম</td>
                           <td class="tg-0pky"><?=$info->child_name?></td>
                           <td class="tg-9czc">মায়ের নাম</td>
                           <td class="tg-0pky"><?=$info->child_mother_name?></td>
                        </tr>
                        <tr>
                           <td class="tg-9czc">বয়স</td>
                           <td class="tg-0pky"><?=eng2bng($info->child_age)?></td>
                           <td class="tg-9czc">পদবি</td>
                           <td class="tg-0pky"><?=$info->child_mother_designation?></td>
                        </tr>
                        <tr>
                           <td class="tg-9czc">ওজন</td>
                           <td class="tg-0pky"><?=eng2bng($info->child_weight)?></td>
                           <td class="tg-9czc">কর্মস্থল</td>
                           <td class="tg-0pky"><?=$info->child_mother_working_place?></td>
                        </tr>
                        <tr>
                           <td class="tg-9czc">উচ্চতা</td>
                           <td class="tg-0pky"><?=eng2bng($info->child_height)?> মিটার</td>
                           <td class="tg-9czc">মাসিক ফি</td>
                           <td class="tg-0pky"><?=eng2bng($info->monthly_fee)?></td>
                        </tr>
                     </table>
                  </div>

                  <div class="col-md-5">
                     <?php 
                     $attributes = array('id' => 'jsvalidation');
                     echo form_open("index.php/adminpanel/member/edit2/".$info->id);
                     ?>

                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মেশিন আইডি <span class='required'>*</span></label>
                              <input type="number" name="machine_id" id="machine_id" value="<?=set_value('machine_id',$info->machine_id)?>" class="form-control" required>
                           </div>  
                        </div>

                        <?php /*
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member Serial No <span class='required'>*</span></label>
                              <input type="number" name="member_no" id="member_no" value="<?=set_value('member_no')?>" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>Verified Status <span class='required'>*</span></label> <br>
                              <?php echo form_error('is_verified');?>
                              <input type="radio" name="is_verified" value="1" id="selectedV" <?=set_value('is_verified')==1?'checked':'checked';?>> Approve
                              <input type="radio" name="is_verified" value="0" <?=set_value('is_verified')==0?'':'';?>> Not Approve
                           </div>  
                        </div>
                        */ ?>
                        <div class="col-md-4">
                           <?php echo form_submit('submit', 'সংরক্ষণ', "class='btn btn-primary pull-right'"); ?>
                        </div>
                     </div>
                  </div>
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


