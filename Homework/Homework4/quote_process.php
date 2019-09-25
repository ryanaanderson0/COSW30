<?php

// capture data

    $quote = $_POST ['quote'];


// process data

     foreach( $quote as $v) {
        print $v;
    }
    
    
    // echo "<h1> This is your original quote: </h1> <p> $value</p>";

    if (!empty($quote)) {
        echo "<h2> Please enter a quote </h2>";
    }
    else  {
        echo "<h2> This is your original quote : $quote </h2> <br>";
    }
    
   
    echo "<h2> The total word count of your list is: </h2> <br>";
    echo count($quote) ;

?>