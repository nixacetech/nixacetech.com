    <footer id="footer"> 
		<!-- <marquee behavior="" direction="">" Regular Classes on Monday & Wednesday 7.30AM to 10.00AM at B-3 Laram Centre, Opposite Andheri Station, Above Akash Sweets, Andheri West, Mumbai 400 062"
</marquee>-->
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-8 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a target="_blank" href="http://chavdakunal.com">Developed By Kunal Chavda</a>
							</p>
						</div>
					</div>

					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="text-right">
								&copy;<?= date("Y"); ?> Nixace Technologies
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    <script src="assets/js/jquery.fancybox-media.js"></script>
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/owl.carousel.js"></script> 
    <script src="assets/js/sweetalert.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
    
	</script>
    <script>
    jQuery(document).on("click", '.download_notes_link', function(){
	 jQuery('.sa-confirm-button-container button.confirm').trigger("click");
	});
    jQuery(document).ready(function(){
        jQuery('#toggle-form').click(function(){
            jQuery('.floating-wrapper').toggleClass("open");
        });
        jQuery('.close_floating_wrapper').click(function(){
            jQuery('.floating-wrapper').toggleClass("open");
         });
        jQuery('#toggle-form-tt').click(function(){
            jQuery('.floating-wrapper-tt').toggleClass("open");
        });
        jQuery('.close_floating_wrapper-tt').click(function(){
            jQuery('.floating-wrapper-tt').toggleClass("open");
         });

              var data = {};
    var name_pattern=/^[A-Za-z .'-]+$/;
    var email_pattern=/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var phone_pattern = /^[0-9]+$/;

    // jQuery(document).on('focus','input,select',function(){
    //   jQuery(this).removeClass('inputTxtError');
    //   jQuery(this).attr("placeholder","");
    // });

    jQuery('#floatingform_btn').on("click",function(){
    var validation = true;
    name_val = jQuery("#username").val();
    phone_val = jQuery("#phone").val();
    email_val = jQuery("#email").val();
    
    name_match  = name_val.match(name_pattern);
    email_match  = email_val.match(email_pattern);
    phone_match  = phone_val.match(phone_pattern);


    if(name_val!= ''){

      if(name_match === null){
        validation = false;
        //jQuery('#username').val('');
        //jQuery('#username').attr("placeholder","Invalid format");
        jQuery('#username').addClass('inputTxtError');

      }else{
        jQuery('#username').parent().find('.error').text("span").remove();
        jQuery('#username').removeClass('inputTxtError');
      }
    }else{
      jQuery('#username').attr("placeholder","Enter Name");
      jQuery('#username').addClass('inputTxtError');
      validation = false;
    }

    if(phone_val!= ''){

      if(phone_match === null){
        validation = false;
        //jQuery('#phone').val('');
        //jQuery('#phone').attr("placeholder","Invalid format");
        jQuery('#phone').addClass('inputTxtError');

      }else{
        jQuery('#phone').parent().find('.error').text("span").remove();
        jQuery('#phone').removeClass('inputTxtError');
      }
    }else{
      jQuery('#phone').attr("placeholder","Enter Phone Number");
      jQuery('#phone').addClass('inputTxtError');
      validation = false;
    }

    if(email_val!= ''){

      if(email_match === null){
        validation = false;
        //jQuery('#email').val('');
        //jQuery('#email').attr("placeholder","Invalid format");
        jQuery('#email').addClass('inputTxtError');

      }else{
        jQuery('#email').parent().find('.error').text("span").remove();
        jQuery('#email').removeClass('inputTxtError');
      }
    }else{
      jQuery('#email').attr("placeholder","Enter Email");
      jQuery('#email').addClass('inputTxtError');
      validation = false;
    }


    if(validation){
    jQuery('#floatingform_btn').text("Submitting...");
       jQuery.ajax({
           type: "POST",
           url: "floating_form_post.php",
           data: jQuery("#floating-form").serialize(),// serializes the form's elements.
           beforeSend: function() {
             // alert("error");
              //alert("before send");
            },
           success: function(data)
           {  
              console.log(data);
               jQuery('#floatingform_btn').text("SUBMIT");
             //  document.getElementById("floating-form").reset();
               jQuery("#username").val('');
         jQuery("#phone").val('');
         jQuery("#email").val('');
        jQuery('#message').val('');
               if(data == "mailsent"){
                    console.log('in if block');
                     swal({   
                        title: "Thank you for  your interest",  
                        type:"success", 
                        text: "We will get back to you within a few hours"
                    });
                    jQuery('.floating-wrapper').toggleClass("open");
         
                 }
                 else{
                   // console.log('in else block');
                     alert("Some problem with the form, please try again.");
                 } 

    
               }
         });
    }
  });

// Contact form post
jQuery('#modal_send-contact').on("click",function(){
    var validation = true;
    name_val = jQuery("#username1").val();
    phone_val = jQuery("#phone1").val();
    email_val = jQuery("#email1").val();
    
    name_match  = name_val.match(name_pattern);
    email_match  = email_val.match(email_pattern);
    phone_match  = phone_val.match(phone_pattern);


    if(name_val!= ''){

      if(name_match === null){
        validation = false;
        //jQuery('#username1').val('');
       // jQuery('#username1').attr("placeholder","Invalid format");
        jQuery('#username1').addClass('inputTxtError');

      }else{
        jQuery('#username1').parent().find('.error').text("span").remove();
        jQuery('#username1').removeClass('inputTxtError');
      }
    }else{
      jQuery('#username1').attr("placeholder","Enter Name");
      jQuery('#username1').addClass('inputTxtError');
      validation = false;
    }

    if(phone_val!= ''){

      if(phone_match === null){
        validation = false;
       // jQuery('#phone1').val('');
        //jQuery('#phone1').attr("placeholder","Invalid format");
        jQuery('#phone1').addClass('inputTxtError');

      }else{
        jQuery('#phone1').parent().find('.error').text("span").remove();
        jQuery('#phone1').removeClass('inputTxtError');
      }
    }else{
      jQuery('#phone1').attr("placeholder","Enter Phone Number");
      jQuery('#phone1').addClass('inputTxtError');
      validation = false;
    }

    if(email_val!= ''){

      if(email_match === null){
        validation = false;
       // jQuery('#email1').val('');
        //jQuery('#email1').attr("placeholder","Invalid format");
        jQuery('#email1').addClass('inputTxtError');

      }else{
        jQuery('#email1').parent().find('.error').text("span").remove();
        jQuery('#email1').removeClass('inputTxtError');
      }
    }else{
      jQuery('#email1').attr("placeholder","Enter Email");
      jQuery('#email1').addClass('inputTxtError');
      validation = false;
    }


    if(validation){
    jQuery('#modal_send-contact').text("Registering...");
       jQuery.ajax({
           type: "POST",
           url: "floating_form_post.php",
           data: jQuery("#video-form").serialize(), // serializes the form's elements.
           beforeSend: function() {
               //alert("error");
               //alert("before send");
            },
           success: function(data)
           {  console.log(data);
              jQuery('#modal_send-contact').text("SUBMIT");
                document.getElementById("video-form").reset();
               if(data == "mailsent"){
                     swal({   
                        title: "Thank you for your interest",  
                        type:"success", 
                        text: "We will get back to you within a few hours"
                    });
                 
                 }
                 else{
                     alert("Some problem with the form,please try again.");
                 }
               }
         });
    }
  });

// Modal PDF Download

jQuery('[data-target="#modal-id"]').on("click", function(){
// yog: fetch the id of the item which is showing up the modal form
	var notes_name = jQuery(this).attr("id");
// yog: set the hidden field's value as the id of this element i.e. notes_name (to set the filename for each of these ids, go to the post file, find the switch case generating the $filepath variable)	
	jQuery('#contactForm3 input[name="notes_for"]').val(notes_name);
});

jQuery('#modal_send').on("click",function(){
    event.preventDefault();
    var validation = true;
    name_val = jQuery("#name3").val();
    phone_val = jQuery("#phone3").val();
    email_val = jQuery("#email3").val();
    
    name_match  = name_val.match(name_pattern);
    email_match  = email_val.match(email_pattern);
    phone_match  = phone_val.match(phone_pattern);


    if(name_val!= ''){

      if(name_match === null){
        validation = false;
        jQuery('#name3').val('');
        jQuery('#name3').attr("placeholder","Invalid format");
        jQuery('#name3').addClass('inputTxtError');

      }else{
        jQuery('#name3').parent().find('.error').text("span").remove();
        jQuery('#name3').removeClass('inputTxtError');
      }
    }else{
      jQuery('#name3').attr("placeholder","Enter Name");
      jQuery('#name3').addClass('inputTxtError');
      validation = false;
    }

    if(phone_val!= ''){

      if(phone_match === null){
        validation = false;
        jQuery('#phone3').val('');
        jQuery('#phone3').attr("placeholder","Invalid format");
        jQuery('#phone3').addClass('inputTxtError');

      }else{
        jQuery('#phone3').parent().find('.error').text("span").remove();
        jQuery('#phone3').removeClass('inputTxtError');
      }
    }else{
      jQuery('#phone3').attr("placeholder","Enter Phone Number");
      jQuery('#phone3').addClass('inputTxtError');
      validation = false;
    }

    if(email_val!= ''){

      if(email_match === null){
        validation = false;
        jQuery('#email3').val('');
        jQuery('#email3').attr("placeholder","Invalid format");
        jQuery('#email3').addClass('inputTxtError');

      }else{
        jQuery('#email3').parent().find('.error').text("span").remove();
        jQuery('#email3').removeClass('inputTxtError');
      }
    }else{
      jQuery('#email3').attr("placeholder","Enter Email");
      jQuery('#email3').addClass('inputTxtError');
      validation = false;
    }
              if(validation){

                //alert(validation);
                var url = "contactForm3_post.php";
                jQuery.ajax({
                     type: "POST",
                     url: url,
                     data: jQuery("#contactForm3").serialize(), 
                     success: function(data)
                     {
     		      var form = document.getElementById("contactForm3");
                      form.reset();
     		               jQuery("button.close").click();
                      console.log(data);
                      
                      x = data.split("$");
                      
                      if(x[0] == "1"){
                      	var notes_dl_link = x[1];
                        console.log('mail sent');
                        
                        swal({
				 title: "Thank You!",
				 text: `Click download button below to download your notes.<br><br><a href='${notes_dl_link}' class="download_notes_link btn btn-two" download>Download</a>`,
				 type: "success",
				 html: true,
				 showConfirmButton: false
				});
                      
                      }else{
                        console.log('mail not sent');
                        jQuery("#contactForm3")[0].reset();
                        jQuery('#myModal_presentation').modal('hide');
                        jQuery('#sorry').trigger('click');
                      }
                    }
                  });
                return false; 
              }
            });         
            
        jQuery('#download_pdf_btn').click(function(){
        jQuery('#download_pdf_btn').hide();
        jQuery('#contactForm3')[0].reset();
        jQuery('#myModal_presentation').modal('hide');
    })


// ///////////////////////////////////////////


jQuery(window).load(function(){
      if (jQuery(window).width() <= 1000){  
        jQuery('.wow').removeClass('wow');
       jQuery('.wow').addClass('wow-removed').removeClass('wow');
      } else {
      jQuery('.wow-removed').addClass('wow').removeClass('wow-removed');
      } 
    }); 
    });
 
    </script>
    <script src="assets/js/wow.min.js"></script>
    <script>
    new WOW().init();   

      var ww = jQuery(window).width();
      if(ww <= 768)
      {
          jQuery('body').find('.wow').removeClass('wow');
      }
        </script>

</body>
</html>