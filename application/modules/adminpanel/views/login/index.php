<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> <?=$meta_title;?> | <?=$domain_title;?> </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<!-- <body class="hold-transition register-page" style="background-image: url(<?=base_url()?>fwedget/images/bg_pattern.jpg);"> -->
<!-- <body class="hold-transition register-page" style="background-color: white;"> -->
<div class="login-box">
  <div class="" style="border-radius: 100px;padding: 50px;">
  <!-- <div class="login-logo" style="font-size: 16px; font-weight: bold;font-family: BenSenHandwriting;">
    <p style="font-size: 20px;">২০টি শিশু দিবাযত্ন কেন্দ্র</p>
    <br>
    ডে-কেয়ার লগইন প্যানেল
  </div> -->
  <!-- /.login-logo -->
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("index.php/adminpanel/login");?>
      <div class="form-group has-feedback"style="border-radius: 100px;">
        <label style="font-family: BenSenHandwriting;">ইউজারনাম</label>
        <?php echo form_input($identity);?>        
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback"style="border-radius: 100px;">
      <label style="font-family: BenSenHandwriting;">পাসোয়ার্ড</label>
        <?php echo form_input($password);?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <!-- <div class="checkbox icheck">
            <label for="remember">
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  Remember Me
            </label>
          </div> -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?php echo form_submit('submit', 'লগইন', "class='btn btn-primary btn-block btn-flat' style='font-family: BenSenHandwriting;'"); ?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

    <!-- <a href="<?php echo base_url('forgot_password');?>"><?php echo lang('login_forgot_password');?></a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 2.2.3 -->
<script src="<?=base_url();?>awedget/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url();?>awedget/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url();?>awedget/assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<!-- </body> -->
</html>