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
          <a href="<?=base_url('index.php/adminpanel/notice/add')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;">নতুন নোটিশ</a> 
        </div>        

          <div class="box-body">
            <div id="infoMessage"><?php echo $message;?></div>            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>
            <table id="examples" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>ক্রম </th>
                  <th>নাম</th>
                  <th>ফাইল</th>
                  <th>স্ট্যাটাস</th>
                  <th>তারিখ</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $sl=0;
                foreach ($notice as $user):
                  $sl++;
              ?>
              <tr>
                <td><?php echo eng2bng($sl); ?></td>
                <td><?php echo htmlspecialchars($user->title,ENT_QUOTES,'UTF-8');?></td>
                <td><a href="<?php echo base_url('assets/notice/') . '/' . $user->file; ?>"><i class="fa fa-download"></i></a></td>
                <td>
                  <?php echo ($user->status==0) ? anchor("index.php/adminpanel/notice/deactivate/".$user->id, 'এক্টিভ' , array('class' => 'btn btn-warning btn-flat btn-xs')) : anchor("index.php/adminpanel/notice/activate/". $user->id, 'ইনএক্টিভ' , array('class' => 'btn btn-danger btn-flat btn-xs'));?>
                </td>
                <td><?=date('d-m-Y', strtotime($user->create_at))?></td>
               
                <td> 
                  <a href="<?=base_url('index.php/adminpanel/notice/delete/'.$user->id);?>" class="btn btn-danger btn-flat btn-xs">ডিলিট</a>
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