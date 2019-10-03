

<html>
    <meta charset="utf-8">

    <head>
        <title>Homework 4: Arrays</title>

       <link href="https://fonts.googleapis.com/css?family=Contrail+One|Rubik+Mono+One|Staatliches&display=swap" rel="stylesheet">
        <style>


            h1{
                font-size: 2em;
                text-align: center;
                color:  #EFC4BC;
                font-family: 'Staatliches', cursive;
                text-shadow: 4px 4px #216869;
            }

            p{
                text-align: center;
                color: #9CC5A1;
                font-family: 'Contrail One', cursive;
                font-size: 1.5em;
            }

            .btn{
                background-color: #9CC5A1;
            }


            .body_text {
                background-color:#374741;
                width: 75%;
                margin: 0 auto;
                padding-top: 30px;
            }
            body{
                background-color: #E5DFD9;
            }
        </style>
    </head>
    <body>
    <div class="body_text">
    <?php

////////////////////////////////////////////////////////////////////////////
///////// CAPTURE DATA
////////////////////////////////////////////////////////////////////////////

    $quote = $_POST ['quote'];

    $quote_explode = explode(' ', $quote);

////////////////////////////////////////////////////////////////////////////
///////// PROCESS DATA
////////////////////////////////////////////////////////////////////////////

  echo "<h1> This is your original quote: </h1> <p> $quote</p>";

////////////////////////////////////////////////////////////////////////////
///////// echo the quote in reverse alphabetical order
////////////////////////////////////////////////////////////////////////////

  echo "<h1> The number of words in your quote is: </h1>" ;
  echo "<p>" .count($quote_explode). "</p>";

////////////////////////////////////////////////////////////////////////////
///////// echo the quote in alphabetical order
////////////////////////////////////////////////////////////////////////////

  echo "<h1> The quote in alphabetical order: </h1>";

  sort($quote_explode);

  foreach( $quote_explode as $key => $value) {
        echo "<p>".($value)."</p>";
  }

////////////////////////////////////////////////////////////////////////////
///////// echo the quote in reverse alphabetical order
////////////////////////////////////////////////////////////////////////////

  echo "<h1> The quote in reverse alphabetical order: </h1>";

  rsort($quote_explode);

  foreach( $quote_explode as $key => $value) {
        echo "<p>".($value)."</p>";
  }

////////////////////////////////////////////////////////////////////////////
///////// Output 3 additional words to the end of array & count the value
////////////////////////////////////////////////////////////////////////////

  echo "<h1> The quote with 3 additional words at the end: </h1>";

  $quote_array = $quote_explode;
  array_push($quote_array,"Somehow", "I", "Manage");

  foreach ($quote_array as $key => $value) {
      echo "<p>".($value)."</p>";
  }

  echo "<h1> The number of words in your new quote is: </h1>" ;
  echo "<p>" .count($quote_array). "</p>";

////////////////////////////////////////////////////////////////////////////
///////// Delete the first three words of the array & count the value
////////////////////////////////////////////////////////////////////////////

 echo "<h1> The quote without the first 3 words at the beginning: </h1>";

$array_slice_input = $quote_array;

$array_slice_output = array_slice($array_slice_input, 3);

 foreach ($array_slice_output as $key => $value) {
      echo "<p>".($value)."</p>";
  }

echo "<h1> The number of words in your new quote is: </h1>" ;
  echo "<p>" .count($array_slice_output). "</p>";


?>

        <button class="btn"><a href="quote.html">Input another quote!</a></button>
    </div>
    </body>
</html>