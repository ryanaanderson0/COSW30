<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/




if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name       = $_POST['first_name'];
    $last_name        = $_POST['last_name'];
    $email            = $_POST['email'];
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

//initialize error array

    $error = [];


//check if the passwords match
   
    //Verify that the form is filled out/not empty
        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && ($password == $confirm_password) && ($password > 6) && ($confirm_password > 6)) {
            
             $insert_query = "INSERT INTO USER_ANDERSON (first_name, last_name, email, password)
                             VALUES ('$first_name', '$last_name', '$email', '$password')";

            $result = mysqli_query($connection, $insert_query);

            echo '<p> Congrats! You have successfully registered! </p>';
        }
        
        else {
            echo '<p>Error submitting registration</p>';
        }

        if($password !== $confirm_password) {
            echo '<p> The passwords do not match </p>';
        }

        if(empty($first_name)) {
            echo '<p> Please input first name </p>';
        }
    
        if($password < 6) {
            echo '<p> password needs to be more that 5 characters </p>';
        }
}


/// test
// echo '<p> Please input your first name </p>';
//         }
//         else if(empty($last_name)) {
//             echo '<p> Please input your last name </p>';
//         }
//         else if(empty($email)) {
//             echo '<p> Please input your email</p>';
//         }
//         else if(empty($password)) {
//             echo '<p> Please input your password </p>';
//         }

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
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" ><br>

   <!--Add a second password input so the user has to retype their password -->

        <label for="confirm_password">Retype Password</label>
        <input type="password" id="comfirm_password" name="confirm_password"><br>

     

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