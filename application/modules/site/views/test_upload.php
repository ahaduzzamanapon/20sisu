<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h3{font-family: 'Kalpurush', sans-serif; text-align: center; font-weight: bold; font-size:16px;}
	h4{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
</style>
<div class="row">
	<?php $this->load->view('frontend/right_side_bar'); ?>   
	
   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      

          <div>

            <form action="<?=base_url('index.php/site/test')?>" method="post" enctype="multipart/form-data" id="" style="font-family: 'arial'">

               <div><?php echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
               	
                  
                     <fieldset class="scheduler-border">
                        <legend class="scheduler-border">পার্ট-৫: শিশুর ভর্তির পেমেন্ট সম্পূর্ণকরণ ফর্ম</legend>
                     	<div class="row form-row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>রশিদ</label>
                                 <div><?php echo form_error('userfile'); ?></div>
                                 <input type="file" name="userfile" required>
                                 <!-- <p class="help-block">File type jpg, png, jpeg are allowed.</p> -->
                                 
                              </div>
                           </div>
                      
                        </div>

                     </fieldset>

                      <!-- <input type="hidden" name="hide_app_info" value="22222"> -->

                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                              </div>
                           </div>
                        </div>
                  </div>
               </form>
            </div>
         </div>


      </div>

      
   </div>