<?php
session_start();
include('database/dbconfig.php');
if($connection)
{
    //echo
}
else
{
    header("Location: database/dbconfig.php");
}
// if(!$_SESSION['username']){
//     header('Location:login.php');
// }
?>