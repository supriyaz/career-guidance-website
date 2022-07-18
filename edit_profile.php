<?php 
ob_start();
$page = "edit";
$active = "edit";

	include("include/header2.php");
	
	$success = "";
	
	if(isset($_POST['save'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$state = $_POST['state'];
		$address = $_POST['address'];
		$about_me = $_POST['about_me'];
		
		$sql_save = "UPDATE user SET
						first_name = '".$first_name."',
						last_name = '".$last_name."',
						phone = '".$phone."',
						email = '".$email."',
						gender = '".$gender."',
						state = '".$state."',
						address = '".$address."',
						about_me = '".$about_me."'
					WHERE username = '".$login_session."'
					";
					
		$query_save = main_query($sql_save);
		if($query_save = true ){
			$success =  '<div class="alert alert-success" style="background: #29aafe; color: #fff; font-size: 18px;">
					  <strong>&#10004; &nbsp; </strong> Your Profile Has Been Updated Successfully.
					</div>';
		}
				//header("Location: edit_profile.php");
			
		
	}
	

?>
	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $edit['page_title']?></h3>
				</div>
				<div class="col-md-6 col-sm-5 co-xs-12 text-right">
					<div class="bread">
						<ol class="breadcrumb">
							<li class="active">You Are Logged in</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        </section>	
		
        <section class="dashboard-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
					
					<?php 
					
						// Including Navigation side bar
						include("include/aside.php");
					
					?>
					
                        <div class="col-md-8 col-sm-8 col-xs-12">
						<?php echo $success; ?>
                            <div class="heading-inner first-heading">
                                <p class="title">Edit Profile</p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                <div class="profile-edit row">
                                    <form action="" method="POST">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name <span class="required"></span></label>
                                                <input type="text" placeholder="" name="first_name" value="<?= $first_name ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name <span class="required"></span></label>
                                                <input type="text" name="last_name" value="<?= $last_name ?>" style="font-weight: bold;" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Phone <span class="required"></span></label>
                                                <input type="text" placeholder="" name="phone" value="<?= $phone ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email <span class="required"></span></label>
                                                <input type="email" placeholder="" name="email" value="<?= $email ?>" style="font-weight: bold;" class="form-control">
                                            </div>
                                        </div>
										 <div class="col-md-6 col-sm-12">
											<div class="form-group">
												<label >Gender </label>
												<select class="questions-category form-control" name="gender">
													<option value="Select" style="font-weight: bold;">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label >State Of Origin </label>
											<select class="questions-category form-control" name="state">
												 <option value="<?= $state?>" style="font-weight: bold;"><?= $state?></option>
												 <option value="Abia">Abia</option>
												 <option value="Adamawa">Adamawa</option>
												 <option value="Anambra">Anambra</option>
												 <option value="Akwa Ibom">Akwa Ibom</option>
												 <option value="Bauchi">Bauchi</option>
												 <option value="Bayelsa">Bayelsa</option>
												 <option value="Benue">Benue</option>
												 <option value="Borno">Borno</option>
												 <option value="Cross River">Cross River</option>
												 <option value="Delta">Delta</option>
												 <option value="Ebonyi">Ebonyi</option>
												 <option value="Enugu">Enugu</option>
												 <option value="Edo">Edo</option>
												 <option value="Ekiti">Ekiti</option>
												 <option value="Gombe">Gombe</option>
												 <option value="Imo">Imo</option>
												 <option value="Jigawa">Jigawa</option>
												 <option value="Kaduna">Kaduna</option>
												 <option value="Kano">Kano</option>
												 <option value="Katsina">Katsina</option>
												 <option value="Kebbi">Kebbi</option>
												 <option value="Kogi">Kogi</option>
												 <option value="Kwara">Kwara</option>
												 <option value="Lagos">Lagos</option>
												 <option value="Nasarawa">Nasarawa</option>
												 <option value="Niger">Niger</option>
												 <option value="Ogun">Ogun</option>
												 <option value="Ondo">Ondo</option>
												 <option value="Osun">Osun</option>
												 <option value="Oyo">Oyo</option>
												 <option value="Plateau">Plateau</option>
												 <option value="Rivers">Rivers</option>
												 <option value="Sokoto">Sokoto</option>
												 <option value="Taraba">Taraba</option>
												 <option value="Taraba">Yobe</option>
												 <option value="Zamfara">Zamfara</option>
												 <option value="FCT Abuja">FCT Abuja</option>
											</select>
										</div>
										</div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Address <span class="required"></span></label>
                                                <input type="text" style="font-weight: bold;" name="address" value="<?= $address ?>" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>About yourSelf <span class="required"></span></label>
                                                <textarea cols="6" rows="8" style="font-weight: bold;" name="about_me"  placeholder="" class="form-control"><?= $about_me ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button class="btn btn-default pull-right" type="submit" name="save" > Save Profile <i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<?php
	$page = "job";

	include("job.php");

?>	

	
        <?php include("include/footer.php"); ?>