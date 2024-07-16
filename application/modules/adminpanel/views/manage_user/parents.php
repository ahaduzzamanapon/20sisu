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
         
          <!-- <a href="<?=base_url('admin/manage_user/create_group')?>" class="btn btn-info btn-xs pull-right"> Create Group</a>  -->
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
                  <th>নামের প্রথম অংশ</th>
                  <th>নামের শেষাংশ</th>
                  <th>ইউজারনেম</th>
                  <th> ইমেইল</th>
                  <th>স্ট্যাটাস</th>
                  <th>গ্রুপস</th>
                  <th>অ্যাকশন</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $sl=0;
                foreach ($users as $user):
                  $sl++;
              ?>
              <tr>
                <td><?php echo eng2bng($sl); ?></td>
                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                <td>
                  <?php echo ($user->active) ? anchor("index.php/adminpanel/manage_user/deactivate/".$user->id, 'এক্টিভ' , array('class' => 'btn btn-warning btn-flat btn-xs')) : anchor("index.php/adminpanel/manage_user/activate/". $user->id, 'ইনএক্টিভ' , array('class' => 'btn btn-danger btn-flat btn-xs'));?>
                </td>
                <td>
                  <button style="background-color: #d81b60 !important;">Parents</button>
                </td>
                
                <td> 
                    <div class="btn-group">
                       <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">পদক্ষেপ &nbsp;
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                       </button>
                       <ul class="dropdown-menu" role="menu">
                          <li><a href="<?=base_url('index.php/adminpanel/manage_user/nibondhon_status/'.$user->id)?>">নিবন্ধন যাচাই করুন</a></li>
                          
                           <li><a href="<?=base_url('index.php/adminpanel/manage_user/details/'.$user->id)?>">বিস্তারিত</a></li>
                       </ul>
                    </div>
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