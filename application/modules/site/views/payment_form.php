<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h3{font-family: 'Kalpurush', sans-serif; text-align: center; font-weight: bold; font-size:16px;}
	h4{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
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

          <div>

            <form action="<?=base_url('index.php/payment/'.$student_info->day_cares_id.'/'.$student_info->member_id)?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
               	
                  
                     <fieldset class="scheduler-border">
                        <legend class="scheduler-border"> শিশুর ভর্তির পেমেন্ট সম্পূর্ণকরণ ফর্ম</legend>
                     	<div class="row form-row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>রশিদ</label>
                                 <div><?php echo form_error('userfile'); ?></div>
                                 <input type="file" name="userfile" required>
                                 <!-- <p class="help-block">File type jpg, png, jpeg are allowed.</p> -->
                                 
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>তারিখ</label>
                                 <input type="date" name="members[payment_date]" value="<?=set_value('payment_date')?>" class="form-control" placeholder="" autocomplete="off">
                                 
                              </div>
                           </div>
                        </div>



                     </fieldset>

                      <!-- <input type="hidden" name="hide_app_info" value="22222"> -->

                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="submit" name="submit" value="সংরক্ষণ করুন" class="btn btn-success pull-right" style="font-weight: bold; font-family: kalpush">
                              </div>
                           </div>
                        </div>
                  </div>
               </form>
            </div>
         </div>


      </div>

      
   </div>