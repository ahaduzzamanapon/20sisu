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
               <?php if($results){ ?>
               <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> প্রিন্ট </a> 
               <?php } ?>

               <a href="<?=base_url('index.php/adminpanel/attendance/add')?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-plus" aria-hidden="true"></i> যোগ করুন</a>    
                     
            </div>        

            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <?php echo form_open_multipart("index.php/adminpanel/attendance/report");?>
               <div class="row">
                  <!-- <div class="col-md-5">
                     <div class="form-group">
                        <label>Staff Name *</label>
                        <div><?php echo form_error('members_id'); ?></div>
                        <?php 
                        $more_attr = 'class="form-control"';
                        echo form_dropdown('members_id', $members, set_value('members_id'), $more_attr);
                        ?>
                     </div>
                  </div> -->
                  <div class="col-md-2">
                     <div class="form-group">
                        <label>প্রকার নির্বাচন</label>
                        <div><?php echo form_error('type_id'); ?></div>
                        <?php 
                        $more_attr = 'class="form-control"';
                        echo form_dropdown('type_id', $type, set_value('type_id'), $more_attr);
                        ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label>শুরুর তারিখ *</label>                        
                        <div><?php echo form_error('date_start'); ?></div>
                        <input type="text" class="form-control" name="date_start" value="<?=set_value('date_start',date('Y-m-d'))?>">
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label>শেষ তারিখ *</label>
                        <div><?php echo form_error('date_end'); ?></div>
                        <input type="text" class="form-control" name="date_end" value="<?=set_value('date_end',date('Y-m-d'))?>">
                     </div>
                  </div>
                  <div class="col-md-1 pull-left">
                        <br>
                        <?php echo form_submit('submit', 'অনুসন্ধান', "class='btn btn-primary pull-right'"); ?>
                   </div>
               </div>
               <?php echo form_close();?>

               <?php if($results){ ?>
               <div align="center" style=" margin:0 auto;  overflow:hidden; font-family: 'Times New Roman', Times, serif; width:700px; margin-bottom:200px; min-height:1000px;"><span style="font-size:13px; font-weight:bold;" id="printableArea">   
                  <div>
                     <h3 style="text-align: center;"><?=ucwords($this->session->userdata('first_name').' '.$this->session->userdata('last_name'));?></h3>
                     <h4 style="text-align: center;">উপস্থিতি তালিকা</h4>
                  </div>

               <table class="table table-bordered table-responsive" >
                  <thead>
                     <tr>
                        <th width="20">নং</th>
                        <th>নাম</th>
                        <th>মেশিন আইডি</th>
                        <th>উপস্থিতির সময়</th>                 
                        <th>প্রস্থানের সময়</th>                 
                        <!-- <th>অ্যাকশন</th> -->
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
                              <td style="font-family: kalpurush"><?=$row->child_name;?></td> 
                              <td><?=eng2bng($row->machine_id);?></td>
                              <td><?=date('d F Y, h:i:s A', strtotime($row->intime));?></td>
                              <td><?=$row->intime == $row->outtime?'':date('d F Y, h:i:s A', strtotime($row->outtime));?></td>
                           <?php /*
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <!-- <li><a href="<?=base_url('adminpanel/staff/details/'.$row->id)?>">Details</a></li> -->
                                    <li><a href="<?=base_url('adminpanel/staff/edit/'.$row->id)?>">Edit</a></li>
                                    <!-- <li><a href="<?=base_url('adminpanel/staff/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a></li> -->
                                 </ul>
                              </div>
                           </td>
                           */ ?>
                        </tr>
                        <?php 
                     }                  
                  ?>
               </tbody>
            </table>
         </span></div>
            <?php } ?>
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
