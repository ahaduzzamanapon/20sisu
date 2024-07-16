<section class="content-header">
   <h1> <?=$meta_title; ?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('index.php/adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
      <li class="active"><?=$meta_title; ?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <h3 class="box-title"><?=$meta_title?></h3>
               <a href="<?=base_url('index.php/adminpanel/staff/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> সমস্ত কর্মী</a>          
            </div>        
            <?php echo form_open_multipart("index.php/adminpanel/staff/add");?>
            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group">
                        <label>কর্মীর নাম *</label>
                        <div><?php echo form_error('child_name'); ?></div>
                        <input type="text" class="form-control" name="child_name" value="<?=set_value('child_name')?>">
                     </div>

                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>মোবাইল নম্বর *</label>
                        <div><?php echo form_error('phone'); ?></div>
                        <input type="text" class="form-control" name="phone" value="<?=set_value('phone')?>">
                     </div>
                  </div>
                   <div class="col-md-5">
                     <div class="form-group">
                        <label>পদবি</label>
                        <div><?php echo form_error('designation'); ?></div>
                        <input type="text" class="form-control" name="designation" value="<?=set_value('designation')?>">
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="form-group">
                        <label>ঠিকানা</label>
                        <div><?php echo form_error('address'); ?></div>
                        <input type="text" class="form-control" name="address" value="<?=set_value('address')?>">
                     </div>
                  </div>

                   <div class="col-md-4">
                     <div class="form-group">
                        <label>যোগদান তারিখ</label>
                        <div><?php echo form_error('doj'); ?></div>
                        <input type="date" class="form-control" name="doj" value="<?=set_value('doj')?>">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <label>ছবি আপলোড</label>
                        <div><?php echo form_error('userfile'); ?></div>
                        <input type="file" name="userfile">
                        <p class="help-block">ফাইলের ধরন jpg, png, jpeg, gif এবং সর্বোচ্চ ফাইলের আকার ১ MB।</p>
                     </div>
                  </div>

               </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">    
               <?php //echo form_input($user_id);?>        
               <?php echo form_submit('submit', 'সংরক্ষণ', "class='btn btn-primary pull-right'"); ?>
            </div>
            <?php echo form_close();?>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->