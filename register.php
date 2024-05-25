<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php

            include ("php/config.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone_num'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {

                    mysqli_query($con, "INSERT INTO users(Username,Email,phone_num,Password) VALUES('$username','$email','$phone','$password')") or die("Error Occured");

                    echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
                    echo "<a href='login.html'><button class='btn'
                    >Login Now</button>";
                }

            } else {

                ?>
            <?php } ?>
        </div>
</body>

</html>