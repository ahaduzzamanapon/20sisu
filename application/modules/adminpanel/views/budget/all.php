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
          <h3 class="box-title"><?=$meta_title; ?></h3>
          <a href="<?=base_url('index.php/adminpanel/event/add')?>" class="btn btn-info btn-xs pull-right"> অ্যাড ইভেন্ট</a>          
        </div>        

          <div class="box-body">
            <!-- <div id="infoMessage"><?php //echo $message;?></div>             -->
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>
            <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>ইভেন্ট নাম বাংলা</th>
                  <th>ইভেন্ট নাম ইংরেজি</th>
                  <!-- <th>Category</th> -->
                  <th>ছবি</th>
                  <!-- <th>Display Home</th> -->
                  <!-- <th>Status</th> -->
                  <th>অ্যাকশন</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $sl=0;
              if($results){
                foreach ($results as $row) { 
                  $sl++;

                  // $display_home = $row->display_home==1?'<span class="pull-right badge bg-green">Yes</span>':'<span class="badge bg-yellow">No</span>';
                  // $status = $row->status==1?'<span class="pull-right badge bg-green">Enable</span>':'<span class="badge bg-yellow">Disable</span>';

                  $img_path = base_url().'event_img/';
                  if($row->image_file != NULL){
                      $src= $img_path.$row->image_file;
                      $image = "<img src='$src' height='30'> ";
                  }else{
                    $image = '';
                  }
              ?>
              <tr>
                <td><?=$sl;?></td>
                <td><?=$row->event_name_bn;?></td>
                <td><?=$row->event_name_en;?></td> 
                <!-- <td><?=$row->category;?></td>                  -->
                <td><?=$image;?></td>
                <!-- <td><?=$display_home;?></td> -->
                <!-- <td><?=$status;?></td> -->
                <td> 
                  <div class="btn-group">
                      <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                      <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?=base_url('index.php/adminpanel/event/details/'.$row->id)?>">ডিটেলস</a></li>
                        <li><a href="<?=base_url('index.php/adminpanel/event/edit/'.$row->id)?>">সম্পাদনা করুন</a></li>
                        <li><a href="<?=base_url('index.php/adminpanel/event/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this Event?');">ডিলিট</a></li>
                      </ul>
                    </div>
                </td>
              </tr>
              <?php 
                } 
              }
              ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">                
          </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
