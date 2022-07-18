<?php 

	include("config/function.php");
	
	$home = page_query("home");
	$career = page_query("career");
	$job = page_query("job");
	$contact = page_query("contact");
	$reg_page = page_query("register");
	$counsel = page_query("con_dashboard");
	
	$details = details();
	
	$articles = article();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.scriptsbundle.com/opportunities/demo/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 14:20:57 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ScriptsBundle">
<title>
		<?php 
		
			if($page === "home"){
				echo $details['business_name']." | Home";
			}elseif($page === "career"){
				echo $career['page_title']." | ".$details['business_name'];
			}elseif($page === "job"){
				echo $job['page_title']." | ".$details['business_name'];
			}elseif($page === "contact"){
				echo $contact['page_title']." | ".$details['business_name'];
			}elseif($page === "register"){
				echo $reg_page['page_title']." | ".$details['business_name'];
			}
		
		?>
	</title>
    <!-- Favicons Icon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- JQUERY SELECT CSS -->
    <link href="css/select2.min.css" rel="stylesheet" />

    <!-- JQUERY MENU CSS -->
    <link rel="stylesheet" href="css/mega_menu.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.style.css">

    <!--  REVOLUTION STYLE SETTING -->
    <link href="js/revolution/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/section.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
    <!-- image card styling -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">

    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="page">
    <!--<div id="spinner">
        <div class="spinner-img"> <img alt="Opportunities Preloader" src="images/loader.gif" />
            <h2>Please Wait.....</h2>
        </div>
    </div> -->
    <nav id="menu-1" class="mega-menu fa-change-black" data-color=""> 
        <section class="menu-list-items"> 
            <ul class="menu-logo">
                <li> <a href="index.php"> <img src="<?= "assets/logo/".$details['logo']?>" alt="logo" class="img-responsive"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
				<li> <a href="index.php"> <i class="fa fa-home fa-indicator"></i>  <?= $home['page_title']; ?></a></li>
				<li> <a href="articles.php"> <i class="fa fa-home fa-book"></i>  <?= $career['page_title']; ?></a></li>
				<li> <a href="counsellor_dashboard.php"> <i class="fa fa-home fa-mortar-board"></i>  <?= $counsel['page_title']; ?></a></li>
				<li> <a href="contact.php"> <i class="fa fa-home fa-pencil-square"></i>  <?= $contact['page_title']; ?></a></li>
	
				<!-- <li class="no-bg"><a href="#" class="p-job"><i class="fa fa-plus-square"></i> Post Job</a></li> -->
				<li class="no-bg login-btn-no-bg"><a href="login.php" class="login-header-btn"><i class="fa fa-sign-in"></i> Log in</a></li>
				<!--<li class="profile-pic"> <a href="javascript:void(0)"> <img src="images/admin.jpg" alt="user-img" class="img-circle" width="36"><span class="hidden-sm">Arslan </span><i class="fa fa-angle-down fa-indicator"></i> </a>
					<ul class="drop-down-multilevel left-side">
						<li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a href="#"><i class="fa fa-mail-forward"></i> Inbox</a></li>
						<li><a href="#"><i class="fa fa-gear"></i> Account Setting</a></li>
						<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
					</ul>
                    </li>-->
           </ul>
        </section>
    </nav>
    <div class="clearfix"></div>