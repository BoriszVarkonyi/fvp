<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$date = $_GET['date'];
$store_id = $_GET['id'];

$query_boltok = "SELECT * FROM `gyartas` WHERE `datum` = '$date'";
$query_boltok_do = mysqli_query($connection, $query_boltok);

if ($row = mysqli_fetch_assoc($query_boltok_do)) {

    $adat = json_decode($row['adat']);
}

if (isset($_POST['save'])) {

    print_r($_POST);

    $minus_query = "";

    $mibolmennyi = [];

    $query = "SELECT * FROM `termekek`";
    $query_do = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($query_do)) {

        $id = $row['id'];
        $nev = $row['nev'];

        $recept = json_decode($row['recept']);

        $termek = new stdClass();
        $termek->id = $id;
        $termek->nev = $nev;
        $termek->mennyiseg = $_POST[$id];
        $termek->bevett = 0;
        $termek->leszamolt = 0;

        array_push($mibolmennyi, $termek);

        foreach ($recept as $key => $value) {

            $key = array_search($store_id, array_column($adat, 'id'));
            $keysec = array_search($id, array_column($adat[$key]->termekek, 'id'));

            if (isset($adat[$key]->termekek[$keysec])) {
                $voltmennyiseg = $adat[$key]->termekek[$keysec]->mennyiseg;
                $egeszites = $value->mennyiseg * $voltmennyiseg;

                $plus_query = "UPDATE keszlet SET mennyiseg = mennyiseg + $egeszites WHERE `id` = $value->id;";
                $plus_query_do = mysqli_query($connection, $plus_query);
            }

            $ujmennyiseg = $value->mennyiseg * ($_POST[$id]);

            $minus_query = "UPDATE keszlet SET mennyiseg = mennyiseg - $ujmennyiseg WHERE `id` = $value->id;";
            $minus_query_do = mysqli_query($connection, $minus_query);
        }
    }

    $key = array_search($store_id, array_column($adat, 'id'));

    $adat[$key]->termekek = $mibolmennyi;

    $encoded = json_encode($adat, JSON_UNESCAPED_UNICODE);

    $query = "UPDATE `gyartas` SET adat = '$encoded' WHERE datum = '$date'";
    $query_do = mysqli_query($connection, $query);

    //BOLT NAPOK GENERALAS

    $query_day = "SELECT * FROM `bolt_napok` WHERE bolt_id = $store_id AND datum = '$date'";
    $query_day_do = mysqli_query($connection, $query_day);

    if (mysqli_num_rows($query_day_do) == 0) {
        
        $create_day_query = "INSERT INTO `bolt_napok`(`bolt_id`, `datum`, `statusz`) VALUES ($store_id,'$date',0)";
        $create_day_query_do = mysqli_query($connection, $create_day_query);
    }

    header("Location: production.php?date=$date");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Üzlet gyártása</title>
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
            <p id="page-title">{Üzlet név} gyártása</p>
            <div id="page-buttons">
                <button class="page-button primary" name="save" type="submit" form="main-content">Mentés / Módósítás</button>
                <a class="page-button secondary" href="production.php?date=<?php echo $date ?>">Vissza</a>
            </div>
            <div id="page-details">
                <div>
                    <p>MA</p>
                    <p>∙</p>
                    <p>KÉSZ</p>
                </div>
            </div>
        </div>
        <form id="main-content" action="" method="post">
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

                    $query = "SELECT * FROM `termekek`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $id = $row['id'];
                        $nev = $row['nev'];

                        $key = array_search($store_id, array_column($adat, 'id'));
                        $keysec = array_search($id, array_column($adat[$key]->termekek, 'id'));

                    ?>

                        <tr>
                            <td>
                                <p><?php echo $nev ?></p>
                            </td>
                            <td>
                                <div>
                                    <input type="float" value="<?php echo $qu = (isset($adat[$key]->termekek[$keysec])) ? $adat[$key]->termekek[$keysec]->mennyiseg : '' ?>" name="<?php echo $id ?>" id="">
                                    <p>darab</p>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>