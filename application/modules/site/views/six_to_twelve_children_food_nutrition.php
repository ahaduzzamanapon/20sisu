<style type="text/css">
   .carousel-indicators li{ display: none; }

   table,th, td{
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;

        text-align: center;
        vertical-align: center;
      }

   .crop {
        width: 100%;
        height: 150px;
        overflow: hidden;
    }
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">
      <!-- <div class="inner-content"> --> 

      <section class="project-purpose">
         <h4 class="lnt text-center">খাদ্য ও পুষ্টি</h4>
         <h4 class="heading-int">শিশুদের খাদ্য তালিকার ১ দিনের নমুনা (০৬ মাস থেকে ০১ বছর)</h4>
         <!-- <p>কর্মজীবী পরিবার ও তাদের শিশুদের দিবাকালীন সেবা প্রদানের মাধ্যমে মায়েদের স্ব-স্ব কর্মস্থলে নিশ্চিন্তে কাজ করার সুযোগ প্রদান করা।</p> -->

         <table width="100%">
            <tbody>
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>সকালের খাবারঃ</b></td>
                  <td width="40%" valign="top">
                     গরুর দুধ: ১০০ মিলি<br>
                     সুজি : ১৫ গ্রাম<br>
                     কলা: ১টি(মাঝারি)
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/milk.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/shuji.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/banana.png" alt="children" height="60">
                  </td>
               </tr>
               <!-- <tr><td colspan="3" style="border-bottom:1px solid #ccc;padding:20px auto;"></td></tr> -->
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>দুপুরের খাবারঃ</b></td>
                  <td width="40%" valign="top">
                     ভাত (নাজিরশাইল চাল): ২০ - ৩০গ্রাম<br>
                     মসুর ডাল: ০৮ - ১০ গ্রাম<br>
                     সবজী: ৩০ - ৫০ গ্রাম<br>
                     পালং শাক: ২০ - ৩০ গ্রাম<br>
                     লেবু: ছোট এক টুকরা
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/rice.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/vegetables.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/amarnaths.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" height="60">
                  </td>
               </tr>
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>বিকালের নাশতাঃ</b></td>
                  <td width="40%" valign="top">
                     চিকেন স্যুপ: এক বাটি (১২০ মিলি)<br>
                     কমলার জুস: এক গ্লাস (৯০ মিলি)
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/pulses.png" alt="children" height="80">
                     <img src="<?=base_url();?>assets/images/home_page/orange.jpg" alt="children" height="80">
                  </td>
               </tr>
            </tbody>
         </table>

      </section>

      <br>

      <section class="project-service">

         <h4 class="lnt text-center">বিকল্প খাবার</h4>
         <p>উপরের মেন্যুটি ১ দিনের, বাকি ৪ দিনের জন্য বিকল্প খাবার হিসেবে নিম্নোক্ত খাবার গুলো দেওয়া হয়ঃ</p>

         <table width="100%">
            <tbody>
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>সকালের নাশতা</b></td>
                  <td width="40%" valign="top">
                     গরুর দুধ/ গুঁড়ো দুধ, পাউরুটি/ রুটি/সেমাই/পাস্তা/নুডুলস, কলা।
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/milk.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/shuji.png" alt="children" height="60">
                     <img src="<?=base_url();?>assets/images/home_page/banana.png" alt="children" height="60">
                  </td>
               </tr>
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>দুপুরের খাবার</b></td>
                  <td width="40%" valign="top">
                     ভাত/ পোলাও/ খিচুড়ি, মাছ (কাতলা)/ মুরগীর মাংস/ডিম, ডাল (মুগ/ ছোলা), সবজী (আলু, পেঁপে, লাউ, মিষ্টি কুমড়া, পটল, চিচিঙ্গা), সবুজ শাক/ লাল শাক/ পুঁই শাক।
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/vegetables2.png" alt="children" height="60">
                  </td>
               </tr>
               <tr style="border-bottom:1px solid #ccc;">
                  <td width="20%" valign="top"><b>বিকালের নাশতা</b></td>
                  <td width="40%" valign="top">
                    স্যুপ/ পুডিং/ কেক/ ফালুদা/কাস্টার্ড, বিভিন্ন ফলের জুস (কমলা/ মাল্টা/ আঙুর/ পাঁকা পেঁপে/ আম/ ডালিম)
                  </td>
                  <td valign="top">
                     <img src="<?=base_url();?>assets/images/home_page/fruit2.jpg" alt="children" height="60">
                  </td>
               </tr>
            </tbody>
         </table>
      </section>
      
      <!-- </div> -->
   </div>   
</div>