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
               <a href="<?=base_url('index.php/adminpanel/staff/add')?>" class="btn btn-info btn-xs pull-right"> স্টাফ যোগ করুন</a>          
            </div>        

            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>
               <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                     <tr>
                        <th width="20">ক্রোম</th>
                        <th>ছবি</th>                 
                        <th>নাম</th>
                        <th>ফোন</th>                                     
                        <th>অ্যাকশন</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     foreach ($results as $row) { 
                        $sl++;

                        $img_path = base_url().'assets/images/staff_img/';
                        if($row->image_file != NULL){
                           $src= $img_path.$row->image_file;
                           $image = "<img src='$src' height='30'> ";
                        }else{
                           $image = '';
                        }
                        ?>
                        <tr>
                           <td><?=eng2bng($sl);?></td>                
                           <td><?=$image;?></td>
                           <td><?=$row->child_name;?></td> 
                           <td><?=eng2bng($row->phone);?></td>               
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <!-- <li><a href="<?=base_url('index.php/adminpanel/staff/details/'.$row->id)?>">Details</a></li> -->
                                    <li><a href="<?=base_url('index.php/adminpanel/staff/edit/'.$row->id)?>">সম্পাদনা করুন</a></li>
                                    <!-- <li><a href="<?=base_url('index.php/adminpanel/staff/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a></li> -->
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
