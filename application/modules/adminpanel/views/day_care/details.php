<section class="content-header">
   <!-- <h1> <?=$meta_title; ?> </h1> -->
     <h1> <?=$results->title;?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('index.php/adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
     <a style="margin-left: 15px;"  href="<?=base_url('index.php/adminpanel/day_care/dc_login/'.$results->id)?>" class="btn btn-info btn-xs">লগইন</a>
   <!--    <li class="active"><?=$meta_title; ?></li> -->
      <!-- <li class="active"><?=$results->title;?></li> -->
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <!-- <h3 class="box-title"><?=$meta_title; ?></h3> -->
               <!-- <h3 class="box-title">সমস্ত দিবা যত্ন কেন্দ্র </h3> -->
               <!-- <h3 class="box-title"><?=$results->title;?>  এর বিস্তারিত</h3> -->
               <!-- <a href="<?=base_url('index.php/adminpanel/news/add')?>" class="btn btn-info btn-xs pull-right"> Add Day </a> -->
            </div>        

            <div class="box-body">
               <!-- <div id="infoMessage"><?php //echo $message;?></div>             -->
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>
               <fieldset>
                  <legend><?=$results->title;?> এর বিস্তারিত তথ্য ।</legend>
                  <table id="example1" class="table" style="font-size: medium;">
                    
                        
                        <tr>   
                           <th>অবস্থান</th>
                           <td><?=$results->area;?></td>
                        </tr>
                        <tr>   
                           <th>বর্ণনা</th>
                           <td><?=$results->description;?></td> 
                           
                        </tr>
                  </table>
               </fieldset>
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
