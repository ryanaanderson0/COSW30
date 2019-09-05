<?php

    // Capture the data from the form
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Create variables to match email and passward against
    
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    
    // Check if the data is good (if it matches the credentials)
    
    if ($email == $correct_email && $password == $correct_password) {
        // check the password
        echo '<h1>You logged in successfully! Good job </h1>';
        echo "<p>Email address: $email</p>";
        echo "<p>Password: $password</p>";
    } else {
        // error- output an error message
        echo '<h1>Sorry...Try again</h1>';
        echo '<a href-"login.php></a>';
    }
    // Output a little message for funsies 
?>