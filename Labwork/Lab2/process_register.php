<?php

// Capture data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    

// Check if data is good 

if($password == $confirm_password){
    echo "<h1>Congratualtions $first_name $last_name! Your email is $email! :)</h1>";
}
    else{
        echo "<h1>Sorry, password didn't match</h1>";
        echo '<a href="register.php">Try again!</a>';
    }

?>