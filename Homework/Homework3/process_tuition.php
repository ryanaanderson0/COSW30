
<html>
<head>
    <title> Homework 3: Tuition Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            text-align: center;
            font-size: 2em;
        }
        
        h1{
            font-size: 2em;
        }
        
        
        h2{
            font-size: 2.5em;
        }
        
       p{
            margin: 0;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
<?php

//Capture data:

    $resident = $_POST ['resident'];
    $units = $_POST ['units'];
    $services = $_POST ['services_card'];
    $parking = $_POST ['parking_permit'];

// Operators 

 $num1 = $units;
 $num2 = $resident;
 $num3 = 20;
 $sum_mult = $num1 * $num2;
 $add_total = $sum_mult + $parking + $num3 + $services;
 $randomNum = rand(0, $add_total);
 
 
 $total = $add_total - $randomNum;
 
 
//Heading

echo"<h1> LBCC Tuition Calculator</h1><br>";

//Resident or non-resident


 if(isset($_POST['resident'])){
        $resident = $_POST['resident']; 
 }
if ( $resident == 46){
     echo "<p> California Resident: Yes </p><br>";
 }
 else {
     echo "<p> California Resident: No </p><br>";
 }


// Unit calculator

  if(isset($_POST['units'])){
        $units = $_POST['units']; 
        echo "<p> Unit Cost: $units X $ $resident = $  $sum_mult </p><br>";  
    }

//Student Health fee--

echo "<p> Student Health fee: $20 </p><br>";


// Service card--

if(isset($_POST['services_card'])){
        $services = $_POST['services_card']; 
    }
if( $services == 20) {
    echo "<p> Services Card: $ 20 </p><br>";
}
else {
    echo "<p> Services Card: $ 0 </P><br>";
}

//Parking permit--

if(isset($_POST['parking_permit'])){
        $parking = $_POST['parking_permit']; 
    }
if( $parking == 30) {
    echo "<p> Parking Permit: $ 30 </p><br>";
}
else {
    echo"<p> Parking Permit: $ 0 </p><br>";
}

// Random Scholarship--

echo "<p>Scholarship Amount: $ $randomNum </p>";

// Total Tuition Cost--

echo "<h2> Total Tuition Cost= $ $total </h2>"


?>

</body>

</html>