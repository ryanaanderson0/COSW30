<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/




if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//initialize error array

    $error = [];

//Verify that the form is filled out/not empty

    if(empty($_POST['first_name'])) {
        $error[] = 'You forgot to enter your first name!';
    }
    else {
        $first_name = trim($_POST['first_name']);
    }

//check if the passwords match

    if (!empty($_POST['password'])) {
        if ($_POST['password'] != $_POST['confirm_password']) {
            $error[] = 'Your passwords do not match!';
        }
        else{
        $password = trim($_POST['password']);
        }
    }else{
        $error[] = 'You forgot to enter a password!';
    }


    $insert_query = "INSERT INTO USER_ANDERSON (first_name, last_name, email, password)
        VALUES ('$first_name', '$last_name', '$email', '$password')
        ";

    $result = mysqli_query($connection, $insert_query);

}

/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = "SELECT * FROM USER_ANDERSON";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything

if($result) {
    // If the database query was successful, store
    // the array of users into a variable
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    // Output an error
    $error[] = 'Woops, did not enter data into the database!';
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <label for="confirm_password">Retype Password</label>
        <input type="password" id="comfirm_password" name="confirm_password"><br>

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>

            <?php // You will be adding a forEach loop here to output the users
            foreach($rows as $row){
                echo '<tr>
                        <td>'.$row['first_name']. '</td>
                        <td>'.$row['last_name']. '</td>
                        <td>'.$row['email']. '</td>
                        <td>'.$row['password']. '</td>
                        <td><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
                    </tr>';

            }
            ?>
        </tbody>
    </table>
</body>
</html>