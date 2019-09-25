<?php

// capture data

    $quote = $_POST ['quote'];


// process data

    echo "<h1> This is your original quote: </h1> <p> $quote </p>";

    if (!empty($quote)) {
        echo "<h2> Your quote as a list: </h2>";
    }
    
    foreach($quote_explode as $value) {
        echo "<p> $value </p>";
    }
    
    echo "<h2> The total word count of your list is: </h2>";
    echo "<p>" .count($quote_explode) ."</p>";

?>