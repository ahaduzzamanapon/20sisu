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
               <!-- <a href="<?=base_url('index.php/adminpanel/member/add')?>" class="btn btn-info btn-xs pull-right"> Add Member</a>           -->
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
                        <th width="20">নং</th>
                        <th>শিশুর নাম</th>
                        <th>সমাপ্তির তারিখ</th>
                        <th>মাতার নাম</th>
                        <th>পদবী</th>
                        <th>কর্মস্থান</th>
                        <th>বেতন</th>
                        <th width="100">পদক্ষেপ</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     foreach ($results as $row) { 
                        $sl++;
                        ?>
                        <tr>
                           <td><?=eng2bng($sl);?></td>
                           <td><?=$row->child_name;?></td>               
                           <td><?=eng2bng($row->completion_date);?></td> 
                           <td><?=$row->child_mother_name;?></td>
                           <td><?=$row->child_mother_designation;?></td>
                           <td><?=$row->child_mother_working_institute;?></td>
                           <td><?=eng2bng($row->child_mother_total_salary);?></td>
                           <td> 
                              <div class="btn-group">
                                 <a href="<?=base_url('index.php/adminpanel/member/details/'.$row->id)?>"><button type="button" class="btn btn-success btn-xs">বিস্তারিত</button></a>
                                 <!-- <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=base_url('index.php/adminpanel/member/details/'.$row->id)?>">বিস্তারিত</a></li> -->
                                    <!-- 
                                    <li><a href="<?=base_url('index.php/adminpanel/member/details_pdf/'.$row->id)?>" target="_blank">PDF Generate</a></li>
                                    <li><a href="<?=base_url('index.php/adminpanel/member/edit/'.$row->id)?>">Edit</a></li>
                                    <li><a href="<?=base_url('index.php/adminpanel/member/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this Member?');">Delete</a></li> -->
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
