<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$id = $_GET['id'];
$date = $_GET['date'];

$query = "SELECT * FROM `boltok` WHERE `id` = $id";
$query_do = mysqli_query($connection, $query);

if ($row = mysqli_fetch_assoc($query_do)){

    $nyitvatartas = json_decode($row['nyitvatartas']);

}

$day = date('w');

if ($day == 0) {

    $day = 7;
} else {

    $day - 1;
}

$day;

$nyitas = $nyitvatartas[$day-1]->nyitas;
$zaras = $nyitvatartas[$day-1]->zaras;

if (isset($_POST['nyit'])) {
    
    $query = "UPDATE bolt_napok SET statusz = 1 WHERE bolt_id = $id AND datum = '$date'";
    $query_do = mysqli_query($connection, $query);

    header("Location: control.php?id=$id&date=$date");

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Nyitás</title>
</head>

<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main class="center">
        <form id="opening-form" action="" method="post">
            <p>NYITÁS: <?php echo $nyitas?></p>
            <p>ZÁRÁS: <?php echo $zaras?></p>
            <button type="submit" name="nyit" class="page-button primary">Nyitás</button>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>