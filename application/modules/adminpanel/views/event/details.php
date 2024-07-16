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
               <a href="<?=base_url('index.php/adminpanel/event/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> ইভেন্ট সম্পাদনা</a>          
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
                        <dt>ইভেন্টের নাম</dt>
                        <dd><?=$info->title?></dd>          
                        <dt>তারিখ ও সমায়</dt>
                        <dd><?=eng2bng($info->date)?></dd>                 
                        <dt>অ্যারিয়া </dt>
                        <dd><?=$info->location?></dd>   
                        <dt>ইভেন্ট বিস্তারিত</dt>
                        <dd><?=nl2br($info->description)?></dd>
                     </dl>                 
                  </div>

                  <div class="col-md-5">
                     <dl class="dl-horizontal">
                        <dt>ছবি</dt>
                        <dd>
                           <?php 
                           $img_path = base_url('assets/images/event_img/');
                           if($info->feature_image != NULL){
                              $src= $img_path.$info->feature_image;
                              echo "<img src='$src' class='img-responsive'>";
                           }
                           ?>
                        </dd>                 
                     </dl>

                  </div>
               </div>
            </div>
            <!-- /.box-body -->
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
