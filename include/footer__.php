    <footer id="footer"> 
		
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-8 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="about-sfm.php">About SFM</a> | 
								<a href="about-manish-ramuka.php">About Nixace Technologies</a> |
								<a href="why-manish-ramuka.php">Why Nixace Technologies</a> |
								<a href="notes.php">Notes</a> |
								<a href="video-lectures.php">Video Lectures</a> |
								<a href="contact.php">Contact Us</a>
							</p>
						</div>
					</div>

					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="text-right">
								&copy;<?= date("Y"); ?> Manish Rakuma
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
        jQuery('#username').val('');
        jQuery('#username').attr("placeholder","Invalid format");
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
        jQuery('#phone').val('');
        jQuery('#phone').attr("placeholder","Invalid format");
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
        jQuery('#email').val('');
        jQuery('#email').attr("placeholder","Invalid format");
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
                     alert("Some problem with the form,please try again.");
                 } 

    
               }
         });
    }
  });

// Contact form post
jQuery('#modal_send').on("click",function(){
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
        jQuery('#username1').val('');
        jQuery('#username1').attr("placeholder","Invalid format");
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
        jQuery('#phone1').val('');
        jQuery('#phone1').attr("placeholder","Invalid format");
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
        jQuery('#email1').val('');
        jQuery('#email1').attr("placeholder","Invalid format");
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
    jQuery('#modal_send').text("Registering...");
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
               jQuery('#modal_send').text("SUBMIT");
                document.getElementById("video-form").reset();
               if(data == "mailsent"){
                     swal({   
                        title: "Thank you for  your interest",  
                        type:"success", 
                        text: "We will get back to you within a few hours"
                    });
                 jQuery('.floating-wrapper').toggleClass("open");
                 }
                 else{
                     alert("Some problem with the form,please try again.");
                 }
               }
         });
    }
  });

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