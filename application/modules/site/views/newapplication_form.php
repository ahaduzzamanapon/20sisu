 <style>
    /* ---------------------------------------------------------------
    *
    *  # Steps wizard
    *
    *  An all-in-one wizard plugin that is extremely flexible, compact and feature-rich
    *
    * --------------------------------------------------------- */
    /*=================================
              Registration
    ===================================*/


    .form-wizard {
      color: #4b4444 !important;
      padding: 15px 0px;
    }
    label {
      margin-bottom: .1rem !important;
    }

    .list-unstyled {
        margin-bottom: 20px;
    }

    .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
      background-color: rgba(23,36,49,1);
      color: #ffffff;
      display: inline-block;
      min-width: 100px;
      min-width: 95px;
      padding: 8px;
      margin-top: 20px;
      text-align: center;
    }

    .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
      color: #ffffff;
      opacity: 0.6;
      text-decoration: none;
    }
    .form-wizard .wizard-fieldset {
      display: none;
    }

    .form-wizard .wizard-fieldset.show {
      display: block;
    }
    .form-wizard .wizard-form-error {
      display: none;
      background-color: #d70b0b;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 2px;
      width: 100%;
    }
    .form-wizard .form-wizard-previous-btn {
        background-color: rgba(23,36,49,1);
    }

    .form-wizard .form-control:focus {
      box-shadow: none;
    }

    .form-wizard .form-group {
      position: relative;
      /*margin: 25px 0 0 0;*/
    }

    .form-wizard .form-wizard-steps li {
      width: 11%;
      float: left;
      position: relative;
      left: 3%;
    }
    .form-wizard .form-wizard-steps li::after {
      background-color: #f3f3f3;
      content: "";
      height: 5px;
      left: 0;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      border-bottom: 1px solid #dddddd;
      border-top: 1px solid #dddddd;
    }
    .form-wizard .form-wizard-steps li span {
      background-color: #dddddd;
      border-radius: 50%;
      display: inline-block;
      height: 35px;
      line-height: 35px;
      position: relative;
      text-align: center;
      width: 42px;
      z-index: 1;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
      /*width: 50%;*/
      width: 0%;
    }
    .form-wizard .form-wizard-steps li:last-child {
        width: 0% !important;
        float: left;
        
    } 

    .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
      background-color: rgba(23,36,49,1);
      color: #ffffff;
    }
    .form-wizard .form-wizard-steps li.activated span, .form-wizard .form-wizard-steps li.activated span {
      background: #31d200;
      color: #ffffff;
    }
    .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
      background-color: rgba(23,36,49,1);
      /*left: 50%;
      width: 50%;*/
    }
    .form-wizard .form-wizard-steps li.activated::after{
      width: 100%;
      border-color: #31d200;
      background: #31d200;
    }
    .form-wizard .form-wizard-steps li:last-child::after {
      left: 0;
    }
    .form-wizard .wizard-password-eye {
      position: absolute;
      right: 32px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }

 </style> 
<div class="row">
  <?php $this->load->view('frontend/right_side_bar'); ?>   
  
  <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
    <script>
      function func_details(id){
          // alert(id);
          $.ajax({
             type: "GET",
             url: hostname+'index.php/site/app_view/'+id,
             success: function(response) {
                // AppendResponse(response);
                // alert(response);
                $('.appview').show();
                $('.applications-list').hide();
                $('.list_view').show();
                $('.appview').html(response);
                // console.log(response);
             }
          });
      }

      $(".list_view").click(function(){
        $('.applications-list').show();
        $('.appview').hide();
        $('.list_view').hide();
      });
    </script>

    <div class="form-wizard">
       <form action="<?=base_url('index.php/new-application/'.$student_info->day_cares_id.'/'.$student_info->member_id)?>" method="post" enctype="multipart/form-data"> 

          <ul class="list-unstyled form-wizard-steps clearfix">
            <li class="active"><span>পার্ট ১</span></li>
            <li><span>পার্ট ২</span></li>
            <li><span>পার্ট ৩</span></li>
            <li><span>পার্ট ৪</span></li>
            <li><span>পার্ট ৫</span></li>
            <li><span>পার্ট ৬</span></li>
            <li><span>পার্ট ৭</span></li>
            <li><span>পার্ট ৮</span></li>
            <li><span>পার্ট ৯</span></li>
            <!-- <li><span>পার্ট ১০</span></li> -->
          </ul>

          <fieldset class="wizard-fieldset scheduler-border show">
            <legend class="scheduler-border">পার্ট-১: শিশুর তথ্য  </legend>
            <div class="row form-row">
               <div class="col-md-8">
                  <div class="form-group">
                    <label>১. শিশুর নাম</label>
                    <input type="text" name="members[child_name]" value="<?=set_value('child_name', $student_info->child_name)?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="form-group">
                     <label>২. লিঙ্গ</label><br>
                     <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> ছেলে 
                     <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মেয়ে
                  </div>
               </div>                   
            </div>

            <div class="row form-row">
              <div class="form-group">
                <div class="col-md-5">
                  <label>৩. শিশুর জন্ম তারিখ ও জন্ম সনদ নম্বর:</label>
                </div> 
                <div class="col-md-7">
                  <div class="form-group">
                    <input type="date" name="members[child_dob]" value="<?=set_value('child_dob',$student_info->child_dob)?>" class="form-control wizard-required" placeholder="" autocomplete="off">
                    <div class="wizard-form-error"></div>
                  </div>
                  <div class="form-group">
                    <input type="number" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no', $student_info->birth_certificate_no)?>" class="form-control wizard-required">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row ">
              <div class="form-group">
                <div class="col-md-4">
                   <label>৪।  ভর্তির তারিখ:</label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="date" name="members[admission_date]" value="<?=set_value('admission_date')?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
                  <br>
                </div>
              </div>
            </div>

            <div class="row ">
              <div class="form-group">
                <div class="col-md-4">
                  <label>৫।  ভর্তির তারিখে শিশুর বয়স</label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" name="members[child_age]" value="<?=set_value('child_age')?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
                    <br>
                </div>
              </div>
            </div>
             
            <div class="row form-row">
              <div class="form-group">
                <div class="col-md-3">
                  <label>৬। শিশুর বর্তমান ওজনঃ</label>
                </div>   
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" name="members[child_weight]" value="<?=set_value('child_weight')?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>
                <div class="col-md-1">
                  <label>উচ্চতাঃ</label>
                </div>   
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" name="members[child_height]" value="<?=set_value('child_height')?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>
                <div class="col-md-2">
                  <label>জন্ম চিহ্নঃ</label>
                </div>   
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" name="members[birth_mark]" value="<?=set_value('birth_mark')?>" class="form-control wizard-required" placeholder="">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>
              </div>   
            </div>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset>

          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-২: শিশুর চিকিৎসা সংক্রান্ত তথ্য </legend>

            <div class="row form-row">
              <div class="col-md-8">
                <div class="form-group">
                  <label>৭। শিশুর বিশেষ কোন শারিরীক অসুস্থতা (মারাত্বক যখম বা অপারেশন) থাকলে তার বর্ণনা: </label>
                  <input type="text" name="members[child_diseases_name]" value="<?=set_value('child_diseases_name')?>" class="form-control">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>৮। শিশু নিয়মিত কোন ঔষধ সেবন করে কিনা?</label>
                  <input type="radio" name="members[child_diseases_medicine]" value="Yes" <?=set_value('child_diseases_medicine')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[child_diseases_medicine]" value="No" <?=set_value('child_diseases_medicine')=='No'?'':'';?>> না
                </div>
              </div>
            </div> 

            <h5>হ্যাঁ হলে</h5>

            <div class="row form-row"> 
              <div class="col-md-8">
                <div class="form-group">
                  <label>ক. ঔষধের নাম ও সেবনের মাত্রা ও সময়</label>
                  <input type="text" name="members[child_diseases_medicine_range]" value="<?=set_value('child_diseases_medicine_range')?>" class="form-control">
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label>খ. রোগের কারণ</label>
                  <input type="text" name="members[child_diseases_reason]" value="<?=set_value('child_diseases_reason')?>" class="form-control">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>গ. প্রেসক্রিপশন সংযুক্ত করেছেন কিনা?</label>
                  <input type="radio" name="members[child_diseases_prescription]" value="Yes" <?=set_value('child_diseases_prescription')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[child_diseases_prescription]" value="No" <?=set_value('child_diseases_prescription')=='No'?'':'';?>> না
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>৯। ক)  শিশুর চোখ, কান, দাঁতের পরীক্ষা করা হয়েছে কিনা?</label>
                  <input type="radio" name="members[describe_health_problem]" value="Yes" <?=set_value('describe_health_problem')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[describe_health_problem]" value="No" <?=set_value('describe_health_problem')=='No'?'':'';?>> না
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>খ) হ্যাঁ হলে পরীক্ষার ফলাফল: </label>
                  <input type="text" name="members[child_diseases_result]" value="<?=set_value('child_father_name')?>" class="form-control">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>১০। ক)  শিশুর বিশেষ কোন খাদ্যে সমস্যা/এলার্জি আছে কি?</label>
                  <input type="radio" name="members[child_allergic_food]" value="Yes" <?=set_value('child_allergic_food')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[child_allergic_food]" value="No" <?=set_value('child_allergic_food')=='No'?'':'';?>> না
                </div>
              </div>


              <div class="col-md-8">
                <div class="form-group">
                  <label>খ) হ্যাঁ হলে তার বর্ণনা</label>
                  <input type="text" name="members[describe_food]" value="<?=set_value('describe_food')?>" class="form-control">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>গ) নির্দিষ্ট খাদ্যের নাম</label>
                  <input type="text" name="members[child_allergic_food_name]" value="<?=set_value('child_allergic_food_name')?>" class="form-control">
                </div>
              </div>


              <div class="col-md-8">
                <div class="form-group">
                  <label>১১। ক) শিশুর করোনা/জলবসন্ত/মাম্পস/অন্যান্য কোন সংক্রামণ রোগ হয়েছিল কিনা?</label>
                  <input type="radio" name="members[child_viral_disease]" value="Yes" <?=set_value('child_viral_disease')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[child_viral_disease]" value="No" <?=set_value('child_viral_disease')=='No'?'':'';?>> না
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>খ) হ্যাঁ হলে তার প্রমাণপত্রঃ </label>
                  <input type="text" name="members[child_viral_disease_proof]" value="<?=set_value('child_viral_disease_proof')?>" class="form-control">
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>১২। ক)  বয়স অনুযায়ী শিশুর প্রয়োজনীয় টিকাসমুহ সম্পন্ন হয়েছে কিনা?</label><br>
                  <input type="radio" name="members[child_vaccination]" value="Yes" <?=set_value('child_vaccination')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                  <input type="radio" name="members[child_vaccination]" value="No" <?=set_value('child_vaccination')=='No'?'':'';?>> না
                </div>
              </div>

              <div class="col-md-8">
                <div class="form-group">
                  <label>খ) (উত্তর "না" হলে) কোন কোন টিকা দেওয়া হয়নি?</label>
                  <input type="text" name="members[child_novaccine_reason]" value="<?=set_value('child_novaccine_reason')?>" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <div class="row form-row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>১৩। আপনার শিশুর শীর্ষ তিনটি উল্লেখযোগ্য গুনাবলী চিহ্নিত করুন:</label><br>
                  <table class="table">
                   <tr>
                  <td> <input type="checkbox" name="members[child_strong_side]" value="1"> অ্যাথলেটিক</td></td>
                  <td> <input type="checkbox" name="members[child_strong_side]" value="1"> সহানুভুতিশীল</td>
                  <td> <input type="checkbox" name="members[child_strong_side]" value="1">স্নেহময়</td>
                  <td> <input type="checkbox" name="members[child_strong_side]" value="1"> আত্মসচেতন<br></td>
                   </tr>
                   <tr>

                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সাহসী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> উৎসাহী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> অনুগত</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সামাজিক<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সহযোগী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> উদ্যমী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সঙ্গীতপ্রেমী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> চিন্তাশীল<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সৃজনশীল</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> ক্ষমাশীল</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> আশাবাদী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সুনিয়ন্ত্রিত<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> কৌতুহলী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> বন্ধুসুলভ</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> কৌতুকপূর্ণ</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> হস্যোউজ্জল<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সিদ্ধান্তমূলক</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সৎ</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> সম্ভাবনাময়</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> মনোযোগী<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> অধ্যাবসায়ী</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> কল্পনাপ্রবণ<br></td>
                   </tr>
                   <tr>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> ন্যায়পরায়ণ</td>
                   <td><input type="checkbox" name="members[child_strong_side]" value="1"> দয়ালু<br></td>
                   </tr>
                   </table>
                </div>
              </div>
            </div>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <div class="row form-row">
              <div class="col-md-12">
                <label>১৪। আপনার শিশুর শীর্ষ তিনটি দূর্বল দিক চিহ্নিত করুন:</label><br>
                <table class="table">
                  <tr>
                    <td> <input type="checkbox" name="members[child_week_side]" value="1"> আক্রমণাত্মক মনোভাব</td></td>
                    <td> <input type="checkbox" name="members[child_week_side]" value="1"> নিয়ম ভঙ্গের প্রবণতা</td>
                    <td> <input type="checkbox" name="members[child_week_side]" value="1"> শ্রবণ ক্ষমতার হ্রাস</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> বাড়িতে অন্যদের প্রতি আক্রমনাত্মক মনোভাব</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> জটিল</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> ভাষা বিকাশে বিলম্ব</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> অস্থিরতা</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> প্রানির প্রতি নিষ্ঠুরতা</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> শেখার অক্ষমতা</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1">ভয়/উদ্বেগ/অস্বস্তি</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> হতাশা</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> কম আত্মসম্মান</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> ম্নোযোগ</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> বিকাশে বিলম্ব</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> মিথ্যা বলা</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> ব্যাধি গ্রস্ত</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> সৎবেদনশীল</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> অবহেলা করা</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> আচরণগত</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> মানসিক বা শারীরিক নির্যাতন<br></td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> বিরোধী প্রতীবাদ<br></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> সামাজিক সমস্যা</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> সহিংসতা বা ট্রমার পরে যত্নশীল</td>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> রাগী</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="members[child_week_side]" value="1"> আসামাজিক মনভাব<br></td>
                  </tr>
                </table>
                <div class="col-md-8">
                  <div class="form-group">
                    <label>১৫। (ক) আপনার শিশুর সামাজিক, আবেগীক, স্পর্শকাতর ও আচরণগত কোন উদ্বেগ আপনার আছে কি ?</label>
                    <input type="radio" name="members[child_social_describe_value]" value="Yes" <?=set_value('child_social_describe_value')=='Yes'?'':'';?>> হ্যাঁ 
                    <input type="radio" name="members[child_social_describe_value]" value="No" <?=set_value('child_social_describe_value')=='No'?'checked':'checked';?>> না<br>
                    <label>(খ) (উত্তর হ্যাঁ হলে) তার সংক্ষিপ্ত বিবরণ</label>
                    <input type="text" name="members[child_social_describe]" value="<?=set_value('child_social_describe')?>" class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-৫: জরুরি যোগাযোগ ও সেন্টারে শিশুকে দেওয়া-নেওয়ায় নিয়োজিত ব্যক্তিবর্গের তালিকা </legend>
            <div class="row form-row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>১৬। ক)  নাম</label>
                    <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="form-control wizard-required">
                    <div class="wizard-form-error"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>ঠিকানা</label>
                  <input type="text" name="registrations[child_parents_present_address]" value="<?=set_value('child_parents_present_address')?>" class="form-control wizard-required">
                  <div class="wizard-form-error"></div>
                </div>
              </div>

              <div class="form-row">   
                <div class="col-md-6">
                  <div class="form-group">
                    <label>অভিভাবকের জাতীয় পরিচয় পত্রের নম্বর</label>
                    <input type="number" name="registrations[child_parents_national_no]" value="<?=set_value('child_parents_national_no')?>" class="form-control wizard-required">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>মোবাইল নম্বর</label>
                    <input type="number" name="registrations[child_parents_ph_no]" value="<?=set_value('child_parents_ph_no')?>" class="form-control wizard-required">
                    <div class="wizard-form-error"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                    <label>শিশুর সাথে সম্পর্ক</label>
                    <input type="text" name="registrations[child_parents_relation]" value="<?=set_value('child_parents_relation')?>" class="form-control wizard-required">
                    <div class="wizard-form-error"></div>
                  </div>
              </div> 
           </div>

            <div class="row form-row">
                <div class="col-md-6">
                   <div class="form-group">
                      <label>খ) নাম</label>
                      <input type="text" name="registrations[child_parents_name_2]" value="<?=set_value('child_parents_name_2')?>" class="form-control wizard-required">
                      <div class="wizard-form-error"></div>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label>ঠিকানা</label>
                      <input type="text" name="registrations[child_parents_present_address_2]" value="<?=set_value('child_parents_present_address_2')?>" class="form-control wizard-required">
                      <div class="wizard-form-error"></div>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                      <label>অভিভাবকের জাতীয় পরিচয় পত্রের নম্বর</label>
                      <input type="number" name="registrations[child_parents_ph_no_2]" value="<?=set_value('child_parents_ph_no_2')?>" class="form-control wizard-required">
                      <div class="wizard-form-error"></div>
                   </div>
                </div>
            </div>

            <div class="row form-row">   
                <div class="col-md-6">
                   <div class="form-group">
                      <label>মোবাইল নম্বর</label>
                      <input type="number" name="registrations[child_parents_national_no_2]" value="<?=set_value('child_parents_national_no_2')?>" class="form-control wizard-required">
                      <div class="wizard-form-error"></div>
                   </div>
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                      <label>শিশুর সাথে সম্পর্ক</label>
                      <input type="text" name="registrations[child_parents_relation_2]" value="<?=set_value('child_mother_designation_2')?>" class="form-control wizard-required">
                      <div class="wizard-form-error"></div>
                   </div>
                </div> 
            </div>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-৬: শিশুর অসুস্থতা নীতি সংক্রান্ত অঙ্গীকারনামা</legend>
            <p>•  দিবাযত্ন কেন্দ্রে আপনার সন্তান এবং অন্য শিশুদের সুস্থতার স্বার্থে আপনার শিশু রোগাক্রান্ত হলে তাকে ঘরেই রাখবেন।</p>

            <p>•  যদি কোভিড-১৯ ভাইরাসে পরিবারের কোন সদস্য সংক্রমিত হয়ে থাকে তবে অবশ্যই কোয়ারেন্টাইনে থাকবেন এবং স্বাস্থ্য মন্ত্রণালয় কর্তৃক প্রদত্ত  সুস্থতার প্রত্যয়ন পাওয়ার পর সেন্টারে শিশুকে নিয়মিত করবেন।</p>

            <p>•  জ্বর হলে শিশুকে দিবাযত্ন কেন্দ্রে প্রেরণ করা থেকে বিরত থাকবেন। সেক্ষেত্রে জ্বর কমে যাওয়ার পর পরবর্তী ২৪ ঘন্টা পর্যন্ত শিশুর দেহের স্বাভাবিক তাপমাত্রা (৯৮.৬ ডিগ্রি ফারেনহাইট) থাকলে তবেই তাকে দিবাযত্ন কেন্দ্রে পাঠাবেন।</p>

            <p>•  ডায়রিয়া, বদহজম, পেটে ব্যথা দেখা দিলে সেন্টারে পাঠানো থেকে বিরত থাকবেন। এ অবস্থায় দ্রুত চিকিৎসকের পরামর্শ অনুযায়ী ব্যবস্থা নিবেন। ডায়রিয়া থেকে সুস্থ হবার পর ২৪ ঘন্টা পর্যবেক্ষণ করে শিশুকে কেন্দ্রে পাঠাতে পারবেন। এক্ষেত্রে চিকিৎসকের ব্যবস্থাপত্র সংযুক্ত করতে হবে। </p>

            <p>•  চোখ উঠা, চোখে এলার্জি কিংবা চোখ থেকে তরল নিঃসরণ হলে  সুস্থ না হওয়া পর্যন্ত  দিবাযত্ন কেন্দ্রে  পাঠানো থেকে বিরত থাকবেন। সুস্থ হওয়ার পর ২৪ ঘন্টা বাড়িতে পর্যবেক্ষণ করে কেন্দ্রে পাঠাবেন।</p>

            <p>•  যে কোন কারণে বমি হলে শিশুর  বমি বন্ধ হওয়ার পর  ২৪ ঘন্টা পর্যবেক্ষণ করে কেন্দ্রে পাঠাবেন।</p>

            <p>•  বিভিন্ন চর্মরোগ যেমন- একজিমা, স্ক্যাবিস বা চুলকানি প্রভৃতি দেখা দিলে শিশুকে সুস্থ না হওয়া পর্যন্ত সেন্টারে পাঠানো থেকে বিরত থাকবেন এবং দ্রুত চিকিৎসকের পরামর্শ অনুযায়ী ব্যবস্থা নিবেন।</p>

            <p>•  চিকেন পক্স অথবা জলবসন্ত হলে সুস্থ হবার (১৮-২১) দিন পর শিশুকে কেন্দ্রে নিয়মিত করবেন।</p>

            <p>•  শিশুর মাথায় উকুন ও অন্যান্য পরজীবীর  সংক্রমণ হলে সেন্টারে পাঠানো থেকে বিরত থাকবেন এবং দ্রুত চিকিৎসকের পরামর্শ অনুযায়ী ব্যবস্থা নিবেন।</p>

            <p>•  যদি কেন্দ্রে আপনার শিশু অসুস্থ হয়ে পড়ে এবং ঐ মুহূর্তে আপনাকে অবগত করা হয় তবে যত দ্রুত সম্ভব আপনার শিশুকে দিবাযত্ন কেন্দ্র থেকে নিয়ে যাওয়ার জন্য অনুরোধ করা হলো। শিশু পরিপূর্ণরুপে সুস্থ না হওয়া পর্যন্ত কেন্দ্রে শিশুকে কখনই গ্রহণ করা হবে না। </p>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-৭: জরুরি চিকিৎসা সেবা প্রদানের সম্মতি</legend>
            <p>কোন দুর্ঘটনা বা অসুস্থতার কারণে উদ্ভূত জরুরি পরিস্থিতিতে শিশুকে তাৎক্ষণিক চিকিৎসা দেওয়ার প্রয়োজন হলে এবং সেই মুহূর্তে পিতামাতা বা অভিভাবকের সাথে যোগাযোগ করা সম্ভব না হলে নিম্নে উল্লিখিত শিশুকে প্রয়োজনীয় চিকিৎসা সেবা প্রদানের জন্য নিকটস্থ হাসপাতালে বা চিকিৎসা কেন্দ্রে নিয়ে যাওয়ার অনুমতি প্রদান করা হলো। স্বাস্থ্য শিক্ষিকা শিশুটির সঙ্গে চিকিৎসা কেন্দ্রে  যাবেন এবং চিকিৎসকের পরামর্শ অনুযায়ী শিশুটিকে চিকিৎসা সেবা প্রদান করবেন। আমি আরও সম্মতি প্রদান করছি যে, এ জরুরি অবস্থায় আমার শিশুর সকল চিকিৎসা সংক্রান্ত ব্যয় বহন করা আমার দায়িত্ব।</p><br>

            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 


          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-৮: শিশুর কার্যাবলী ও বিশেষ অনুষ্ঠানের ছবি ও তথ্যচিত্র ব্যবহারের অনুমতি</legend>
            আমি আমার শিশু 
             <p><?php echo $student_info->child_name;?><p> এর  ছবি ও তথ্যচিত্র  ব্যবহারে সম্মতি দিলাম।
            <table>
               <tr>
                  <td>১. কেন্দ্রের সামাজিক যোগাযোগ মাধ্যম যেমন ফেসবুকে ব্যবহারের জন্য     </td><td>&nbsp;</td><td>:</td><td>&nbsp;</td>
                  <td><input type="radio" name="hello">হ্যাঁ             <input type="radio" name="hello">না</td>
               </tr>
               <tr>
                  <td>২. দিবাযত্ন কেন্দ্রের ওয়েবসাইটে ব্যবহারের জন্য     </td><td>&nbsp;</td><td>:</td><td>&nbsp;</td>
                  <td><input type="radio" name="hello1">হ্যাঁ             <input type="radio" name="hello1">না</td>
               </tr>
               <tr>
                  <td>৩. অন্যান্য অভিভাবকের ব্যবহারের জন্য     </td><td>&nbsp;</td><td>:</td><td>&nbsp;</td>
                  <td><input type="radio" name="hello2">হ্যাঁ             <input type="radio" name="hello2">না</td>
               </tr>
               <tr>
                  <td>৪. পোস্টার বা লিফলেটে ব্যবহারের জন্য     </td><td>&nbsp;</td><td>:</td><td>&nbsp;</td>
                  <td><input type="radio" name="hello3">হ্যাঁ             <input type="radio" name="hello3">না</td>
               </tr>
            </table>
            <div class="form-group clearfix">
              <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
              <a href="javascript:;" class="form-wizard-next-btn float-right">পরবর্তী</a>
            </div>
          </fieldset> 

          <fieldset class="wizard-fieldset scheduler-border">
            <legend class="scheduler-border">পার্ট-৯: শিশু ভর্তির অঙ্গীকারনামা</legend>
            <p>
               আমি বুঝতে পেরেছি যে সময়মত মাসিক সেবামূল্য প্রদান করতে ব্যর্থ হলে আমার শিশুর দিবাকালীন সেবা অব্যাহত রাখা হবে না। আমার শিশুকে অবশ্যই বিকাল ৬.০০ ঘটিকার মধ্যে কেন্দ্র থেকে নেওয়ার ব্যবস্থা করবো। তবে বিশেষ প্রয়োজনে আমার শিশুকে বিকাল ৬:০০ টার পরে নিতে আসলে প্রতি মিনিটের জন্য ৫/- (পাঁচ) টাকা এবং ৬:৩০ টার পর প্রতি মিনিটের জন্য ২৫/- (পচিশ) টাকা ফি প্রযোজ্য হবে যা দায়িত্বে নিয়োজিত কর্মীকে দিতে বাধ্য থাকবো।
               এই শর্তগুলি মেনে শিশু দিবাযত্ন কেন্দ্রে আমি আমার শিশু ভর্তি করার জন্য ভর্তি ফরমের সাথে নিম্নলিখিত কাগজ পত্রাদি সংযুক্ত করেছি।

            </p>
            <h4>(<i class="fa fa-check" aria-hidden="true"></i> চিহ্ন দিন)</h4>

             <span>সংযুক্তি :</span>     
            <!-- <br><input type="checkbox" name="">  শিশুর পাসপোর্ট সাইজের ও ২ (দুই) কপি স্ট্যাম্প সাইজের ছবি; -->
            <br><input type="checkbox" name="">  পিতা-মাতা বা আভিভাবকের পাসপোর্ট সাইজের ছবি;
            <br><input type="checkbox" name="">  শিশুর স্ট্যাম্প সাইজের ছবি;
            <div class="form-group">
              <div><?php echo form_error('userfile1'); ?></div>
              <input type="file" name="userfile1" class="wizard-required"> 
              <div class="wizard-form-error"></div>            
            </div> 

            <br><input type="checkbox" name="">  শিশুর টিকা কার্ড;   
            <div class="form-group">
              <div><?php echo form_error('userfile2'); ?></div>
              <input type="file" name="userfile2" class="wizard-required"> 
              <div class="wizard-form-error"></div>           
            </div>

            <br>

            <fieldset>
              <h4>এই মর্মে প্রত্যয়ন করা যাচ্ছে যে, উপরের সকল তথ্যাবলী আমার জানা মতে সত্য ও সঠিক এবং শিশু ভর্তির সকল নিয়ম মেনে আমার শিশু কে সেন্টারে ভর্তি করছি</h4><br>

              <div class="row form-row">
                 <div class="col-md-6">
                    <div class="form-group">
                       <label>মাতা বা পিতা বা অভিভাবকের স্বাক্ষর</label>
                       <div><?php echo form_error('userfile'); ?></div>
                       <input type="file" name="userfile" class="wizard-required" required="">
                       <div class="wizard-form-error"></div>
                    </div>
                 </div>

                 <div class="col-md-6">
                    <div class="form-group">
                       <label>তারিখ</label>
                       <input type="date" name="registrations[reg_date]" value="<?=set_value('reg_date')?>" class="form-control wizard-required" placeholder="" autocomplete="off" required="">
                       <div class="wizard-form-error"></div>
                    </div>
                 </div>
              </div>
            </fieldset>

             <div class="form-group clearfix">
                <a href="javascript:;" class="form-wizard-previous-btn float-left">পূর্ববর্তী</a>
                <input type="submit" name="submit" class="form-wizard-submit float-right" value="সংরক্ষণ করুন">
             </div>
          </fieldset> 
       </form>
    </div>

  </div>
</div>



<script>
   jQuery(document).ready(function() {
      // click on next button
      jQuery('.form-wizard-next-btn').click(function() {
         var parentFieldset = jQuery(this).parents('.wizard-fieldset');
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         var next = jQuery(this);
         var nextWizardStep = true;
         parentFieldset.find('.wizard-required').each(function(){
            var thisValue = jQuery(this).val();

            if( thisValue == "") {
               jQuery(this).siblings(".wizard-form-error").slideDown();
               nextWizardStep = false;
            }
            else {
               jQuery(this).siblings(".wizard-form-error").slideUp();
            }
         });
         if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
               if(jQuery(this).hasClass('show')){
                  var formAtrr = jQuery(this).attr('data-tab-content');
                  jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                     if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                     }else{
                        jQuery(this).removeClass('active');
                     }
                  });
               }
            });
         }
      });
      //click on previous button
      jQuery('.form-wizard-previous-btn').click(function() {
         var counter = parseInt(jQuery(".wizard-counter").text());;
         var prev =jQuery(this);
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         prev.parents('.wizard-fieldset').removeClass("show","400");
         prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
         currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
         jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
               var formAtrr = jQuery(this).attr('data-tab-content');
               jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                  if(jQuery(this).attr('data-attr') == formAtrr){
                     jQuery(this).addClass('active');
                     var innerWidth = jQuery(this).innerWidth();
                     var position = jQuery(this).position();
                     jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                  }else{
                     jQuery(this).removeClass('active');
                  }
               });
            }
         });
      });
      //click on form submit button
      jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
         var parentFieldset = jQuery(this).parents('.wizard-fieldset');
         var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
         parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();
            if( thisValue == "" ) {
               jQuery(this).siblings(".wizard-form-error").slideDown();
            }
            else {
               jQuery(this).siblings(".wizard-form-error").slideUp();
            }
         });
      });
      // focus on input field check empty or not
      jQuery(".form-control").on('focus', function(){
         var tmpThis = jQuery(this).val();
         if(tmpThis == '' ) {
            jQuery(this).parent().addClass("focus-input");
         }
         else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
         }
      }).on('blur', function(){
         var tmpThis = jQuery(this).val();
         if(tmpThis == '' ) {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
         }
         else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");
         }
      });
   });
</script>