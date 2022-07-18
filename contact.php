<?php 
$page = "contact";

	include("include/header.php");
	
		// script to send contact details to the database  
           if(isset($_POST['send'])){
               
            $nam = $_POST['name'];
            $emai = $_POST['email'];
			$phone = $_POST['phone'];
            $sub = $_POST['subject'];
            $mes = $_POST['message'];
         
		   if(!empty($name) || !empty($emai) || !empty($phone) || !empty($sub) || !empty($mes)){
			if($send = message($emai, $nam, $phone, $sub, $mes) == true){
					
				if($nam && $sub && $emai && $phone && $mes){
					
					echo '<script type="text/javascript"> alert("Message Sent Successfuly...")'
					
					. '</script>';
				} 
                
            }
              
           }
		}
            

?>
		
        <section class="job-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                        <h3><?= $contact['page_title']?></h3>
                    </div>
                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?= $home['page_title']?></a> </li>
                                <li class="active"><?= $contact['page_title']?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
        <section class="contact-us ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="Heading-title-left black small-heading">
                                    <h3>Get In Touch With us</h3>
                                </div>
                                <form class="row" method="POST">

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input placeholder="Enter Your Name" name="name" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input placeholder="Enter Your Email" name="email" class="form-control" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone <span class="required">*</span></label>
                                            <input placeholder="Enter Your Phone Number" name="phone" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Subject <span class="required">*</span></label>
                                            <input placeholder="Enter Message Subject" name="subject" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Message <span class="required">*</span></label>
                                            <textarea cols="6" rows="8" name="message" placeholder="Enter Your Message" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <!-- <a href="#" class="btn btn-default"> Send Message <i class="fa fa-angle-right"></i> </a> -->
										<input type="submit" name="send" value="Send Message" class="btn btn-default">
                                    </div>
                                </form>
                            </div>
							
							 <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact_block">
                                    <h4>Contact Information</h4>
                                    <ul class="personal-info">
                                        <li><i class="fa fa-map-marker"></i> Allahabad.</li>
                                        <li><i class="fa fa-envelope"></i> Support@onlinecareer.com</li>
                                        <li><i class="fa fa-phone"></i>9461289729 </li>
                                        <li><i class="fa fa-phone"></i>8318237875 </li>
                                    </ul>
                                    <ul class="social-network social-circle">
                                        <li><a href="http://www.facebook.com/onlinecareer" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://www.twitter.com/onlinecareer" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://www.google.com/onlinecareer" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="http://www.linkedin.com.com/onlinecareer" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
		
		
		
		<?php include("include/footer.php"); ?>