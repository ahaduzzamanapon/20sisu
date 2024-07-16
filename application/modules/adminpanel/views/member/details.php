

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
          <!-- <h3 class="box-title">সদস্যদের বিস্তারিত তথ্য</h3> -->
         <?php if($info->is_paid == 1  && $info->status != 2){ ?> 
          <a href="<?=base_url('index.php/adminpanel/member/complete_status/'.$info->id)?>" target="_blank" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="return confirm('Are you sure?')">সেবা সম্পন্ন</a>
        <?php } ?>
          <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> প্রিন্ট </a>
          <?php if($this->ion_auth->in_group(array('dc_admin'))){ ?>
            
              <a href="<?=base_url('index.php/adminpanel/member/details_pdf/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> PDF </a>
            
          <?php }?>  
          <?php if($this->ion_auth->in_group(array('admin'))){ ?>
            
              <a href="<?=base_url('index.php/adminpanel/member/details_pdf_all/'.$info->id.'/'.$info->day_cares_id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> PDF </a>
            
          <?php }?>  
          <!-- <a href="<?=base_url('index.php/adminpanel/member/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit </a>           -->
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
                    .tg .tg-9czc{background-color:#e5e3e3;text-align:left;vertical-align:middle; width: 100px!important; font-weight: bolder; font-size: 12px;}
                    .tg .tg-0lax{text-align:left;vertical-align:top;width: 200px;}
                    .tg .tg-0pky{background-color:#efefef;text-align:left;vertical-align:top; font-size: 10px; }
                    .tg .tg-9czc{background-color:#e5e3e3;text-align:left;vertical-align:middle;  font-weight: bold;}
                  </style>
                <div class="col-md-6">
                    <fieldset>
                      <legend style="color: #ffffff;font-weight: 700; background-color: #3c8dbc;padding: 5px;">শিশুর তথ্য</legend> 
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">শিশুর সাধারণ তথ্য</caption>

                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">শিশুর নাম:</td>
                          <td class="tg-0pky"><?=$info->child_name?></td>

                          <!-- <td class="tg-0pky" rowspan="4" style="widtd: 150px;">   
                        
                          <?php 
                                $img_path = base_url().'assets/images/member_img/';
                                if($info->image_file != NULL){
                                  $src= $img_path.$info->image_file;
                                  echo "<img src='$src' height='150'>";
                               }
                          ?>

                          </td>     -->            
                        <!-- </tr>

                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">জন্ম তারিখ:</td>
                          <td class="tg-0pky"><?= eng2bng($info->child_dob) ?></td>                
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">লিঙ্গ:</td>
                          <td class="tg-0pky"><?=$info->gender?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">বয়স:</td>
                          <td class="tg-0pky"><?= eng2bng($info->child_age) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">ওজন:</td>
                          <td class="tg-0pky"><?= eng2bng($info->child_weight) ?></td>
                       <!--  </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">উচ্চতা:</td>
                          <td class="tg-0pky"><?= eng2bng($info->child_height) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">জন্ম চিহ্ন:</td>
                          <td class="tg-0pky"><?=$info->birth_mark?></td>
                       <!--  </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">জন্ম সনদপত্র নং:</td>
                          <td class="tg-0pky"><?= eng2bng($info->birth_certificate_no) ?></td>
                        </tr>
                      </table>
                    </fieldset>
                    <fieldset>
                      <?php if($info->describe_food) {?>
                      <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend> 
                        <table class="tg" style="text-align: left;">
                          <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সদস্যের স্বাস্থ্য তথ্য</caption>
                          <tr>
                            <td class="tg-9czc" style="font-weight: bolder;"  width="260">নির্দিষ্ট খাবারের সমস্যার বর্ণনা:</td>
                            <td class="tg-9czc" style="font-weight: bolder;">স্বাস্থ্য সমস্যার বর্ণনা:</td>
                          </tr>
                          <tr>
                            <td class="tg-0pky"><?=$info->describe_food?></td>
                            <td class="tg-0pky"><?=$info->describe_health_problem?></td>
                          </tr>
                        </table>
                      <?php }?>  
                      <?php if($info->child_vaccination == 'Yes') {?>
                        <legend></legend>
                        <table class="tg" style="text-align: left;">  
                          <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সদস্যের টিকার তথ্য</caption>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">বিসিজি:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">পেন্টা:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">পিসিবি:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">ওপিবি:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">আইপিবি:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">এমআর:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">হাম:</td>
                            <td class="tg-0pky">দেওয়া হয়েছে</td>
                          </tr>
                        </table>
                      <?php }else {?>
                         <legend></legend>
                        <table class="tg" style="text-align: left;">  
                          <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সদস্যের টিকার তথ্য</caption>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">বিসিজি:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">পেন্টা:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">পিসিবি:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">ওপিবি:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">আইপিবি:</td>
                            <td class="tg-0pky"> এখনো দেওয়া হয়নি</td>
                          <!-- </tr>
                          <tr> -->
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">এমআর:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          </tr>
                          <tr>
                            <td  scope="col" width="30" class="tg-9czc" style="font-weight: bolder;">হাম:</td>
                            <td class="tg-0pky">এখনো দেওয়া হয়নি</td>
                          </tr>
                        </table>
                      <?php }?>
                    </fieldset>
                    <fieldset>
                      <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend> 
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সদস্যের মাসিক সেবামূল্য</caption>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;"  width="260">মাসিক সেবামূল্য:</td>
                          <td class="tg-0pky"><?=eng2bng($info->monthly_fee)?>/- টাকা</td>
                        </tr>
                      </table>
                     
                    </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                      <legend style="color: #ffffff;font-weight: 700; background-color: #3c8dbc;padding: 5px;">নিবন্ধন তথ্য</legend>
                    <fieldset>
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">মায়ের সাধারণ তথ্য</caption>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">মায়ের নাম:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_mother_name?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">জাতীয় পরিচয়পত্র:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_mother_national_no) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">পদবী:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_mother_designation?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">কর্মস্থান:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_mother_working_place?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">ফোন নং:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_mother_ph_no) ?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">মোট বেতন:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_mother_total_salary) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">বেসিক বেতন:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_mother_basic_salary) ?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">বেতন কাঠামো:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_mother_pay_scale) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">কর্মঘণ্টা:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_mother_job_duration?></td>
                        <!-- </tr>
                        <tr> -->
                        <td class="tg-9czc" style="font-weight: bolder;">স্থায়ী ঠিকানা:</td>
                        <td class="tg-0pky" colspan="2"><?=$info->child_mother_permanent_address?></td>
                        </tr>
                        
                      </table>
                    </fieldset>
                    <fieldset>
                      <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend>
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">পিতার সাধারণ তথ্য</caption>

                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">পিতার নাম:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_father_name?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">জাতীয় পরিচয়পত্র:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_father_national_no) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">মোট বেতন:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_father_total_salary) ?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">বেসিক বেতন:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_father_basic_salary) ?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">বেতন কাঠামো:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_father_pay_scale) ?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">স্থায়ী ঠিকানা:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_father_permanent_address?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">ফোন নং:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_father_ph_no) ?></td>
                        </tr>
                      </table>
                    </fieldset>
                    <fieldset>
                      <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend>
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">অভিভাবকের সাধারণ তথ্য</caption>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">অভিভাবকের নাম:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_parents_name?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">ফোন নং:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_parents_ph_no) ?></td>
                        </tr>

                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">জাতীয় পরিচয়পত্র:</td>
                          <td class="tg-0pky" colspan="2"><?= eng2bng($info->child_parents_national_no) ?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">স্থায়ী ঠিকানা:</td>
                          <td class="tg-0pky" colspan="2"><?=$info->child_parents_present_address?></td>
                        </tr>
                      </table>
                    </fieldset>
                      <!-- <fieldset>
                        <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;">ভর্তি বিষয়ক তথ্য</legend>
                        <table class="tg" style="text-align: left;">
                          <tr>
                            <td class="tg-9czc">Child Admit Interest:</td>
                            <td class="tg-0pky" colspan="2"><?=$info->child_admit_interest?></td>
                          </tr>
                          <tr>
                            <td class="tg-9czc">Child Number:</td>
                            <td class="tg-0pky" colspan="2"><?=$info->child_number?></td>
                          </tr>
                        </table>
                      </fieldset>   -->
                  </fieldset>
                </div>
              </div>
            <?php if($info->parents_image) {?>
              <fieldset>
                      <legend style="color: #0d0d0d;font-weight: 700; padding: 5px;"></legend> 
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সংযুক্তি সমূহ</caption>
                        <tr>
                          <th class="tg-9czc" >আবেদনকারীর ছবি</th>
                          <th class="tg-9czc" >অভিভাবকের জাতীয় পরিচয়পত্রের কপি </th>
                          <th class="tg-9czc" >শিশুর জন্মসনদের কপি </th>
                          <th class="tg-9czc" >প্রত্যয়নপত্র </th>
                          <?php if($info->parents_sign) {?>
                          <th class="tg-9czc" >স্বাক্ষর </th>
                          <th class="tg-9czc" >শিশুর ছবি </th>
                          <th class="tg-9czc" >শিশুর টিকা কার্ড </th>
                          <?php }?>
                        </tr>
                        <tr style="text-align: center;">
                          <td><button class="btn-success" data-toggle="modal" data-target="#images">দেখুন</button></td>
                          <td><button class="btn-success" data-toggle="modal" data-target="#guardian">দেখুন</button></td>
                          <td><button class="btn-success" data-toggle="modal" data-target="#birthCertificate">দেখুন</button></td>
                          <td><button class="btn-success" data-toggle="modal" data-target="#jobCertificate">দেখুন</button></td>
                          <?php if($info->parents_sign) {?>
                            <td><button class="btn-success" data-toggle="modal" data-target="#parentSign">দেখুন</button></td>
                            <td><button class="btn-success" data-toggle="modal" data-target="#childImage">দেখুন</button></td>
                            <td><button class="btn-success" data-toggle="modal" data-target="#vaccineCard">দেখুন</button></td>
                          <?php }?>

                        </tr>
                      </table>
                     
              </fieldset>  
            <?php }?>  
          </div>
          <!-- /.box-body -->
        <?php echo form_close();?>
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
                        <h4 class="modal-title">আবেদনকারীর ছবি</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        
                        <img src="<?=base_url().'assets/images/member_img/'.$info->parents_image ?>"
                        width="200" height="250" ><br>
                        
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->parents_image ?>" download="<?=$info->parents_image ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal fade" id="guardian" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">অভিভাবকের জাতীয় পরিচয়পত্রের কপি</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->guardian_image ?>"
                        width="400" height="200" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->guardian_image ?>" download="<?=$info->guardian_image ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="birthCertificate" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">শিশুর জন্মসনদের কপি</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->birth_certificate ?>"
                        width="300" height="300" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->birth_certificate ?>" download="<?=$info->birth_certificate ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="jobCertificate" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">মাতা ও পিতার চাকুরী নিয়ন্ত্রণকারী কর্তৃপক্ষ কর্তৃক প্রত্যয়নপত্র</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->father_mother_job_certificate ?>"
                        width="300" height="300" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->father_mother_job_certificate ?>" download="<?=$info->father_mother_job_certificate ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="parentSign" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">মাতা অথবা পিতার স্বাক্ষর</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->parents_sign ?>"
                        width="300" height="300" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->parents_sign ?>" download="<?=$info->parents_sign ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="childImage" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">শিশুর ছবি</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->child_image ?>"
                        width="300" height="300" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->child_image ?>" download="<?=$info->child_image ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="vaccineCard" role="dialog">
                  <div class="modal-dialog modal-mm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">শিশুর টিকা কার্ড</h4>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <img src="<?=base_url().'assets/images/member_img/'.$info->child_vaccine_card ?>"
                        width="300" height="300" ><br>
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-info text-left" href="<?=base_url().'assets/images/member_img/'.$info->child_vaccine_card ?>" download="<?=$info->child_vaccine_card ?>" style= "text-align: left;">ডাউনলোড</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">বন্ধ করুন</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                          <!-- modal ends -->
<!-- /.content -->
