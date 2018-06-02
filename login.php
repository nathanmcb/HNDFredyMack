<!DOCTYPE php>
<?php
    //Checks for login details
    $username = $_POST[username];
    $password = $_POST[password];
    if ($username == 'nathan' && $password == 'password')   {
        
        //Code for successful login here
        
        echo'Login Successful!';
    }
    else{
        echo 'Login Failed!';
    }
?>
