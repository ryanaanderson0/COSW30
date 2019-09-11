<?php

// Capture data

    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    $email = $_POST ['email'];
    $gender = $_POST ['gender'];
    $first_name = $_POST ['first_name'];
    // foreach ($_POST ["age"] as $age);
    // foreach ($_POST["interests"] as $interest)
    
    $quantity = $_POST ['quantity'];
    $mailing_list = $_POST ['mailing_list'];
    $comments = $_POST ['comments'];
    
    
    echo "<h1> Thank you $first_name for completing the survey! This is the data you gave us: </h1> <br>";
    echo " First name: $first_name <br>";
    echo " Last name: $last_name <br>";
    echo " Email: $email <br> ";
    echo " Gender: $gender <br> ";
    
    //checkbox foreach loop
    foreach ($_POST["interests"] as $interest){
    echo "<p>$interest</p>";
    }
    
    echo " Age: $age <br>";
    echo " Interests: $interest <br> ";
    echo " Contribution: $quantity<br> ";
    echo " Mailing list: $mailing_list <br> ";
    echo " Comments: $comments";
    

?>