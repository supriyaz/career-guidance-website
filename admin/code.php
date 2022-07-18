<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];


    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password' ,'$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}
 

 if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate=$_POST['$update_usertype'];


    $query = "UPDATE register SET username='$username', email='$email', password='$password',usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}



if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}



if(isset($_POST['save_faculty']))
{
    $name = $_POST['faculty_name'];
    $design = $_POST['faculty_designation'];
    $description = $_POST['faculty_description'];
    $images = $_FILES['faculty_image']['name'];

    if(file_exists("upload/".$FILES["faculty_image"]["name"]))
    {
        $store=$_FILES["faculty_image"]["name"];
        $_SESSION['status']="Image already exists. '.$store.'";
        header('Location: faculty.php'); 

    }
    else{
    $query="INSERT INTO counsellor('name','design','desciption','images') VALUES ('$name','$design','$desciption','$images')";
     $query_run = mysqli_query($connection, $query);

     if($query_run)
     {
        if(move_uploaded_file($_FILES["faculty_image"]["tmp_name"]. "upload/".$_FILES["faculty_image"]["name"]));
        $_SESSION['status'] = "Admin Profile  Added";
        $_SESSION['status_code'] = "success";
        //  $_SESSION['success'] = "Faculty added";
         header('Location: faculty.php'); 
     }
     else
     {
        $_SESSION['status'] = "Admin Profile Not Added";
        $_SESSION['status_code'] = "error";     
        //  $_SESSION['success'] = "Faculty not added";
         header('Location: faculty.php'); 
     }   
    }

    
}

?>






