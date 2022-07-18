<?php 
ob_start();
$page = "dashboard";
$active = "dashboard";

	include("include/header2.php");
	
	

?>

	<section class="job-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-7 co-xs-12 text-left">
					<h3><?= $dashboard['page_title']?></h3>
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
                            <div class="job-short-detail">
                                <div class="heading-inner">
                                    <p class="title">Profile detail</p>
                                </div>
                                <dl>
                                    <dt>First Name:</dt>
                                    <dd><?= $first_name;?></dd>

                                    <dt>Last Name:</dt>
                                    <dd> <?= $last_name;?> </dd>

                                    <dt>Phone:</dt>
                                    <dd><?= $phone;?></dd>

                                    <dt>Email:</dt>
                                    <dd><?= $email;?></dd>
									
									<dt>Gender:</dt>
                                    <dd><?= $gender;?></dd>

                                    <dt>Address:</dt>
                                    <dd><?= $address;?></dd>

                                    <dt>State Of Origin:</dt>
                                    <dd><?= $state;?></dd>

                                    <dt>Country:</dt>
                                    <dd>Somewere at Antarctica </dd>
                                </dl>
                            </div>

                            <div class="heading-inner">
                                <p class="title">Some Line About Me</p>
                            </div>
                            <p style="text-align: justify;"><?= $about_me; ?></p>
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