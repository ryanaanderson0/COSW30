<html>
<form method="POST" action="function.php">
    <h2>Number 1:</h2>
    <input type="number" name="num1"/>

    <h2>Number 2:</h2>
    <input type="number" name="num2"/>

    <br><input type="submit" value="CALCULATE"><br>
</form>
</html>

<?php
function addTotal() {
if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    echo $num1 . " + " . $num2 . " = " . $sum;
}
}

addTotal();
function multTotal() {
if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 * $num2;
    echo $num1 . " * " . $num2 . " = " . $sum;
}
}
multTotal();

function subTotal() {
if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 - $num2;
    echo $num1 . " - " . $num2 . " = " . $sum;

}
}
subTotal();
?>