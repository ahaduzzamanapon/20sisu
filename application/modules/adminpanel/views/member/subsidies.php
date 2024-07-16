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
                        <th>কবে থেকে প্রয়োজন</th>
                        <th>মাতার নাম</th>
                        <th>মোবাইল নম্বর</th>
                        <th>ই-মেইল আইডি</th>
                        <th>পারিবারিক বাৎসরিক আয়</th>
                        <th>মাতার মাসিক আয়ের পরিমাণ</th>
                        <th width="110">পদক্ষেপ</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     foreach ($results as $row) { 
                        // echo "<pre>";print_r($results);exit('alid');
                        $sl++;
                        ?>
                        <tr>
                           <td><?=eng2bng($sl);?></td>
                           <td><?=$row->child_name;?></td>
                           <td><?=eng2bng($row->child_doj);?></td> 
                           <td><?=$row->child_mother_name;?></td>
                           <td><?=eng2bng($row->child_mother_ph_no);?></td>
                           <td><?=$row->child_mother_email;?></td>                 
                           <td><?=eng2bng($row->family_total_monthly_income);?></td>
                           <td><?=$row->morther_monthly_income == 1 ? '০ - ৭,৯৯৯ টাকা':($row->morther_monthly_income == 2 ? '৮,০০০ - ১৯,৯৯৯ টাকা':($row->morther_monthly_income == 3 ? '২০,০০০ - ৩৪,৯৯৯ টাকা':($row->morther_monthly_income == 4 ? '৩৫,০০০ - ৪৯,৯৯৯ টাকা':($row->morther_monthly_income == 5 ? '৫০,০০০ অথবা ততোধিক':'')))) ;?>
                           </td>
                          
                           <td>
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">পদক্ষেপ</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <?php if($row->subsidies_approved == 0){ ?><li>
                                    <a href="<?=base_url('index.php/adminpanel/member/subsidies_approve/'.$row->member_id)?>">আবেদন মঞ্জুর করুন</a>
                                    </li><?php }else{ ?><li> <p style="color:green">আবেদন মঞ্জুর হয়েছে</p></li><?php }?>
                                     <li><a href="<?=base_url('index.php/adminpanel/member/details/'.$row->member_id)?>">বিস্তারিত</a></li>
                                    
                                    
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
