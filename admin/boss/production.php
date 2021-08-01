<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$date = $_GET['date'];

$query_boltok = "SELECT * FROM `gyartas` WHERE `datum` = '$date'";
$query_boltok_do = mysqli_query($connection, $query_boltok);

if ($row = mysqli_fetch_assoc($query_boltok_do)) {

    $adat = json_decode($row['adat']);
}

if (isset($_POST['del_prod'])) {
    
    $query = "DELETE FROM `gyartas` WHERE `datum` = '$date'";
    $query_do = mysqli_query($connection, $query);

    header("Location: productions.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Gyártás</title>
</head>

<body class="production">
    <header>
        <p>BOSS</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <nav>
        <a href="stores.php" class="navigation-option">ÜZLETEK</a>
        <a href="productions.php" class="navigation-option">GYÁRTÁS</a>
        <a href="storage.php" class="navigation-option">KÉSZLET</a>
        <a href="products.php" class="navigation-option">TERMÉKEK</a>
    </nav>
    <main>
        <div id="main-top">
            <p id="page-title"><?php echo $date ?></p>
            <div id="page-buttons">
                <button class="page-button primary">Új kategória</button>
                <a class="page-button secondary" href="print-production.php">Nyomtatás</a>
                <form action="" method="post">
                    <button type="submit" name="del_prod" class="page-button secondary">Törlés</button>
                </form>
                <a class="page-button secondary" href="productions.php">Vissza</a>
            </div>
            <div id="page-details">
                <div>
                    <p>MA</p>
                    <p>∙</p>
                    <p>KÉSZ</p>
                </div>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>BOLT</p>
                        </th>
                        <th>
                            <p>GYÁRTÁS STÁTUSZ</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($adat as $key => $value) {

                    ?>
                        <tr onclick="window.location.href='store-production.php?id=<?php echo $value->id; ?>&date=<?php echo $date ?>'">
                            <td>
                                <p><?php echo $value->name; ?></p>
                            </td>
                            <td>
                                <p><?php echo secStatusConverter($value->status); ?></p>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>