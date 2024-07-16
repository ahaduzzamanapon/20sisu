<section class="content-header">
   <h1> <?php echo $meta_title; ?>  </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?php echo $meta_title; ?></li>
   </ol>
   <div class="col-md-12">
      <div class="box box-primary">
         <div class="box-header with-border">
               <h4>বিস্তারিত </h4>
         </div>
         <div class="box-body">
            <table class="table table-bordered table-striped table-responsive">
               <tbody>
                  <tr>
                     <th width="150">নাম</th>
                     <td><?=$info->first_name.' '.$info->last_name?></td>
                  </tr>
                  <tr>
                     <th width="150">মোবাইল নং </th>
                     <td><?=eng2bng($info->phone)?></td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>

<!-- Main content -->-
<section class="content">


</section>
<!-- /.content -->
