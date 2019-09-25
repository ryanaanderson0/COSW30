<?php

// capture data

    $quote = $_POST ['quote'];


// process data

    echo "<h1> This is your original quote: $quote </h1>";

    if (!empty($quote)) {
        echo "<h2> Your original list is: </h2>";
    }
    
    foreach($quote_explode as $value) {
        echo "<p> $value </p>";
    }

?>