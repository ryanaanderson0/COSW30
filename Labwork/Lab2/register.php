<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>Registration form</title>
        
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        
        <style>
            
            input{
                padding: 10px;
                margin: 5px;
                font-family: 'Indie Flower', cursive;
            }
            
            
        </style>
    </head>
    <body>
        <h1>Registration Form</h1>
        
        <form action="process_register.php" method="POST">
            <label>First Name:</label>
            <input type="first_name" id="first_name" name="first_name" required>
            <br>
            
            <label>Last Name:</label>
            <input type="last_name" id="last_name" name="last_name" required>
            <br>
            
            <label>Email Address:</label>
            <input type="email" id="email" name="email" required>
            <br>
            
            <label>Password</label>
            <input type="password" id="password" name="password" required>
            <br>
            
            <label>Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            
            <button>Register!</button>
        </form>
        
    </body>
</html>