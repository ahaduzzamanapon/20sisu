

<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> ড্যাশবোর্ড</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
         
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

              <div class="row"  id="printableArea">
                  <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0; width: 100%}
                    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg .tg-x5m0{background-color:#e5e3e3;text-align:right;vertical-align:top;font-weight: bold;}
                    .tg .tg-kftd{background-color:#efefef;text-align:left;vertical-align:top; }
                    .tg .tg-9czc{background-color:#e5e3e3;text-align:left;vertical-align:middle; width: 150px!important; font-weight: bolder; font-size: 12px;}
                    .tg .tg-0lax{text-align:left;vertical-align:top;width: 200px;}
                    .tg .tg-0pky{background-color:#efefef;text-align:left;vertical-align:top; font-size: 14px; }
                    .tg .tg-9czc{background-color:#e5e3e3;text-align:left;vertical-align:middle;  font-weight: bold;}
                  </style>
                <div class="col-md-6">
                    <fieldset>

                      <legend style="color: #ffffff;font-weight: 700; background-color: #3c8dbc;padding: 5px;">ব্যবহারকারীর  তথ্য</legend> 
                      <table class="tg" style="text-align: left;">
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">ব্যবহারকারীর নাম:</td>
                          <td class="tg-0pky"><?=$info->first_name?> <?=$info->last_name?></td>

                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">মোবাইল নম্বর :</td>
                          <td class="tg-0pky"><?= eng2bng($info->phone) ?></td>                
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">লিঙ্গ:</td>
                          <td class="tg-0pky"><?=$info->gender?></td>
                        </tr>
                      </table>
                    </fieldset>
                    
                  <?php if($info->money_receipt) {?>
                    <fieldset>
                            <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend> 
                            <table class="tg" style="text-align: left;">
                              <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সংযুক্তি সমূহ</caption>
                              <tr>
                                <th class="tg-9czc" >নিবন্ধন ফি রিসিট</th>
                                
                              </tr>
                              <tr style="text-align: center;">
                                <td><button class="btn-success" data-toggle="modal" data-target="#images">দেখুন</button></td>
                              </tr>
                            </table>
                          <?php if($info->is_verified != 2) {?> 
                            <form method="post" action="<?php echo base_url('index.php/adminpanel/manage_user/nibondhon_status/'.$info->id ) ?>" role="form" enctype="multipart/form-data">
                              <div class="form-group">
                                <br>
                                <label><h3><?php echo 'নিবন্ধন যাচাই ';?></h3></label><br>
                                <input type="radio" name="is_verified" value="2"<?php
                                   echo set_value('is_verified', $user->is_verified) == 2 ? "checked" : "";?> ><label>&nbsp;<?php echo 'অনুমোদিত ';?></label>
                                <input type="radio" name="is_verified" value="3"<?php 
                                   echo set_value('is_verified', $user->is_verified) == 3 ? "checked" : ""; ?> ><label>&nbsp;<?php echo 'অননুমোদিত';?></label>
                                <input type="submit" name="submit" class="btn btn-success pull-right" value="সংরক্ষণ করুন">
                              </div>
                            </form>
                          <?php }else{?>
                              <div class="text-center"><h3 style="color:green;">ইতিমধ্যে নিবন্ধন যাচাই সম্পূর্ণ হয়েছে </h3></div>
                          <?php }?>
                    </fieldset>  
                  <?php }else{?>  
                    <div class="text-center"><h3 style="color:red;">এখনো নিবন্ধন ফি এর রিসিট আপলোড করে নি। </h3></div>
                  <?php }?>  
                </div>
                <!-- /.box-body -->
              </div>
            <!-- /.box -->
          </div>
      </div>
  <!-- /.row -->


</section>

                          <!-- modal starts -->
               <div class="modal fade" id="images" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">নিবন্ধন ফি রিসিট</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        
                        <img src="<?=base_url().'assets/images/receipt_img/'.$info->money_receipt ?>"
                        width="500" height="250" ><br>
                        
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/receipt_img/'.$info->money_receipt ?>" download="<?=$info->money_receipt ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
              </div>
              
                          <!-- modal ends -->
<!-- /.content -->
