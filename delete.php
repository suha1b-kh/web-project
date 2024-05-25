<?php
session_start();

include ("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php

            include ("php/config.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "DELETE FROM `users` WHERE email='$email' and password = '$password'") or die("Select Error");
                echo "<div class='message'>
                      <p>Account Deleted successfully!</p>
                      <a href='register.html'>back to registeration</a>
                  </div> <br>";
                $row = mysqli_fetch_assoc($result);
            }


            ?>
        </div>
</body>

</html>