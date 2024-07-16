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
               <h3 class="box-title">বিস্তারিত </h3>
               <a href="<?=base_url('index.php/adminpanel/day_care/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> তথ্য সম্পাদনা করুন</a>          
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

               <div class="row">
                  <div class="col-md-7">
                     <dl class="dl-horizontal">
                        <dt> নাম</dt>
                        <dd><?=$info->title?></dd>
                        <dt>এলাকা</dt>
                        <dd><?=$info->area?></dd>  
                        <dt>বর্ণনা</dt>
                        <dd><?=$info->description?></dd>
                     </dl>                 
                  </div>

                  <div class="col-md-5">
                     <dl class="dl-horizontal">
                        <dt>অফিসারের নাম</dt>
                        <dd><?=$info->officer_name?></dd>
                        <dt>ঠিকানা</dt>
                        <dd><?=$info->address?></dd>
                        <dt>মোবাইল নাম্বার</dt>
                        <dd><?= eng2bng($info->mobile_no) ?></dd>
                        <dt>ফোন নম্বর</dt>
                        <dd><?= eng2bng($info->phone) ?></dd>
                        <dt>ইমেইল</dt>
                        <dd><?=$info->email?></dd>
                        <dt>অক্ষাংশ</dt>
                        <dd><?=eng2bng($info->latitude)?></dd>        
                        <dt>দ্রাঘিমাংশ</dt>
                        <dd><?=eng2bng($info->longitude)?></dd>          
                     </dl>

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
