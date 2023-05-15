<?php



//authorization - access control
// check whether the user is logged in or not


if(!isset($_SESSION['user']))   // if user session is not 

{
    //user is not logged in
    //Redirect to login page with messsage 
    $_SESSION['no-login-message'] = "<div class= 'error'> Please login to access Admin Panel.</div>";
    //Redirect to Login Page
    header('location:' .SETURL.'admin/login.php');
}