<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<section class="content-header">
   <h1> <?php echo $meta_title; ?>  </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('index.php/adminpanel/dashboard')?>"><i class="fa fa-dashboard"></i> হোম</a></li>
      <li class="active">ড্যাশবোর্ড</li>
   </ol>
</section>

<!-- Main content -->
<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-teal">
               <h3 class="widget-user-username"><?=$day_care_info->title?></h3>
               <h5 class="widget-user-desc"><?=$day_care_info->area?></h5>
            </div>
         </div> <!-- /.widget-user -->
      </div> <!-- /.col -->
   </div>

   <div class="row">
      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_application'])?></h3>
               <p>মোট আবেদন</p>
            </div>
            <div class="icon"> <i class="fa fa-list"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member/request')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-green">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_child'])?></h3>
               <p>বর্তমানে সেবা গ্রহণকারী মোট শিশু</p>
            </div>
            <div class="icon"> <i class="fa fa-child"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      

      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_staff'])?></h3>
               <p>মোট কর্মী</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/staff/all')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>

      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_attendance_today'])?></h3>
               <p>আজকের উপস্থিতি</p>
            </div>
            <div class="icon"> <i class="fa fa-clock-o"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/attendance/all')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>


      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?=eng2bng($dc_child_interest['total_sec_1'])?></h3>
               <p>প্রারম্ভিক উদ্দীপনা পর্যায়<br> (৬ মাস - ১২ মাস)</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member/get_child_admit_interest_list_by_status/1')?>" class="small-box-footer">আরও <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=eng2bng($dc_child_interest['total_sec_2'])?></h3>
               <p>প্রাক-প্রারম্ভিক শিখন পর্যায়<br> (১২ মাস - ৩০মাস)</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member/get_child_admit_interest_list_by_status/2')?>" class="small-box-footer">আরও <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>  

      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=eng2bng($dc_child_interest['total_sec_3'])?></h3>
               <p>প্রারম্ভিক শিখন পর্যায়<br> (৩০ মাস - ৪৮ মাস)</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member/get_child_admit_interest_list_by_status/3')?>" class="small-box-footer">আরও <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-blue">
            <div class="inner">
               <h3><?=eng2bng($dc_child_interest['total_sec_4'])?></h3>
               <p>প্রাক-প্রাথমিক স্কুল পর্যায়<br> (৪ বছর - ৬ বছর)</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('index.php/adminpanel/member/get_child_admit_interest_list_by_status/4')?>" class="small-box-footer">আরও <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>
      

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_child_male'])?></h3>
               <p>মোট ছেলে শিশু</p>
            </div>
            <div class="icon"> <i class="fa fa-male"></i> </div>
            <!-- <a href="<?php echo base_url('index.php/adminpanel/member')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a> -->
         </div>
      </div>  <!-- ./col -->

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-green">
            <div class="inner">
               <h3><?=eng2bng($dc_statistics['total_child_female'])?></h3>
               <p>মোট মেয়ে শিশু</p>
            </div>
            <div class="icon"> <i class="fa fa-female"></i> </div>
            <!-- <a href="<?php echo base_url('index.php/adminpanel/member')?>" class="small-box-footer">আরও তথ্য <i class="fa fa-arrow-circle-right"></i></a> -->
         </div>
      </div>  
       <!-- ./col -->
      
   </div> <!-- ./row -->


   <div class="row">
      <div class="col-md-12">
         <h3>বয়স গ্রুপ ভিত্তিক শিশুর পরিসংখ্যান</h3>
         <div id="chart_div"></div> 
      </div>
   </div>




   <?php /*

   <!-- Info boxes -->
   <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-list"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Applicant</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_application']?></span>
            </div>
            <div><a href="" class="btn btn-block btn-xs btn-primary">Details</a></div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-child"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Child</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_child']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Staff</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_staff']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-random"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Today Attendance</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_attendance_today']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
   </div> <!-- /.row -->

   */ ?>




</section>
<!-- /.content -->


<script type="text/javascript"> 
     
   // Load the Visualization API and the piechart package. 
   google.charts.load('current', {'packages':['corechart']}); 
    
   // Set a callback to run when the Google Visualization API is loaded. 
   google.charts.setOnLoadCallback(drawChart); 
    
   function drawChart() { 
      var jsonData = $.ajax({ 
         url: "<?php echo base_url() . 'index.php/adminpanel/dashboard/getdata' ?>", 
         dataType: "json", 
         async: false 
         }).responseText; 
        
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 

      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
      chart.draw(data, {width: 1200, height: 500}); 
   } 

</script> 
