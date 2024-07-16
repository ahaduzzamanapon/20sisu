<style type="text/css">
   .error{
      color: red;
   }
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-6 main-content"> 
      <div class="col-md-12 col-sm-12">   
         <fieldset class="scheduler-border">
            <legend class="scheduler-border"> পাসওয়ার্ড পুনরুদ্ধার </legend>

            <form action="<?=base_url('index.php/reset_password')?>" method="post" enctype="multipart/form-data" id="jsvalidation">
               <div><?php echo validation_errors(); ?></div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 

                  <div class="row form-row">
                     
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>ওটিপি <span class="required">*</span></label>
                           <input type="text" name="otp" value="<?=set_value('otp')?>" class="form-control" placeholder="">
                        </div>
                     </div>
                     
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>নতুন পাসওয়ার্ড <span class="required">*</span></label>
                           <input type="password" name="password" id="password" value="<?=set_value('password')?>" class="form-control" placeholder="">
                        </div>
                     </div>
                     
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>কনফার্ম পাসওয়ার্ড<span class="required">*</span></label>
                           <input type="password" name="confirm_password" value="<?=set_value('confirm_password')?>" class="form-control" placeholder="">
                        </div>
                     </div>
                     <!-- <div class="col-md-12">
                        <div class="form-group">
                           <label>ও টি পি <span class="required">*</span></label>
                           <input type="otp" name="identity" value ="<?=set_value('identity')?>" id="identity" class="form-control" placeholder="" style="text-transform: lowercase;">
                        </div>                           
                     </div> -->
                  </div>

                 

                  <div class="row form-row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                        </div>
                     </div>
                  </div>
               </div>
            </form>

         </fieldset>
      </div>
   </div>

   
</div>

<script type="text/javascript">

   $(document).ready(function() {

   // validate signup form on keyup and submit
   $("#jsvalidation").validate({
      rules: {
         otp: {
            required: true
         },
         password: {
            required: true,
            minlength: 8
         },
         confirm_password: {
            required: true,
            minlength: 8,
            equalTo : "#password"
         },
      },
      messages: {
         
      }
   });      

   // propose username by combining first- and lastname
   $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
         this.value = firstname + "." + lastname;
      }
   });

   //code to hide topic selection, disable for demo
   var newsletter = $("#newsletter");
   // newsletter topics are optional, hide at first
   var inital = newsletter.is(":checked");
   var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
   var topicInputs = topics.find("input").attr("disabled", !inital);
   // show when newsletter is checked
   newsletter.click(function() {
      topics[this.checked ? "removeClass" : "addClass"]("gray");
      topicInputs.attr("disabled", !this.checked);
   });

   // onChange Method
   // $('#identity').keyup(function(){
   //    // $('#mask_username').html($('#identity').val());
   //    $('#mask_username').html($(this).val().toLowerCase());
   // });

});
</script>