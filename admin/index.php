<?php include "../includes/db.php" ?>

<?php

//print_r($_POST);

if (isset($_POST['login-do'])) {

    $u_username = $_POST['username'];
    $u_password = $_POST['password'];

    $login_query = "SELECT `password`,`role` FROM users WHERE `username` = '$username'";
    $login_query_do = mysqli_query($connection, $login_query);

    while ($row = mysqli_fetch_array($login_query_do)){
        $d_pass = $row['password'];
        $d_role = $row['role'];
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
        <img src="../images/logo.jpg" alt="" srcset="">

        <form action="" method="post">
            <label for="login-username">FELHASZNÁLÓNÉV:</label>
            <input type="text" name="username" id="login-username">

            <label for="login-password">JELSZÓ:</label>
            <input type="text" name="password" id="login-password">

            <button name="login-do" type="submit">Bejelentkezés</button>
        </form>

    </div>
</body>
</html>