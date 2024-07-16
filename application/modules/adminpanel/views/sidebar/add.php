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
        <?php echo form_open_multipart("index.php/adminpanel/sidebar/add");?>
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
                    <input type="text" name="title" value="<?=set_value('title')?>" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>ক্যাটাগরি</label>
                    <div><?php echo form_error('category'); ?></div>
                    <select name="category" id="category" class="form-control" required>
                      <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                      <?php 
                      $sidecat=$this->db->get('sidecat')->result();
                      foreach($sidecat as $row){?>
                      <option value="<?=$row->id?>"><?=$row->titel?></option>
                     <?php }  ?>
                    </select>
                   
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group col-md-12">
                    <label>কন্টেন্ট</label>
                    <div><?php echo form_error('userfile'); ?></div>
                    <textarea id="editor2" name="userfile" class="form-control" width="100%" rows="5"></textarea>
                    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
                    <script>
                        $(document).ready(function() {
                            CKEDITOR.replace( 'editor2' );
                        });
                        setInterval(() => {
                            $('.cke_notification_close').click();
                            $('.cke_notification_warning').remove();
                        }, 300);
                    </script>
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
