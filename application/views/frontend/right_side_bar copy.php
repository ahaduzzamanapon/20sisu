<div class="col-md-3 sidebar" style="margin-bottom: 23px;">
   <div class="inner-content">

      <div class="noticeslider mrt5">
         <h4 class="heading-int" data-id=1>শিশু দিবাযত্ন কেন্দ্র পরিচালনার নির্দেশিকাসমূহ</h4>
         <div class="pdln" id="marquee4">
            <ul>
            <?php 
               $data_side_data=$this->db->where('status',0)->where('category',1)->get('sidebar')->result();
               foreach($data_side_data as $row){?>
               <?php if($row->file!=''){?>
               <li><a href="<?=base_url('index.php/get_file/'.$row->file);?>" target="_blank"><?=$row->title?></a></li>
               <?php }else{?>
               <li><a href="<?=base_url('index.php/get_file/1')?>"><?=$row->title?></a></li>
               <?php }
               }
               ?>
            </ul>
         </div>
      </div>
      <div class="noticeslider mrt5">
         <h4 class="heading-int" data-id=2>প্রয়োজনীয় আইনসমূহ</h4>
         <div class="pdln" id="marquee4">
            <ul>
            <div id="demo">
                  <!-- <li><a href="<?=base_url('index.php/law-child-dc-center-law')?>">  শিশু দিবাযত্ন কেন্দ্র আইন, ২০২১ (প্রস্তাবিত)</a></li>  
                  <li><a href="<?=base_url('index.php/law-child-care-law')?>">  শিশুর প্রারম্ভিক যত্ন ও বিকাশের সমন্বিত নীতি-২০১৩</a></li>  -->
                  <?php 
                  $data_side_data=$this->db->where('status',0)->where('category',2)->get('sidebar')->result();
                  foreach($data_side_data as $row){?>
                     <li><a href="<?=base_url('index.php/get_file/'.$row->file);?>" target="_blank"><?=$row->title?></a></li>
                     <?php }
                     ?>
                  <li><a href="<?=base_url('index.php/child-law')?>"> অন্যান্য</a></li>
            </div>
            </ul>
         </div>
      </div>
      <div class="noticeslider mrt5">
         <h4 class="heading-int">অভিভাবক কর্নার</h4>
         <div class="pdln" id="marquee4">
            <ul>
            <?php 
                     $data_side_data=$this->db->where('status',0)->where('category',3)->get('sidebar')->result();
                     foreach($data_side_data as $row){?>
                        <li><a href="<?=base_url('index.php/get_file/'.$row->file);?>" target="_blank"><?=$row->title?></a></li>
                        <?php }
                        ?>
               <li><a href="<?=base_url('index.php/questions');?>">জরিপ প্রশ্নমালা</a></li> 
               <li><a href="<?=base_url('index.php/general-question');?>">সাধারণ প্রশ্নাবলী</a></li>   
            </ul>
         </div>
      </div>

<!-- Third menu -->

<div class="noticeslider mrt5">
   <h4 class="heading-int">শিশু দিবাযত্ন কেন্দ্রসমূহ</h4>
   <div class="pdln" id="marquee4">
      <ul>
      <?php 
               $data_side_data=$this->db->where('status',0)->where('category',4)->get('sidebar')->result();
               foreach($data_side_data as $row){?>
                  <li><a href="<?=base_url('index.php/get_file/'.$row->file);?>" target="_blank"><?=$row->title?></a></li>
                  <?php }
                  ?>
         <li><a href="<?=base_url('index.php/day-care-centers')?>">প্রকল্পের আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ</a></li>
         <li style = "line-height: 20px;"><a href="<?=base_url('index.php/day-care-centers-under-mohila')?>">মহিলা বিষয়ক অধিদপ্তরের আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ</a></li>
         <li style = "line-height: 20px;"><a href="<?=base_url('index.php/day-care-centers-national-under-mohila')?>">জাতীয় মহিলা সংস্থার আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ</a></li>
      </ul>
   </div>
</div>

<!-- 
<div class="noticeslider mrt5">
   <h4 class="heading-int">বাংলাদেশ শিশু একাডেমী</h4>
   <div class="pdln" id="marquee4">
      <ul>
         <li><a href="<?=base_url('shishu-academy-district')?>">জেলা শাখা সমূহ</a></li>
         <li><a href="<?=base_url('shishu-academy-upazila')?>">৬টি উপজেলা শাখা সমূহ</a></li>
      </ul>
   </div>
</div> -->


      <!-- <div class="noticeslider mrt5">
         <h4 class="heading-int">দিবাযন্ত কেন্দ্র</h4>

         <div class="pdln" id="marquee4">
            <ul>
               <?php foreach ($day_care_list as $value) { ?>
               <li><a href="<?=base_url('day-care-details/'.$value->id)?>"><?=$value->title?> </a></li>
               <?php } ?>
            </ul>
         </div>
      </div> -->
   </div>
</div>

<!-- Side bar end -->
