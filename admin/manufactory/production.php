<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$osszesitett_termek = [];

$date = $_GET['date'];

$query_boltok = "SELECT * FROM `gyartas` WHERE `datum` = '$date'";
$query_boltok_do = mysqli_query($connection, $query_boltok);

if ($row = mysqli_fetch_assoc($query_boltok_do)) {

    $adat = json_decode($row['adat']);
}


foreach ($adat as $key => $bolt) {
    foreach ($bolt->termekek as $key => $termek) {

        if (!isset($osszesitett_termek[$termek->id])) {

            $osszesitett_termek[$termek->id] = new stdClass();
            $osszesitett_termek[$termek->id]->name = $termek->nev;
            $osszesitett_termek[$termek->id]->mennyiseg = $termek->mennyiseg;
        } else {
            $osszesitett_termek[$termek->id]->mennyiseg += $termek->mennyiseg;
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
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Gyártások</title>
</head>

<body class="no-nav">
    <header>
        <p>ÜZEM</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">Gyártások {DÁTUM}</p>
            <div id="page-buttons">
                <a class="page-button secondary" href="index.php">Vissza</a>
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
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>MENNYISÉG</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($osszesitett_termek as $key => $value) {

                    ?>
                        <tr onclick="window.location.href='product.php?date=<?php echo $date; ?>&quantity=<?php echo $value->mennyiseg; ?>&termek_id=<?php echo $key; ?>'">
                            <td>
                                <p><?php echo $value->name; ?></p>
                            </td>
                            <td>
                                <p><?php echo $value->mennyiseg; ?></p>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/admin-main-script.js"></script>
</body>

</html>