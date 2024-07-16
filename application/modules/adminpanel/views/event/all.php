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
               <a href="<?=base_url('index.php/adminpanel/event/add')?>" class="btn btn-info btn-xs pull-right"> ইভেন্ট যোগ করুন</a>          
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
                        <th width="15">নং</th>
                        <th>ইভেন্ট নাম</th>
                        <th>ছবি</th>
                        <th>তারিখ</th>
                        <!-- <th>Status</th> -->
                        <th width="80">অ্যাকশন</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     foreach ($results as $row) { 
                        $sl++;

                        $img_path = base_url('assets/images/event_img/');
                        if($row->feature_image != NULL){
                           $src= $img_path.$row->feature_image;
                           $image = "<img src='$src' height='30'> ";
                        }else{
                           $image = '';
                        }
                        ?>
                        <tr>
                           <td><?=eng2bng($sl);?></td>
                           <td><?=$row->title;?></td>
                           <td><?=$image;?></td>
                           <td><?=eng2bng(date('d-m-Y', strtotime($row->date)));?></td> 
                           <!-- <td><?=$status;?></td> -->
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=base_url('index.php/adminpanel/event/details/'.$row->id)?>">বিস্তারিত</a></li>
                                    <li><a href="<?=base_url('index.php/adminpanel/event/edit/'.$row->id)?>">সম্পাদনা</a></li>
                                    <li><a href="<?=base_url('index.php/adminpanel/event/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this Event?');">মুছে ফেলুন</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <?php 
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
