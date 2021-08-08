<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$datumok = [];

$query_boltok = "SELECT datum FROM `gyartas`";
$query_boltok_do = mysqli_query($connection, $query_boltok);

while ($row = mysqli_fetch_assoc($query_boltok_do)) {

    array_push($datumok, $row['datum']);
}

if (isset($_POST['ujgyartas'])) {

    $date = $_POST['datum'];

    if (in_array($date, $datumok)) {

        header("Location: productions.php");
    } else {
        //BOLTOK + JSON STRUKTURA

        $query_boltok = "SELECT * FROM `boltok`";
        $query_boltok_do = mysqli_query($connection, $query_boltok);

        $boltok = [];

        while ($row = mysqli_fetch_assoc($query_boltok_do)) {

            $bolt = new stdClass();

            $bolt->id = $row['id'];
            $bolt->name = $row['nev'];
            $bolt->status = 0;
            $bolt->termekek = [];

            array_push($boltok, $bolt);
        }

        $boltok_json = json_encode($boltok, JSON_UNESCAPED_UNICODE);

        //BOLTOK + JSON STRUKTURA


        $query = "INSERT INTO `gyartas`(`datum`, `statusz`, `adat`) VALUES ('$date',0,'$boltok_json')";
        $query_do = mysqli_query($connection, $query);

        header("Location: production.php?date=$date");
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
            <p id="page-title">Gyártások</p>
            <div id="page-buttons">
                <form id="page-button-form" method="post" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="page-button-button" type="button" onclick="newProceedToggle()">Új gyártás</button>
                    <button class="page-button secondary hidden" id="page-button-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="date" name="datum" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="ujgyartas" id="page-button-submit-button" type="submit">Új gyártás</button>
                </form>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>DÁTUM</p>
                        </th>
                        <th>
                            <p>STÁTUSZ</p>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query_boltok = "SELECT * FROM `gyartas`";
                    $query_boltok_do = mysqli_query($connection, $query_boltok);

                    while ($row = mysqli_fetch_assoc($query_boltok_do)) {

                        $id = $row['id'];
                        $datum = $row['datum'];
                        $status = secStatusConverter($row['statusz']);

                    ?>

                        <tr onclick="window.location.href='production.php?date=<?php echo $datum; ?>'">
                            <td>
                                <p><?php echo $datum; ?></p>
                            </td>
                            <td>
                                <p><?php echo $status; ?></p>
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