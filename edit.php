<?php
session_start();

include ("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="#" class="logo">Car<span>Point</span></a></p>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone_num'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email',phone_num='$phone' WHERE Id=$id ") or die("error occurred");
                // mysqli_query($con, "DELETE FROM `users` WHERE Id=$id ") or die("error occurred");
                if ($edit_query) {
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Go Home</button>";

                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_phone = $result['phone_num'];
                }

                ?>
                <header>Change Profile</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>"
                            autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off"
                            required>
                    </div>

                    <div class="field input">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $res_phone; ?>" autocomplete="off"
                            required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Update" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="delete" value="Delete Account" required>
                    </div>

                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>