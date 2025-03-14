<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <!-- <h3 class="box-title"> <?=$user->username;?> </h3> -->
        </div>        
        <?php echo form_open('index.php/'.uri_string());?>
        <div id="infoMessage"><?php echo $message;?></div>

        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6">
                <div class="form-group">
                    <label><?php echo 'নামের প্রথম অংশ';?></label>
                    <?php echo form_input($first_name);?>
                </div>

                <div class="form-group">
                    <label><?php echo 'নামের শেষাংশ';?></label>
                    <?php echo form_input($last_name);?>
                </div>

                <div class="form-group">
                    <label>মোবাইল নম্বর</label>
                    <?php echo form_input($phone);?>
                </div>

                <!-- <div class="form-group">
                    <label><?php echo lang('edit_user_company_label', 'company');?></label>
                    <?php echo form_input($company);?>
                </div>     -->

                <div class="form-group">
                    <label><?php echo 'পাসওয়ার্ড';?></label>
                    <?php echo form_input($password);?>
                </div>

                <div class="form-group">
                    <label><?php echo 'কন্ফার্ম পাসওয়ার্ড';?></label>
                    <?php echo form_input($password_confirm);?>
                </div>

                <?php if ($this->ion_auth->is_admin()): ?>
                  <div class="form-group">
                  

                    <h3><?php echo 'গ্রুপের সদস্য';?></h3>
                    <?php foreach ($groups as $group):?>
                        <div class="checkbox">
                          <?php
                              $gID=$group['id'];
                              $checked = null;
                              $item = null;
                              foreach($currentGroups as $grp) {
                                  if ($gID == $grp->id) {
                                      $checked= ' checked="checked"';
                                  break;
                                  }
                              }
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
        </div>

        <div class="box-footer">    
          <?php echo form_hidden('id', $user->id);?>
          <?php echo form_hidden($csrf); ?>
  
          <?php echo form_submit('submit', 'সংরক্ষণ', "class='btn btn-primary pull-right'"); ?>
        </div>
        <?php echo form_close();?>

      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->
           

