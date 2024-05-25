<html>
<header>
    <link rel="stylesheet" href="style/style.css">
</header>
<?php

include ("php/config.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['Email'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['id'] = $row['Id'];
    } else {
        echo "<div class='message'>
        <p>Wrong Email or Password</p>
    </div> <br>";
        echo "<a href='login.html'><button class='btn' style='margin-left: 600px;margin-top: 4px;'>Go Back</button>";

    }
    if (isset($_SESSION['valid'])) {
        header("Location: index.html");
    }
} else {

}
?>

</html>