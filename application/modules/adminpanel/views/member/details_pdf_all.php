<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$headding?></title>
	<style type="text/css">
		.priview-body{font-size: 16px;color:#000;margin: 25px;}
		.priview-header{margin-bottom: 10px;text-align:center;}
		.priview-header div{font-size: 18px;}
		.priview-memorandum, .priview-from, .priview-to, .priview-subject, .priview-message, .priview-office, .priview-demand, .priview-signature{padding-bottom: 20px;}
		.priview-office{text-align: center;}
		.priview-imitation ul{list-style: none;}
		.priview-imitation ul li{display: block;}
		.date-name{width: 20%;float: left;padding-top: 23px;text-align: right;}
		.date-value{width: 70%;float:left;}
		.date-value ul{list-style: none;}
		.date-value ul li{text-align: center;}
		.date-value ul li.underline{border-bottom: 1px solid black;}
		.subject-content{text-decoration: underline;}
		.headding{border-top:1px solid #000;border-bottom:1px solid #000;}

		.col-1{width:8.33%;float:left;}
		.col-2{width:16.66%;float:left;}
		.col-3{width:25%;float:left;}
		.col-4{width:33.33%;float:left;}
		.col-5{width:41.66%;float:left;}
		.col-6{width:50%;float:left;}
		.col-7{width:58.33%;float:left;}
		.col-8{width:66.66%;float:left;}
		.col-9{width:75%;float:left;}
		.col-10{width:83.33%;float:left;}
		.col-11{width:91.66%;float:left;}
		.col-12{width:100%;float:left;}

		.table{width:100%;border-collapse: collapse;}
		.table td, .table th{border:0px solid #ddd;}
		.table tr.bottom-separate td,
		.table tr.bottom-separate td .table td{border-bottom:1px solid #ddd;}
		.borner-none td{border:0px solid #ddd;}
		.headding td, .total td{border-top:1px solid #ddd;border-bottom:1px solid #ddd;}
		.table td{padding:5px;}
		.text-center{text-align:center;}
		.text-right{text-align:right;}
		b{font-weight:500;}
	</style>

	<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0; width: 100%}
		.tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;width: 40%;}
		.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top;}
		.tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
	</style>
</head>
<body>
	<div class="priview-body">
		<table width="100%" border="0">
			<tr>
				<td width="20%"> <span style="font-size: 25px; font-weight: bold;"></span><br> 
					<span style="font-size: 25px; font-weight: bold;"><?=eng2bng($info->member_id)?></span></td>
					<td align="center">
						<div class="priview-header">
							<div style="font-size:18px;"> শিশু দিবাযত্ন কেন্দ্র স্থাপন প্রকল্প</div>
							<span style="">মহিলা বিষয়ক অধিদপ্তর, মহিলা ও শিশু বিষয়ক মন্ত্রণালয়</span><br> 
							<!-- <span style="">বিয়াম ফাউন্ডেশন ভবন, ৬৩ নিউ ইস্কাটন, ঢাকা ১০০০</span><br> 
							<span style="font-size:12px;">Email: bcswmcs@gmail.com</span> <br>
							<span style="font-size:12px;">Website: www.bcsadminwelfare.org.bd</span></p> -->
						</div>
					</td>
					<td width="20%">
						<?php 
						$img_path = base_url('member_img/');
						if($info->image_file != NULL){
							$src= $img_path.$info->image_file;
							echo "<img src='".$src."' width='100'>";
						}
						?>
					</td>
				</tr>
		</table>


			<div class="priview-memorandum">
				<div class="row">
					<div class="col-12 text-center">
						<div style="font-size:18px;"><u>সদস্যের বিস্তারিত তথ্য</u></div>		
						তারিখঃ <?=date_bangla_calender_format(date('d-m-Y'))?>
					</div>
				</div>
			</div>

			<div class="col-md-6">
                    <fieldset>
                      <legend style="color: #ffffff;font-weight: 700; background-color: #3c8dbc;padding: 5px;">সদস্যের তথ্য</legend> 
                      <table class="tg" style="text-align: left;">
                        <caption style="color: #10192d;font-weight: 700; background-color: #ffffff;padding: 5px;">সদস্যের সাধারণ তথ্য</caption>

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
                          <td class="tg-0pky"><?=eng2bng($info->child_dob)?></td>                
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">লিঙ্গ:</td>
                          <td class="tg-0pky"><?=$info->gender?></td>
                        <!-- </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">বয়স:</td>
                          <td class="tg-0pky"><?=eng2bng($info->child_age)?></td>
                        </tr>
                        <tr>
                          <td class="tg-9czc" style="font-weight: bolder;">ওজন:</td>
                          <td class="tg-0pky"><?= eng2bng($info->child_weight) ?></td>
                       <!--  </tr>
                        <tr> -->
                          <td class="tg-9czc" style="font-weight: bolder;">উচ্চতা:</td>
                          <td class="tg-0pky"><?=eng2bng($info->child_height)?></td>
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
                          <td class="tg-0pky" colspan="2"><?=$info->child_father_pay_scale?></td>
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




			

		</body>
		</html>


