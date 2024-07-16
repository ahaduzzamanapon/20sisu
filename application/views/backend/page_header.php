<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?=$meta_title;?> | <?=$domain_title;?></title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/daterangepicker/daterangepicker.css">
   <!-- bootstrap datepicker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datepicker/datepicker3.css">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/iCheck/all.css">
   <!-- Bootstrap time Picker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/timepicker/bootstrap-timepicker.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/select2/select2.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datatables/dataTables.bootstrap.css">

   <!-- <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/texteditor/editor.css"> -->
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Theme style -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/custom.css">

   <!-- jQuery 2.2.3 -->
   <script src="<?=base_url();?>awedget/assets/plugins/jQuery/jquery-2.2.3.min.js"></script> 

   <link href="<?=base_url();?>awedget/assets/plugins/jquery-validation/demo/css/screen.css" rel="stylesheet">
   <script src="<?=base_url();?>awedget/assets/plugins/jquery-validation/dist/jquery.validate.js"></script>
   <script type="text/javascript">var hostname='<?php echo base_url();?>';</script>

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">

         <?php 
            $active=$active1=$active2=$active3=$active4='';
            // echo $this->uri->segment(4);
            if($this->uri->segment(4) == 1){
               $active = 'active';
            }elseif($this->uri->segment(4) == 2){
               $active1 = 'active';
            }elseif($this->uri->segment(4) == 3){
               $active2 = 'active';
            }elseif($this->uri->segment(4) == 4){
               $active3 = 'active';
            }elseif($this->uri->segment(4) == 5){
               $active4 = 'active';
            }
         ?>

      <header class="main-header">
         <a href="<?=base_url('index.php/adminpanel/dashboard');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>DC</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>অ্যাডমিন</b> প্যানেল</span>
         </a>
         <nav class="navbar navbar-static-top">
            <a href="javascript:void();" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
               <?php if($this->ion_auth->in_group(array('dc_admin'))){ ?>
                  <?php if($this->session->userdata('is_superadmin')){ ?> 
                  <li><a href="<?=base_url('index.php/adminpanel/day_care/admin_login')?>" class="btn btn-danger">মাস্টার ড্যাশবোর্ডে ফিরে যান</a></li>
                  <?php } ?>
               <?php } ?>

                  <!-- <li><a target="_blank" href="<?=base_url()?>" class="btn btn-success">Visit Website</a></li> -->

                  <li class="dropdown user user-menu">
                     <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url('awedget/assets/img/no-avatar.jpeg');?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?=$this->session->userdata('first_name').' '.$this->session->userdata('last_name');?></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="user-header">
                           <img src="<?=base_url('awedget/assets/img/no-avatar.jpeg');?>" class="img-circle" alt="User Image">
                           <p><small>কবে থেকে সদস্য <strong><?=date('j F, Y', $this->session->userdata('created_on'));?></strong></small> </p>
                        </li>
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="<?=base_url('index.php/adminpanel/my_profile');?>" class="btn btn-default btn-flat">প্রোফাইল</a>
                           </div>
                           <div class="pull-right">
                              <a href="<?=base_url('index.php/adminpanel/logout');?>" class="btn btn-default btn-flat">সাইন আউট</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
         <section class="sidebar">

            <ul class="sidebar-menu">
               <!-- <li class="header" style="text-align: center; text-transform: uppercase;"><?=$user_group?></li> -->

               <li class="treeview <?=backend_activate_menu_class('dashboard');?>"> <a href="<?=base_url('index.php/adminpanel/dashboard');?>"> <i class="fa fa-dashboard"></i> <span>ড্যাশবোর্ড</span></a> </li>             

               <?php if ($this->ion_auth->in_group(array('dc_admin'))){ ?>
               <li class="treeview <?=backend_activate_menu_class('member');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>শিশু</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li class="<?=backend_activate_menu_method('index');?>"><a href="<?=base_url('index.php/adminpanel/member');?>"><i class="fa fa-circle-o"></i>বর্তমানে সেবা গ্রহণকারী শিশু</a></li>
                     <li class="<?=backend_activate_menu_method('request');?>"><a href="<?=base_url('index.php/adminpanel/member/request');?>"><i class="fa fa-circle-o"></i>অপেক্ষমাণ শিশুর তালিকা</a></li>
                     <li class="<?=backend_activate_menu_method('completed');?>"><a href="<?=base_url('index.php/adminpanel/member/completed');?>"><i class="fa fa-circle-o"></i>পূর্ববর্তী সেবা গ্রহণকারী শিশু</a></li>
                     <li class="<?=backend_activate_menu_method('subsidies');?>"><a href="<?=base_url('index.php/adminpanel/member/subsidies');?>"><i class="fa fa-circle-o"></i>ভর্তুকির আবেদনকারী শিশু</a></li>
                  </ul>
               </li>

               <li class="treeview <?=backend_activate_menu_class('budget');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>বাজেট</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">              
                     <li class="<?=backend_activate_menu_method('monthly_demand');?>"><a href="<?=base_url('index.php/adminpanel/budget/monthly_demand');?>"><i class="fa fa-circle-o"></i> মাসিক চাহিদা</a></li>
                     <li class="<?=backend_activate_menu_method('advance_bill');?>"><a href="<?=base_url('index.php/adminpanel/budget/advance_bill');?>"><i class="fa fa-circle-o"></i> অগ্রিম বিল</a></li>
                  </ul>
               </li>               
               
               <li class="treeview <?=backend_activate_menu_class('attendance');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>উপস্থিতি</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">      
                     <li class="<?=backend_activate_menu_method('logfileupload');?>"><a href="<?=base_url('index.php/adminpanel/attendance/logfileupload');?>"><i class="fa fa-circle-o"></i> ফাইল আপলোড</a></li>        
                     <li class="<?=$active1?>"><a href="<?=base_url('index.php/adminpanel/attendance/today/2');?>"><i class="fa fa-circle-o"></i> আজকের উপস্থিতি (স্টাফ)</a></li>
                     <li class="<?=$active?>"><a href="<?=base_url('index.php/adminpanel/attendance/today/1');?>"><i class="fa fa-circle-o"></i> আজকের উপস্থিতি (শিশু)</a></li>
                     <!-- <li><a href="<?=base_url('index.php/adminpanel/attendance/all');?>"><i class="fa fa-circle-o"></i> All Attendance</a></li> -->
                     <li class="<?=backend_activate_menu_method('report');?>"><a href="<?=base_url('index.php/adminpanel/attendance/report');?>"><i class="fa fa-circle-o"></i> উপস্থিতি রিপোর্ট</a></li>
                     <!-- <li><a href="<?=base_url('index.php/adminpanel/attendance/today');?>"><i class="fa fa-circle-o"></i> Today Attendance</a></li> -->
                  </ul>
               </li>

               <li class="<?=backend_activate_menu_class('event');?>"><a href="<?php echo base_url('index.php/adminpanel/event/all');?>"><i class="fa fa-circle-o"></i> <span>ইভেন্ট ম্যানেজ</span></a></li>
               <li class="<?=backend_activate_menu_class('gallery');?>"><a href="<?php echo base_url('index.php/adminpanel/gallery/all');?>"><i class="fa fa-circle-o"></i> <span>গ্যালারী চিত্র</span></a></li> 

               <li class="<?=backend_activate_menu_class('staff');?>"><a href="<?php echo base_url('index.php/adminpanel/staff');?>"><i class="fa fa-book"></i> <span>স্টাফ তালিকা</span></a></li>
               <li class="<?=backend_activate_menu_class('day_care');?>"><a href="<?php echo base_url('index.php/adminpanel/day_care/my_day_care_center');?>"><i class="fa fa-book"></i> <span>দিবাযত্ন কেন্দ্রের তথ্য</span></a></li> 

               <li class="<?=backend_activate_menu_class('support');?>"><a href="<?php echo base_url('index.php/adminpanel/support/index');?>"><i class="fa fa-phone"></i> <span> যোগাযোগ </span></a></li> 

               <?php } ?>

               <?php if ($this->ion_auth->in_group(array('admin'))){ ?>
               <li class="<?=backend_activate_menu_class('day_care');?>"><a href="<?php echo base_url('index.php/adminpanel/day_care');?>"><i class="fa fa-th"></i> <span>দিবাযত্ন কেন্দ্র</span></a></li>

               <!-- <li class="<?=backend_activate_menu_class('day_care_others');?>"><a href="<?php echo base_url('index.php/adminpanel/day_care_others');?>"><i class="fa fa-th"></i> <span>অন্যান্য দিবা যত্ন কেন্দ্র</span></a></li> -->
                <li class="treeview <?=backend_activate_menu_class('member');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>শিশু</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>

                  <ul class="treeview-menu">
                     <li class="<?=$active2?>"><a href="<?=base_url('index.php/adminpanel/member/verified_request/3');?>"><i class="fa fa-circle-o"></i>ভর্তি যোগ্য শিশুর তালিকা</a></li>
                     <li class="<?=$active4?>"><a href="<?=base_url('index.php/adminpanel/member/verified_request/5');?>"><i class="fa fa-circle-o"></i>ভর্তির অযোগ্য শিশুর তালিকা</a></li>
                     <li class="<?=$active3?>"><a href="<?=base_url('index.php/adminpanel/member/verified_request/4');?>"><i class="fa fa-circle-o"></i>ভর্তির জন্য অপেক্ষমান শিশু</a></li>
                     <li class="<?=$active?>"><a href="<?=base_url('index.php/adminpanel/member/verified_request/1');?>"><i class="fa fa-circle-o"></i>বর্তমানে সেবা গ্রহণকারী শিশু</a></li>
                     <li class="<?=$active1?>"><a href="<?=base_url('index.php/adminpanel/member/verified_request/2');?>"><i class="fa fa-circle-o"></i>পূর্ববর্তী সেবা গ্রহণকারী শিশু</a></li>
                     <!-- <li><a href="<?=base_url('index.php/adminpanel/member/subsidies');?>"><i class="fa fa-circle-o"></i>ভর্তুকির আবেদনকারী শিশু</a></li> -->
                  </ul>
               </li>
               
               <li class="treeview <?=backend_activate_menu_class('budget');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>বাজেট</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">              
                     <li class="<?=backend_activate_menu_method('monthly_demand_all');?>"><a href="<?=base_url('index.php/adminpanel/budget/monthly_demand_all');?>"><i class="fa fa-circle-o"></i> মাসিক চাহিদা</a></li>
                     <li class="<?=backend_activate_menu_method('advance_bill_all');?>"><a href="<?=base_url('index.php/adminpanel/budget/advance_bill_all');?>"><i class="fa fa-circle-o"></i> অগ্রিম বিল</a></li>
                  </ul>
               </li>  

               <li class="<?=backend_activate_menu_class('doctors');?>"><a href="<?php echo base_url('index.php/adminpanel/doctors');?>"><i class="fa fa-th"></i> <span> ডাক্তারের তালিকা </span></a></li>
  

               
               <?php } ?>

               <li class="treeview <?=backend_activate_menu_class('manage_user');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>ম্যানেজ ইউজার</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li class="<?=backend_activate_menu_method('all');?>"><a href="<?=base_url('index.php/adminpanel/manage_user/all');?>"><i class="fa fa-circle-o"></i> ব্যবহারকারীর তালিকা</a></li>
                     <!-- <li><a href="<?=base_url('adminpanel/manage_user/add');?>"><i class="fa fa-circle-o"></i> Add User</a></li> -->
                  </ul>
               </li>               
               <li class="treeview <?=backend_activate_menu_class('notice');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-book"></i> <span>ডিজিটাল গার্ড ফাইল</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li class="<?=backend_activate_menu_method('all');?>"><a href="<?=base_url('index.php/adminpanel/notice/all');?>"><i class="fa fa-circle-o"></i> ডিজিটাল গার্ড ফাইল</a></li>
                  </ul>
               </li>   

               <li class="treeview <?=backend_activate_menu_class('sidebar');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-book"></i> <span>ম্যানেজ সাইড বার</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li class="<?=backend_activate_menu_method('all');?>"><a href="<?=base_url('index.php/adminpanel/sidebar/all');?>"><i class="fa fa-circle-o"></i>ম্যানেজ সাইড বার</a></li>
                  </ul>
               </li>               
               <li class="treeview <?=backend_activate_menu_class('slider');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-book"></i> <span>ম্যানেজ স্লাইডার</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li class="<?=backend_activate_menu_method('all');?>"><a href="<?=base_url('index.php/adminpanel/slider/all');?>"><i class="fa fa-circle-o"></i>ম্যানেজ স্লাইডার</a></li>
                  </ul>
               </li>               


            </ul>
         </section>
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">