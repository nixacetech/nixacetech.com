<?php
$title = 'Nixace Technologies | Contact';

$keywords='';

$description='';
?>

<?php include 'include/header.php'; ?>
<?php include 'include/form.php'; ?>
 

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p></p>
                </div>
    </header>

<style>

	.contact-method .method-item {
    padding: 50px 6px;
    text-align: center;
    background-color: #fafafa;
    transition: all .3s ease-in;
    border: 1px solid #f1f1f1;
    font-size: 14px;
    padding-top: 2em;
    padding-bottom: 2em;
}

.contact-method .method-item:hover {
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
}
</style>
	<!-- container -->
    <div class="wrapper">
        <div class="container">
        <div class="row contact-method">
            <div class="col-md-4">
             <h3 style="color: #019346" class="text-center">Nixace <span style="color: #0a3d54">Technologies</span></h3>
                <div class="method-item">                    

                    <div class="detail"><p><b>Phone Number:</b> 70214 43794 / 90825 12215</p>
                    </div>
                    <div class="detail"><p><b>Address: &nbsp;&nbsp;</b>415,Pearl Plaza, Behind New McDonald, <br>  Opp Railway Station, Andheri West,<br>  Mumbai, Maharashtra 400058</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.8562896331468!2d72.84546930050085!3d19.120260998856484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9d3da414be3%3A0xcebb039fcd7091ff!2sPearl+Plaza%2C+Andheri+Railway+Overpass%2C+Railway+Colony%2C+Andheri+East%2C+Mumbai%2C+Maharashtra+400053!5e0!3m2!1sen!2sin!4v1526503257206" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
            </div>      
        </div>
    </div>
    <div class="container">
    <div class="contact-form">
        <h3 class="text-center">Register For Free Demo</h3>
        <form class="form-group" name="contact_form" class="video-form" id="video-form" method="POST" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                            <input class="form-control custom-form-control form-name username" type="text" name="username" id="username1" placeholder="Name"><span class='error'></span>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <input class="form-control   custom-form-control form-phone phone" type="number" name="phone" id="phone1" maxlength="10"  placeholder="Phone No." ><span class='error'></span>
                </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                    <input class="form-control   custom-form-control form-email email" type="text" name="email" id="email1" placeholder="Email ID" ><span class='error'></span>
                </div>
                </div>
            </div>     
            <button type="button" class="btn btn-two pull-right" data="#contactform" id="modal_send-contact">Submit</button>    
           
        </form>
    </div>
    </div>
	
		
	</div>
	<!-- /container -->
 <?php include 'include/footer.php'; ?>
