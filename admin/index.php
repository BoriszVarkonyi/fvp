<?php include "../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>


<?php

//print_r($_POST);

if (isset($_POST['login-do'])) {

    session_destroy();

    $u_username = $_POST['username'];
    $u_password = $_POST['password'];

    $login_query = "SELECT `password`,`role`,`bolt_id` FROM users WHERE `username` = '$u_username'";
    $login_query_do = mysqli_query($connection, $login_query);

    while ($row = mysqli_fetch_array($login_query_do)) {
        echo $d_pass = $row['password'];
        echo $role = $row['role'];
        echo $shop_id = $row['bolt_id'];
    }

    if (mysqli_num_rows($login_query_do) != 0) {
        if ($d_pass == $u_password) {
            if ($role == 1) {
                $_SESSION['role'] = "karesz";
                echo "OKE";
            } else if ($role == 2) {
                $_SESSION['role'] = "uzem";
            } else if ($role == 3) {
                $_SESSION['role'] = "bolt";
                $_SESSION['bolt_id'] = $shop_id;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base-style.css">
    <title>Farkas Vadkovászos Pékség Admin</title>
</head>

<body id="login-screen">
    <div id="login-panel">
        <img src="../assets/images/logo.jpg">

        <form action="" method="post">
            <label for="login-username">FELHASZNÁLÓNÉV:</label>
            <input type="text" name="username" id="login-username">

            <label for="login-password">JELSZÓ:</label>
            <input type="text" name="password" id="login-password">

            <button type="submit" name="login-do" id="login-submit">Bejelentkezés</button>
        </form>

    </div>
</body>

</html>