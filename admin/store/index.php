<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

print_r($_SESSION);

$manage_id = $_SESSION['bolt_id'];

$currentDate = date("Y-m-d");

$query = "SELECT statusz FROM bolt_napok WHERE datum = '$currentDate' AND `bolt_id` = $manage_id";
$query_do = mysqli_query($connection, $query);

if ($row = mysqli_fetch_assoc($query_do)) {

    $status = $row['statusz'];
}

switch ($status) {
    case 0:
        header("Location: opening.php?id=$manage_id&date=$currentDate");
        break;
    case 1:
        header("Location: control.php?id=$manage_id&date=$currentDate");
        break;
    case 2:
        header("Location: selling.php?id=$manage_id&date=$currentDate");
        break;
    case 3:
        header("Location: closing.php?id=$manage_id&date=$currentDate");
        break;
    case 4:
        header("Location: succesful-closing.php");
        break;
}


?>