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
                        <th>মাতার নাম</th>
                        <th>পদবী</th>
                        <th>কর্মস্থান</th>
                        <th>মাসিক ফি</th>
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
                           <td><?=$row->child_mother_name;?></td>
                           <td><?=$row->child_mother_designation;?></td>
                           <td><?=$row->child_mother_working_institute;?></td>
                           <td><?=eng2bng($row->monthly_fee);?></td>
                           <td> 
                              <div class="btn-group">
                                 
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">পদক্ষেপ &nbsp;
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=base_url('index.php/adminpanel/member/edit2/'.$row->id)?>">মেশিন আইডি সংযুক্তি</a></li>
                                    <li><a href="<?=base_url('index.php/adminpanel/member/payment_complete/'.$row->id)?>">পেমেন্ট</a></li>
                                     <li><a href="<?=base_url('index.php/adminpanel/member/details/'.$row->id)?>">বিস্তারিত</a></li>
                                    
                                   
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
