<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('index.php/adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-7">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?=$meta_title; ?></h3>
        </div>        
        <?php echo form_open_multipart("index.php/adminpanel/manage_user/add");?>
          <div class="box-body">
            <!-- <div id="infoMessage"><?php //echo $message;?></div> -->
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label>নামের প্রথম অংশ</label>
                    <div><?php echo form_error('first_name'); ?></div>
                    <?php echo form_input($first_name);?>
                  </div>

                  <div class="form-group">
                    <label>নামের শেষাংশ</label>
                    <div><?php echo form_error('last_name'); ?></div>
                    <?php echo form_input($last_name);?>
                  </div>

                  <?php if($identity_column!=='email') { ?>
                  <div class="form-group">
                    <label>ইউজারনেম</label>
                    <div><?php echo form_error('identity'); ?></div>
                    <?php echo form_input($identity);?>
                  </div>
                  <?php } ?>

                  <!-- <div class="form-group">
                    <label></label>
                    <div><?php echo form_error('company'); ?></div>
                    <?php echo form_input($company);?>
                  </div> -->

                  <div class="form-group">
                    <label>ইমেইল</label>
                    <div><?php echo form_error('email'); ?></div>
                    <?php echo form_input($email);?>
                  </div>

                  <div class="form-group">
                    <label>মোবাইল নাম্বার</label>
                    <div><?php echo form_error('phone'); ?></div>
                    <?php echo form_input($phone);?>
                  </div>

                  <div class="form-group">
                    <label>পাসওয়ার্ড</label>
                    <div><?php echo form_error('password'); ?></div>
                    <?php echo form_input($password);?>
                  </div>

                  <div class="form-group">
                    <label>কনফার্ম পাসওয়ার্ড</label>
                    <div><?php echo form_error('password_confirm'); ?></div>
                    <?php echo form_input($password_confirm);?>
                  </div>

                  <div class="form-group">
                    <label>দিবাযত্ন কেন্দ্র</label>
                    <?php 
                       $more_attr = 'class="form-control" required';
                       echo form_dropdown('day_care_id', $daycare_list, set_value('day_care_id'), $more_attr);
                       ?>
                  </div>

                   <?php if ($this->ion_auth->is_admin()): ?>
                      <div class="form-group">
                      

                        <h3>ইউজার গ্রুপ</h3>
                        <?php foreach ($groups as $group):?>
                            <div class="checkbox">
                              <?php
                                  $gID=$group['id'];
                                  $checked = null;
                                  $item = null;
                              ?>
                              <label>
                                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['description'],ENT_QUOTES,'UTF-8');?>
                              </label>
                            </div>
                        <?php endforeach?>
                        </div>
                      <?php endif; ?>


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
