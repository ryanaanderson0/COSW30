<?php

// capture data

    $quote = $_POST ['MyArray[]'];


// process data
     foreach($quote as $value) {
        echo "<p> $value </p>";
    }
    
    // echo "<h1> This is your original quote: </h1> <p> $value</p>";

    if (!empty($value)) {
        echo "<h2> Please enter a quote </h2>";
    }
    elseif ($value > 5) {
        echo "<h2> This is your original quote : $value </h2> <br>";
    }
    
   
    echo "<h2> The total word count of your list is: </h2> <br>";
    echo count ($value);

?>