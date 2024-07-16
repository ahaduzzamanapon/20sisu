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
          <h3 class="box-title"><?=$meta_title; ?> </h3>
          <a href="<?=base_url('index.php/adminpanel/sidebar/add')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;">নতুন সাইড যুক্ত করুন</a> 
        </div>        

          <div class="box-body">
            <div id="infoMessage"><?php echo $message;?></div>            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('error');?>
                </div>
            <?php endif; ?>
            <table id="examples" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>ক্রম </th>
                  <th>নাম</th>
                  <th>ক্যাটাগরি</th>
                  <th>কন্টেন্ট</th>
                  <th>স্ট্যাটাস</th>
                  <th>তারিখ</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $sl=0;
                foreach ($sidebar as $user):
                  $sl++;
              ?>
              <tr>
                <td><?php echo eng2bng($sl); ?></td>
                <td><?php echo htmlspecialchars($user->title,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->category,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo $user->file?></td>
                <td>
                  <?php echo ($user->status==0) ? anchor("index.php/adminpanel/sidebar/deactivate/".$user->id, 'এক্টিভ' , array('class' => 'btn btn-warning btn-flat btn-xs')) : anchor("index.php/adminpanel/sidebar/activate/". $user->id, 'ইনএক্টিভ' , array('class' => 'btn btn-danger btn-flat btn-xs'));?>
                </td>
                <td><?=date('d-m-Y', strtotime($user->create_at))?></td>
                <td> 
                  <a href="<?=base_url('index.php/adminpanel/sidebar/delete/'.$user->id);?>" class="btn btn-danger btn-flat btn-xs">ডিলিট</a>
                  <a href="<?=base_url('index.php/adminpanel/sidebar/edit/'.$user->id);?>" class="btn btn-info btn-flat btn-xs">সম্পাদনা </a>
                </td>                
              </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">  </div>
      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->

<script type="text/javascript">
   $(document).ready(function() {
      $('#examples').DataTable( {
         "aaSorting": []
      });
   });
</script>