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
               <!-- <a href="<?=base_url('index.php/adminpanel/event/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Event</a>           -->
               <?php if ($this->ion_auth->in_group(array('dc_admin'))){ ?>
                  <a href="<?=base_url('index.php/adminpanel/budget/monthly_demand')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Data</a>  
               <?php } elseif ($this->ion_auth->in_group(array('admin'))) { ?>
                  <a href="<?=base_url('index.php/adminpanel/budget/monthly_demand_all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Data</a>
               <?php }?> 
               <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> Print </a> 
            </div>        
            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <div class="row" id="printableArea">
                  <style type="text/css">
                     .tg  {border-collapse:collapse;border-spacing:0; width: 500px;}
                     .tg td{font-family:Arial, sans-serif;font-size:14px;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg .tg-cly1{text-align:left;vertical-align:middle}
                     .tg .tg-gg7l{background-color:#efefef;text-align:left;vertical-align:middle}
                  </style>
                   <div align="center" style=" margin:0 auto;  overflow:hidden; font-family: 'Times New Roman', Times, serif; width:700px; margin-bottom:200px; min-height:1000px;"><span style="font-size:13px; font-weight:bold;">   
                     <div class="col-md-12">
                        <div>
                           <h3 style="text-align: center;"><?=ucwords($this->session->userdata('first_name').' '.$this->session->userdata('last_name'));?></h3>
                           <h4 style="text-align: center;">মাসিক চাহিদার বিবরন</h4>
                        </div>
                        <table class="tg" align="center">
                           <tr>
                              <th class="tg-gg7l">শিরোনাম</th>
                              <td class="tg-cly1"><?=$info->title?></td>
                              <th class="tg-gg7l">তারিখ</th>
                              <td class="tg-cly1"><?=eng2bng(date('d, M Y', strtotime($info->created)));?></td>
                           </tr>
                           <tr>
                              <th class="tg-gg7l">বাজেট বিস্তারিত</th>
                              <td class="tg-cly1" colspan="3"><?=$info->description?></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-responsive">
                           <thead>
                              <tr>
                                 <th>নং</th>
                                 <th>আইটেম নাম</th>
                                 <th>কুয়ান্টিটি</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                              $sl=0;
                              foreach ($item_results as $row) { 
                                 $sl++;
                                 ?>
                                 <tr>
                                    <td><?=eng2bng($sl);?></td>                           
                                    <td style="font-family: kalpurush" ><?=$row->item_name;?></td>                 
                                    <td><?=eng2bng($row->item_count);?></td>
                                 </tr>
                                 <?php 
                              } 
                              ?>
                           </tbody>
                        </table>          
                     </div>

                  </div>
               </div>
            </div>
            <!-- /.box-body -->
            <?php echo form_close();?>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
