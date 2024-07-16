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
        <?php echo form_open_multipart("index.php/adminpanel/sidebar/edit");?>
        <input type="hidden" name="id" value="<?= $result->id ?>">
          <div class="box-body">
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group col-md-6">
                    <label>শিরোনাম</label>
                    <div><?php echo form_error('title'); ?></div>
                    <input type="text" name="title" value="<?= $result->title ?>" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>ক্যাটাগরি</label>
                    <div><?php echo form_error('category'); ?></div>
                    <select name="category" id="category" class="form-control" required>
                      <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                      <?php 
                      $sidecat=$this->db->get('sidecat')->result();
                      foreach($sidecat as $row){?>
                      <option <?php if($result->category==$row->id){echo "selected";} ?> value="<?=$row->id?>"><?=$row->titel?></option>
                      <?php }  ?>
                    </select>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group col-md-12">
                    <label>ফাইল</label>
                    <div><?php echo form_error('userfile'); ?></div>
                    <?php if($result->file!=''){ ?>
                      <a class="btn btn-primary" href="<?=base_url('uploads/'.$result->file)?>" target="_blank">ফাইল দেখুন </a>
                    <?php } ?>
                    <input type="file" name="userfile" class="form-control">
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
