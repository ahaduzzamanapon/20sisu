<style type="text/css">
   .carousel-indicators li{ display: none; }

   table,th, td{
        padding-right: 10px;
        border: 0px solid black;
        border-collapse: collapse;

        text-align: center;
        vertical-align: center;
      }

   .crop {
        width: 100%;
        height: 150px;
        overflow: hidden;
    }

    .main-content {
          min-height: 910px;
    }

    .button {
     background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 10px 15px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     margin: 5px 0 25px 0;
     cursor: pointer;
     display: block;
   }
   .button2 {background-color: #008CBA;} /* Blue */
   .button3 {background-color: #f44336;} /* Red */ 
   .button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
   .button5 {background-color: #555555;} /* Black */
   /*.galance a{font-size: 30px; font-family: "arial"}
   .galance a:hover{text-decoration: none; color: white; }*/

   .button_btn {
     /*background-color: #4CAF50;  Green */
     border: none;
     color: white;
     padding: 5px 5px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     /* height: 45px; */
     margin: 15px 0 0px 0;
     cursor: pointer;
     display: block;
   }

   /*a:hover .button_btn{}*/
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">
      <!-- <div class="inner-content"> -->
      <section class="slider">
         <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
               <li data-target="#myCarousel" data-slide-to="4"></li>
               <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

            <?php 

            $slider=$this->db->get('slider')->result();

            foreach($slider as $key=>$value){

            ?>
               <div class="item <?=$key==0?'active':''?>">
                  <img src="<?=base_url('assets/images/slider_img/').$value->image_file?>" alt="slider1" style="width:100%; height: 200px;">
               </div>
               <?php } ?>
               <!-- <div class="item">
                  <img src="<?=base_url();?>assets/images/slider_img/Slideshow02.jpg" alt="slider2" style="width:100%; height: 200px;">
               </div>

               <div class="item">
                  <img src="<?=base_url();?>assets/images/slider_img/Slideshow303.jpg" alt="slider3" style="width:100%; height: 200px;">
               </div>

               <div class="item">
                  <img src="<?=base_url();?>assets/images/slider_img/Slideshow004.jpg" alt="slider4" style="width:100%; height: 200px;">
               </div>

               <div class="item">
                  <img src="<?=base_url();?>assets/images/slider_img/Slideshow05.jpg" alt="slider5" style="width:100%; height: 200px;">
               </div> -->
            </div>
            <?php /*
            <!-- Left and right controls -->
            <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span .crop {
        width: 200px;
        height: 150px;
        overflow: hidden;
    }class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
            </a> --> 
            */ ?>
         </div>
      </section>  


      <section class="project">

      <!-- <a href="<?=base_url('at-a-galance')?>" class="button button3" style="font-size: 30px; font-family: arial;">At A Galance: 20 New Child Day Care  Centres</a> -->

         <!-- <h4 class="heading-int">দিবাযত্ন কেন্দ্র স্থাপন প্রকল্প</h4> -->

         <?php $this->load->view('children_food')?>

<style type="text/css">
  h5{ font-weight: bold;
    /* border-bottom: 5px solid red; */
    font-size: 18px;
    padding-bottom: 0px;
    margin-bottom: 3px;}
    h5 a{text-decoration: none;}
    p{margin-top: 10px;}
</style>

         <br>

         <div class="row">
           <div class="col-md-4">
             <h5 style="color: #176bb7;" ><a href="<?=base_url('index.php/six-to-twelve-children-day-care')?>">দিবাকালীন যত্ন</a></h5>
             <span style="width: 45px; height: 5px; background-color: red; display: block; padding-bottom: 5px;"></span>
             <p>খাবার খাওয়ানো, ঘুমানো, দাঁত ব্রাশ, টয়লেট ট্রেনিং, হাত ধোয়া, নখ কাঁটা ও পরিষ্কার পরিচ্ছন্নতা </p>
           </div>
           <div class="col-md-4">
             <h5><a href="<?=base_url('index.php/primary-health-2')?>" style="text-decoration: none;">প্রাথমিক স্বাস্থ্যসেবা</a></h5>
             <span style="width: 45px; height: 5px; background-color: blue; display: block; padding-bottom: 5px;"></span>
             <p>জরুরী স্বাস্থ্য সেবা, টিকাদান, চোঁখ, কান, দাঁত ও ত্বকের যত্ন এবং কৃমি নিয়ন্ত্রন</p>
           </div>
           <div class="col-md-4">
             <h5 style="color: #176bb7;" >প্রাক-প্রাথমিক শিক্ষা</h5>
             <span style="width: 45px; height: 5px; background-color: green; display: block; padding-bottom: 5px;"></span>
             <p>সামাজিক, মানসিক, আবেগীয়, ভাষাগত ও বুদ্ধিবৃত্তিক</p>
           </div>
          </div>

          <div class="row">
           <div class="col-md-4">
             <h5 ><a href="<?=base_url('index.php/food')?>" style="text-decoration: none;">খাদ্য ও পুষ্টি</a></h5>
             <span style="width: 45px; height: 5px; background-color: green; display: block; padding-bottom: 5px;"></span>
             <p>সুষম খাবার, ষ্টান্টিং, কম ওজন, বেশী ওজন</p>
           </div>
           <div class="col-md-4">
             <h5><a href="<?=base_url('index.php/physical-growth')?>" style="text-decoration: none;">শারীরিক বিকাশ</a></h5>
             <span style="width: 45px; height: 5px; background-color: red; display: block; padding-bottom: 5px;"></span>
             <p>ওজন, উচ্চতা, সুক্ষ ও বৃহৎ পেশী সঞ্চালন</p>
           </div>
           <div class="col-md-4">
             <h5><a href="<?=base_url('index.php/mental-growth')?>" style="text-decoration: none;">মানসিক বিকাশ</a></h5>
             <span style="width: 45px; height: 5px; background-color: blue; display: block; padding-bottom: 5px;"></span>
             <p>জ্ঞানীয়, আবেগ নিয়ন্ত্রন, সামাজিক দক্ষতা, ভাষাগত দক্ষতা ও মননশীলতা</p>
           </div>
         </div>

         <div class="row">
           <div class="col-md-4">
             <h5 ><a href="<?=base_url('index.php/entertainment-art')?>" style="text-decoration: none;">চিত্ত বিনোদন</a></h5>
             <span style="width: 45px; height: 5px; background-color: blue; display: block; padding-bottom: 5px;"></span>
             <p>ছবি আঁকা, গান, নাচ, গল্প, ছড়া, টিভি দেখা, খেলাধুলা</p>
           </div>
           <div class="col-md-4">
             <h5><a href="<?=base_url('index.php/security')?>" style="text-decoration: none;">নিরাপত্তা ও অধিকার</a></h5>
             <span style="width: 45px; height: 5px; background-color: green; display: block; padding-bottom: 5px;"></span>
             <p>শিশু অধিকার, জরুরী পরিস্থিতি, অবৈষম্যমূলক আচরন </p>
           </div>
           <div class="col-md-4">
             <h5 style="color: #176bb7;" >প্রকৃতি এবং বিনোদন</h5>
             <span style="width: 45px; height: 5px; background-color: red; display: block; padding-bottom: 5px;"></span>
             <p>প্রকৃতিতে হাঁটা, পরীক্ষামূলক শিক্ষা, প্রকৃতির জীবনচক্র জানা</p>
           </div>
         </div>

         <div class="row">
           <div class="col-md-4">
             <h5 ><a href="<?=base_url('index.php/art')?>" style="text-decoration: none;">শিল্প ও সংস্কৃতি</a></h5>
             <span style="width: 45px; height: 5px; background-color: red; display: block; padding-bottom: 5px;"></span>
             <p>শিশু একাডেমী, মিউজিয়াম, প্রত্নতত্ত্ব</p>
           </div>
     <!--      </div><div class="row"> -->

         
           <div class="col-md-4">
           <h5 style="color: #176bb7;"  >শিশু নির্যাতন বন্ধ করুন</h5>
             <span style="width: 45px; height: 5px; background-color: blue; display: block; padding-bottom: 5px;"></span>
             <p><a href="<?=base_url('index.php/stop-crime')?>">বিস্তারিত</a></p>            
           </div>
           <div class="col-md-4">
           <h5 style="color: #176bb7;"  >শিশু অধিকার সনদ প্রতিপালন</h5>
             <span style="width: 45px; height: 5px; background-color: green; display: block; padding-bottom: 5px;"></span>
             <p><a href="<?=base_url('index.php/child-rights-certificats')?>">বিস্তারিত</a></p>
           </div>
          <!--  <div class="col-md-4">
           <h5 >একনজরে</h5>
             <span style="width: 45px; height: 5px; background-color: red; display: block; padding-bottom: 5px;"></span>
             <p><a href="<?=base_url('at-a-galance')?>">দিবাযত্ন কেন্দ্রসমূহের তথ্য</a></p>
           </div>  -->
           
          </div>

          <!-- <div class="row">
           <div class="col-md-4">
            <a href="<?=base_url('stop-crime')?>" class="button_btn button2"  style="text-decoration: none;color:white; padding: 15px auto !important; ">শিশু নির্যাতন বন্ধ করুন</a>
           </div>
           <div class="col-md-4">
             <a href="<?=base_url('child-rights-certificats')?>" class="button_btn button2"  style="text-decoration: none;color:white;padding: 15px auto !important;  ">শিশু অধিকার সনদ প্রতিপালন</a>
           </div>
           <div class="col-md-4">
              <a href="<?=base_url('at-a-galance')?>" class="button_btn button2" style="text-decoration: none; color:white; padding: 15px auto !important; ">একনজরে</a> 
           </div> 
          </div> -->





















      <!-- <section class="introduce">
         <h4 class="heading-int">ভূমিকা</h4>
         <p>
            
            শিশু দিবাযত্ন কেন্দ্রে শিশু ভর্তি প্রক্রিয়ার মূল কেন্দ্রে রয়েছে কর্মজীবী নারী। তাই সকল আর্থ-সামাজিক অবস্থানের কর্মজীবী নারীরা যেন সমভাবে ২০টি শিশু দিবাযত্ন কেন্দ্রের সেবা গ্রহণ করতে পারে সেজন্য এই ভর্তি নির্দেশিকা প্রণয়ন করা হয়েছে।
            <br><br>

            শিশু দিবাযত্ন কেন্দ্রে শিশু ভর্তি নিয়ে একদিকে যেমন পিতামাতা বা অভিভাবক উদ্বিগ্ন থাকেন, অন্যদিকে প্রশাসনিক কর্মচারীরাও পিতা-মাতা বা অভিভাবকের দায়িত্ব নিয়ে উদ্বিগ্ন থাকেন কারণ শিশু ভর্তির সকল পর্যায়ে তাদের সহযোগিতা প্রয়োজন। ভর্তি মূল্যায়ণ প্রক্রিয়াটি যেন ন্যায্যতা এবং সততার সর্বোচ্চ মান পূরণ করে এবং ভর্তি প্রক্রিয়াটিকে কোন অনিয়ম যেন স্পর্শ করতে না পারে সে বিষয়গুলো বিবেচনা করে যথেষ্ট সচেতনতার সাথে এর বিষয়বস্তু নির্ধারণ করা হয়েছে যা শিশু ভর্তি প্রক্রিয়া সম্পর্কে সংশ্লিষ্ট সকলকে পূর্ণ ধারণা দিতে সক্ষম হবে। এ নির্দেশিকায় কর্মজীবী নারী নির্বাচনের মানদন্ড, শিশু ভর্তি গ্রুপ, ভর্তির নিয়মাবলী, আবেদন মূল্যায়ণ, শিশু ভর্তি ও অপেক্ষমাণ তালিকা প্রণয়ন, ভর্তি ফি ও মাসিক ফি প্রদানের নিয়মাবলী, ভর্তুকি প্রাপ্তির যোগ্যতা এবং ভর্তি বাতিল প্রক্রিয়া বর্ণনা করা হয়েছে। এছাড়াও ‍শিশু যত্নের মাসিক ফি ও ভর্তুকির কাঠামো নির্ধারণ করা হয়েছে।

            <br><br>
            আশা করছি ন্যায্যতা ও প্রাপ্যতার ভিত্তিতে শিশু ভর্তির আবেদন মূল্যায়ণ ও শিশু নির্বাচন নিশ্চিত করতে নির্দেশিকাটি সংশ্লিষ্ট সকলকে সহায়তা করবে। প্রকল্প পরিচালকের নির্দেশনায় যাঁরা গবেষণা করে এর বিভিন্ন বিষয়বস্তু নির্বাচন ও পর্যালোচনায় সহযোগিতা করেছে তাদের প্রতি কৃতজ্ঞতা। পরিশেষে নির্দেশিকাটি প্রস্তুত ও প্রকাশে যাঁরা সহযোগিতা করেছেন তাদের সবাইকে আন্তরিক ধন্যবাদ।

         </p>
      </section> -->


          <?php /* ?>

         <div class="item crop">
            <img src="<?=base_url();?>assets/images/home_page/children.png" alt="children" style="width:100%; height: 200px;">
         </div>
        
         <table style="width:100%">
            <tr>
               <th>প্রারম্ভিক উদ্দীপনা পর্যায়ে শিশুর সেবা ৬ মাস -১২ মাস</th>
               <th>প্রাক-প্রারম্ভিক শিখন পর্যায়ে শিশুর সেবা ১২ মাস - ৩০ মাস</th>
               <th>প্রারম্ভিক শিখন পর্যায়ে শিশুর সেবা ২.৫ বছর -৪ বছর</th>
               <th>প্রাক-প্রাথমিক স্কুল পর্যায়ে শিশুর সেবা ৪ বছর - ৬ বছর</th>
            </tr>
            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left">
                     <li><a href="<?=base_url('six-to-twelve-children-day-care')?>"> দিবাকালীন যত্ন</li>
                     <li><a href="<?=base_url('six-to-twelve-children-food-nutrition')?>">খাদ্য ও পুষ্টি</li>
                     <li><a href="<?=base_url('six-to-twelve-children-excitement')?>">প্রারম্ভিক উদ্দীপনা</li>
                     <li><a href="<?=base_url('six-to-twelve-children-health-care')?>">প্রাথমিক স্বাস্থ্য সেবা</li>
                     <li><a href="<?=base_url('six-to-twelve-children-health-improvement')?>">শারীরিক বিকাশ</li>
                     <li><a href="<?=base_url('six-to-twelve-children-mental-improvement')?>">মানসিক বিকাশ</li>
                     <li><a href="<?=base_url('six-to-twelve-children-curricular')?>">চিত্তোবিনোদন</li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left">
                     <li><a href="<?=base_url('twelve-to-thirty-children-day-care')?>">দিবাকালীন যত্ন</li>
                     <li><a href="<?=base_url();?>assets/pdfs/food_nutrition_12_30_month.pdf">খাদ্য ও পুষ্টি</li>
                     <li><a href="<?=base_url()?>assets/pdfs/before_primary_education_12_30_month.pdf">প্রারম্ভিকপ্রারম্ভিক উদ্দীপনা</li>
                     <li><a href="<?=base_url('twelve-to-thirty-children-health-care')?>">প্রাথমিক স্বাস্থ্য সেবা</li>
                     <li><a href="<?=base_url('twelve-to-thirty-children-health-improvement')?>">শারীরিক বিকাশ</li>
                     <li><a href="<?=base_url('twelve-to-thirty-children-mental-improvement')?>">মানসিক বিকাশ</li>
                     <li><a href="<?=base_url('twelve-to-thirty-children-curricular')?>">চিত্তোবিনোদন</li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left">
                     <li><a href="<?=base_url('two-to-four-years-children-day-care')?>">দিবাকালীন যত্ন</li>
                     <li><a href="<?=base_url()?>assets/pdfs/food_nutrition_2_4_years.pdf">খাদ্য ও পুষ্টি</li>
                     <li><a href="<?=base_url()?>assets/pdfs/before_primary_education_2_4_years.pdf">প্রারম্ভিক উদ্দীপনা</li>
                     <li><a href="<?=base_url('two-to-four-years-children-health-care')?>">প্রাথমিক স্বাস্থ্য সেবা</li>
                     <li><a href="<?=base_url('two-to-four-years-children-health-improvement')?>">শারীরিক বিকাশ</li>
                     <li><a href="<?=base_url('two-to-four-years-children-mental-improvement')?>">মানসিক বিকাশ</li>
                     <li><a href="<?=base_url('two-to-four-years-children-curricular')?>">চিত্তোবিনোদন</li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left">
                     <li><a href="<?=base_url('four-to-six-years-children-day-care')?>">দিবাকালীন যত্ন</li>
                     <li><a href="<?=base_url()?>assets/pdfs/food_nutrition_4_6_years.pdf">খাদ্য ও পুষ্টি</li>
                     <li><a href="<?=base_url()?>assets/pdfs/before_primary_education_4_6_years.pdf">প্রারম্ভিক উদ্দীপনা</li>
                     <li><a href="<?=base_url('four-to-six-years-children-health-care')?>">প্রাথমিক স্বাস্থ্য সেবা</li>
                     <li><a href="<?=base_url('four-to-six-years-children-health-improvement')?>">শারীরিক বিকাশ</li>
                     <li><a href="<?=base_url('four-to-six-years-children-mental-improvement')?>">মানসিক বিকাশ</li>
                     <li><a href="<?=base_url('four-to-six-years-children-curricular')?>">চিত্তোবিনোদন</li>
                  </ul>
               </td>
            </tr>
         </table>
         <?php */ ?>
      </section>

      <br>

      <!-- <section class="project-purpose">

         <h4 class="lnt text-center">প্রারম্ভিক উদ্দীপনা পর্যায়ে শিশুর সেবা</h4>
         <br>
         <h4 class="heading-int">শিশুদের খাদ্য তালিকার ১ দিনের নমুনা (০৬ মাস থেকে ০১ বছর)</h4>
         <p>কর্মজীবী পরিবার ও তাদের শিশুদের দিবাকালীন সেবা প্রদানের মাধ্যমে মায়েদের স্ব-স্ব কর্মস্থলে নিশ্চিন্তে কাজ করার সুযোগ প্রদান করা।</p>

         <table style="width:100%">
            
            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>সকালের খাবারঃ</b></h4></li>
                     <li><h4>গরুর দুধ: ১০০ মিলি</h4></li>
                     <li><h4>সুজি : ১৫ গ্রাম</h4></li>
                     <li><h4>কলা: ১টি(মাঝারি)</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/milk.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/shuji.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/banana.png" alt="children" style="width:90px; height: 90px"></li>
                  </ul>
               </td>
            </tr>

            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>দুপুরের খাবারঃ</b></h4></li>
                     <li><h4>ভাত (নাজিরশাইল চাল): ২০ - ৩০গ্রাম</h4></li>
                     <li><h4>মসুর ডাল: ০৮ - ১০ গ্রাম</h4></li>
                     <li><h4>সবজী: ৩০ - ৫০ গ্রাম</h4></li>
                     <li><h4>পালং শাক: ২০ - ৩০ গ্রাম</h4></li>
                     <li><h4>লেবু: ছোট এক টুকরা</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/rice.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/vegetables.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/amarnaths.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" style="width:90px; height: 90px"></li>
                     
                  </ul>
               </td>
            </tr>

            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>বিকালের নাশতাঃ</b></h4></li>
                     <li><h4>চিকেন স্যুপ: এক বাটি (১২০ মিলি)</h4></li>
                     <li><h4>কমলার জুস: এক গ্লাস (৯০ মিলি)</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" style="width:90px; height: 90px"></li>
                  </ul>
               </td>
            </tr>

         </table>
      </section>

      <br>

      <section class="project-service">

         <h4><b>বিকল্প খাবার</b></h4>
         <p>উপরের মেন্যুটি ১ দিনের, বাকি ৪ দিনের জন্য বিকল্প খাবার হিসেবে নিম্নোক্ত খাবার গুলো দেওয়া হয়ঃ</p>

         <table style="width:100%">
            
            <tr>
               <th>সকালের নাশতা</th>
               <th>দুপুরের খাবার</th>
               <th>বিকালের নাশতা</th>
            </tr>
            <tr>
               <td>গরুর দুধ/ গুঁড়ো দুধ, পাউরুটি/ রুটি/সেমাই/পাস্তা/নুডুলস, কলা।
                  <img src="<?=base_url();?>assets/images/home_page/noodels.jpg" alt="children" style="width:140px; height: 140px">
               </td>
               <td>ভাত/ পোলাও/ খিচুড়ি, মাছ (কাতলা)/ মুরগীর মাংস/ডিম, ডাল (মুগ/ ছোলা), সবজী (আলু, পেঁপে, লাউ, মিষ্টি কুমড়া, পটল, চিচিঙ্গা), সবুজ শাক/ লাল শাক/ পুঁই শাক।
               <img src="<?=base_url();?>assets/images/home_page/vegetables2.png" alt="children" style="width:140px; height: 140px">
               </td>
               <td>স্যুপ/ পুডিং/ কেক/ ফালুদা/কাস্টার্ড, বিভিন্ন ফলের জুস (কমলা/ মাল্টা/ আঙুর/ পাঁকা পেঁপে/ আম/ ডালিম)।
                  <img src="<?=base_url();?>assets/images/home_page/fruit2.jpg" alt="children" style="width:140px; height: 140px">
               </td>
            </tr>
            
         </table>   
      </section>

      <section class="project-purpose">আমাদের কথা
         
         <h4 class="lnt text-center">প্রারম্ভিক উদ্দীপনা</h4>
         <br>
         <h4 class="heading-int">উদ্দীপনামূলক পর্যায় (০৬মাস-১২ মাস)</h4>

         <h4>শিশুর অর্জিত মাইলফলকসমূহ</h4>
         
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <ul>
                  <li>বসতে, কিছু ধরে দাঁড়াতে পারবে,হামাগুঁড়ি দেওয়া শিখবে;</li>
                  <li>কিছু ধরে হাঁটবে, সাহায্য ছাড়া হাঁটতে পারবে;</li>
                  <li>নিকটবর্তী দুরত্বের কোন জিনিস ধরতে পারবে;</li>
                  <li>চোখ,নাক,কান,গলা,জিহ্বা ব্যবহার করতে পারবে এবং;</li>
                  <li>পেটের উপর ভর করে শোয়া ও ঝুলানো বস্তু ধরতে পারবে;</li>
                  <li>ছোট ছোট শব্দ বা ইশারা রপ্ত করে অন্যের মনযোগ আকর্ষণ করে নিজের মনের ভাব প্রকাশ করতে পারবে;</li>
                  <li>খুশি হলে হাসবে, দুঃখ পেলে কাঁদা, রাগ প্রকাশের সঠিক ভঙ্গিমা রপ্ত করতে ও  প্রয়োগ করতেশিখবে।</li>
                  <li>চারপাশের সবকিছু অনুকরণ করবে ও নিজে অন্যের সাথে খেলাধুলায় অংশ নিবে ও উপভোগ করতে পারবে।</li>
                  <li>স্থির ও চলমান বস্তুর পার্থক্য বুঝবে, লুকায়িত বস্তুকে খুঁজে বের করতে সক্ষম হবে।</li>
               </ul>
            </div>
         </div>   
      </section>

      <section class="project-purpose">
         

         <h4>শিশুদের পারস্পরিক ক্রিয়ামূলক খেলা কার্যক্রমঃ</h4>
         
         <table style="width:100%">
            <thead>
               <tr>
                  <th>বিকাশের ক্ষেত্র</th>
                  <th>শিখন কার্যক্রম</th>
                  <th>শিখনফল</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td rowspan="2">শারীরিক বিকাশ</td>
                  <td>কোন ফল বা খাবার নিজে বিভিন্ন অঙ্গ-ভঙ্গিতে গ্রহণ করে শিশুকে সেই খাবার খেতে আগ্রহী করা।</td>
                  <td>শিশু পঞ্চ ইন্দ্রিয়ের ব্যবহারের দক্ষতা তৈরি হবে।</td>
               </tr>

               <tr>
                  <td>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">০৬-০৯ মাসের শিশুদের জন্য স্পর্শ করে খেলার ব্যবস্থা করা। যেমনঃ শিশুকে শুইয়ে দিয়ে রঙিন কাপড় সামনে ধরে শিশুকে কাপড়টি ধরতে উৎসাহিত করা এবং হাসিমুখে বলা, “দেখোতো বাবু-এটা কী? তুমি কি এটা ধরতে চাও?ধরো তো দেখি। এভাবে ২/৩ বার ধরতে দেওয়া এবং ধরতে পারলে প্রশংসা করা।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">ফেনা দিয়ে বাবল্ তৈরি করে খেলা করা এবংশিশুকে তা ধরতে উৎসাহিত করা।</li>
                  </td>
                  <td >
                     <li style="padding-left:5px; margin-left:20px; text-align: left">০৬-০৯ মাসের শিশুদের জন্য স্পর্শ করে খেলার ব্যবস্থা করা। যেমনঃ শিশুকে শুইয়ে দিয়ে রঙিন কাপড় সামনে ধরে শিশুকে কাপড়টি ধরতে উৎসাহিত করা এবং হাসিমুখে বলা, “দেখোতো বাবু-এটা কী? তুমি কি এটা ধরতে চাও?ধরো তো দেখি। এভাবে ২/৩ বার ধরতে দেওয়া এবং ধরতে পারলে প্রশংসা করা।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">ফেনা দিয়ে বাবল্ তৈরি করে খেলা করা এবংশিশুকে তা ধরতে উৎসাহিত করা।</li>
                  </td>
               </tr>

               <tr>
                  <td>আবেগিক বিকাশ</td>
                  <td >
                  শিশুর সাথে অনুকরণমূলক খেলা করা, যেমনঃ‘যা করি তাই করো’ খেলা। শিশুর সামনে তালি দিয়ে শিশুকে তালি দিতে উৎসাহিত করা ও অনুরুপ তালি দেওয়ার চেষ্টা করতে বলা। এরপর শিশু যদি তালি না দেয় তাহলে  হাত ধরে তালি দিতে উৎসাহিত করা হয়।
                  </td>
                  <td >
                     <li style="padding-left:5px; margin-left:20px; text-align: left">শিশুর অনুকরণ করার দক্ষতা তৈরি হয়।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">যত্নকারীর সঙ্গে শিশুর নিবিড় সম্পর্ক তৈরি হয়।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">আনন্দ লাভ করবে।</li>
                  </td>
               </tr>

               <tr>
                  <td >মানসিক বিকাশ</td>
                  <td >
                     <li style="padding-left:5px; margin-left:20px; text-align: left">শিশুর চোখে চোখে কথা বলা ও কথা বলার সময় হাস্যোজ্জ্বলভাবে কথা বলা।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">শিশুর দু’হাতে দু’টি খেলনা দিয়ে তারপর আরও একটি খেলনা শিশুর সামনে দেওয়া। তখন তৃতীয় খেলনা নেওয়ার আগ্রহ দেখাবে। এক্ষেত্রে শিশু একটি ফেলে অন্যটি নেবে। এভাবে শিশুর নিজের পছন্দ ও চিন্তার সুযোগ দেওয়া।</li>
                  </td>
                  <td >
                     <li style="padding-left:5px; margin-left:20px; text-align: left">শিশুর পছন্দ -অপছন্দ  করার ক্ষমতা তৈরি হয়।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">অনুকরণ করতে শিখবে।</li>
                  </td>
               </tr>
               <tr>
                  <td>ভাষাগত বিকাশ</td>
                     
                     <td><li style="padding-left:5px; margin-left:20px; text-align: left">শিশুর সাথে বিভিন্ন কথা বলা। যেমন “এটা তোমার নাক, আমি তোমার নাক পছন্দ করি”। এরপর, চোখে হাত দিয়ে বলা, “এটা তোমার চোখ ,আমি তোমার চোখ পছন্দ করি।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">খাবার খাওয়ানোর সময় খাবারের নাম বলে বলে খাবার খাওয়ানোর অভ্যাস করা। এতে শিশু নতুন শব্দের সাথে পরিচিত হবে।</li></td>
                     
                     <td ><li style="padding-left:5px; margin-left:20px; text-align: left">শরীরের বিভিন্ন অঙ্গের নাম শুনে সাড়া দিতে শিখবে।</li>
                     <br>
                     <li style="padding-left:5px; margin-left:20px; text-align: left">পরিচিত শব্দ সম্পর্কে জানবে।</li></td>

               </tr>
               
            </tbody>
         </table>

      </section>

      <section class="project-purpose">
         <br>
         <h4 class="lnt text-center">প্রারম্ভিক উদ্দীপনা পর্যায়ে শিশুর সেবা</h4>
         <br>
         <h4 class="heading-int">শিশুদের খাদ্য তালিকার ১ দিনের নমুনা (০৬ মাস থেকে ০১ বছর)</h4>
         <p>কর্মজীবী পরিবার ও তাদের শিশুদের দিবাকালীন সেবা প্রদানের মাধ্যমে মায়েদের স্ব-স্ব কর্মস্থলে নিশ্চিন্তে কাজ করার সুযোগ প্রদান করা।</p>

         <table style="width:100%">
            
            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>সকালের খাবারঃ</b></h4></li>
                     <li><h4>গরুর দুধ: ১০০ মিলি</h4></li>
                     <li><h4>পাউরুটি: ৩০ গ্রাম (২ স্লাইস)</h4></li>
                     <li><h4>কলা: ১টি(মাঝারি)</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/milk.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/shuji.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/banana.png" alt="children" style="width:90px; height: 90px"></li>
                  </ul>
               </td>
            </tr>

            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>দুপুরের খাবারঃ</b></h4></li>
                     <li><h4>ভাত (নাজিরশাইল চাল): ৫০-৬০ গ্রাম</h4></li>
                     <li><h4>মুরগীর মাংস: ৫০ - ৬০ গ্রাম</h4></li>
                     <li><h4>সবজী: ৩০ - ৫০ গ্রাম</h4></li>
                     <li><h4>সবজী: ৩০ - ৫০ গ্রাম</h4></li>
                     <li><h4>লেবু: ছোট এক টুকরা</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/rice.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/vegetables.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/amarnaths.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" style="width:90px; height: 90px"></li>
                     
                  </ul>
               </td>
            </tr>

            <tr>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li> <h4><b>বিকালের নাশতাঃ</b></h4></li>
                     <li><h4>পুডিং: এক বাটি (১২০ মিলি)</h4></li>
                     <li><h4>বেদানার জুস: এক গ্লাস (১০০ মিলি)</h4></li>
                  </ul>
               </td>
               <td>
                  <ul style="padding-left:5px; margin-left:20px; text-align: left; list-style-type:none">
                     <li><img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" style="width:90px; height: 90px"></li>
                     <li><img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" style="width:90px; height: 90px"></li>
                  </ul>
               </td>
            </tr>

         </table>
      </section>

      <section class="project-service">

         <h4><b>বিকল্প খাবার</b></h4>
         <p>উপরের মেন্যুটি ১ দিনের, বাকি ৪ দিনের জন্য বিকল্প খাবার হিসেবে নিম্নোক্ত খাবার গুলো দেওয়া হয়ঃ</p>

         <table style="width:100%">
            
            <tr>
               <th>সকালের নাশতা</th>
               <th>দুপুরের খাবার</th>
               <th>বিকালের নাশতা</th>
            </tr>
            <tr>
               <td>গরুর দুধ/ গুঁড়ো দুধ, পাউরুটি/ রুটি/সেমাই/পাস্তা/নুডুলস।
                  <img src="<?=base_url();?>assets/images/home_page/noodels.jpg" alt="children" style="width:140px; height: 140px">
               </td>
               <td>ভাত/ পোলাও/ খিচুড়ি, মাছ (কাতলা)/ মুরগীর মাংস/ডিম, ডাল (মুগ/ ছোলা), সবজী (আলু, পেঁপে, লাউ, মিষ্টি কুমড়া, পটল, চিচিঙ্গা), সবুজ শাক/ লাল শাক/ পুঁই শাক।
               <img src="<?=base_url();?>assets/images/home_page/vegetables2.png" alt="children" style="width:140px; height: 140px">
               </td>
               <td>স্যুপ/ পুডিং/ কেক/ ফালুদা/কাস্টার্ড, বিভিন্ন ফলের জুস (কমলা/ মাল্টা/ আঙুর/ পাঁকা পেঁপে/ আম/ ডালিম)।
                  <img src="<?=base_url();?>assets/images/home_page/fruit2.jpg" alt="children" style="width:140px; height: 140px">
               </td>
            </tr>
            
         </table>   
      </section>


      <section class="project-purpose">
         
         <h4 class="heading-int">প্রাক-প্রারম্ভিক শিক্ষা</h4>

         <h4>শিশুর অর্জিত মাইলফলকসমূহ</h4>
         
         <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <ul>
                  <li>সাহায্য ছাড়া উপুর হয়ে বসতে পারা, হাত ও হাঁটুর উপর ভর করে হামাগুড়ি দিতে পারবে এবং দাঁড়াতে পারবে;</li>
                  <li>হাতের তালু ও একটা আঙুল দিয়ে কিছু ধরতে পারবে, নিজে নিজে খেতে চেষ্টা করতে শিখবে; </li>
                  <li>মনোযোগ পাবার জন্য বিভিন্ন শব্দ ও অঙ্গভঙ্গি করতে পারবে;</li>
                  <li>এলোমেলো বিভিন্ন শব্দ করতে পারবে বা আধো আধো কথা বলার চেষ্টা করতে পারবে। ‘না’ শব্দের ব্যবহার করতে পছন্দ করবে;</li>
                  <li>সহজ নির্দেশনা অনুসরণ করতে পারবে;</li>
                  <li>অন্যের আচরণ অনুকরণের চেষ্টা করতে পারবে;</li>
                  <li>নিজের নাম জানবে, নিজের খেলনা চিনবে ও গুছিয়ে নিতে চেষ্টা করবে এবং;</li>
                  <li>কল্পনা করে খেলতে পারবে;</li>
                  <li>স্থির ও চলমান বস্তুর পার্থক্য বুঝবে, লুকায়িত বস্তুকে খুঁজে বের করতে সক্ষম হবে।</li>
               </ul>
            </div>
         </div>   
      </section> -->

      <!-- </div> -->
   </div>   
</div>