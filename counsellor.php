
<!-- /.container-fluid -->
<?php 
$page = "home";

	include("include/header.php");
    include("dashboard.php");
  
?>

<div class="container py-5">
    <div class="row ">
    <div class="col-md-12 ">
        <h1 class="text-center">Counsellor Details</h1>
</div>
</div>
<div class="row mt-4">
    <?php

    
    require "admin/database/dbconfig.php";
    $query_run=mysqli_query($connection,$query);
    $check_counsellor=mysqli_num_rows($query_run)>0;
    if($check_counsellor)
    {
        while($row=mysqli_fetch_array($query_run));
        {


            ?>

<div class="col-md-3 mt-3">
        <div class="card" >
        <img src="admin/upload/<?php echo $row['images'];?>" width="260px" height="200px" alt="images">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row['name'];?></h4>
                <h3 class="card-title"><?php echo $row['design'];?></h3>
                
                <p class="card-text"><?php echo $row['descrip'];?></p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>

      </div>


<?php
 
        }
    }

    
    else
    {
        echo "No faculty Found";
    }


    ?>

        
</div>
</div>
