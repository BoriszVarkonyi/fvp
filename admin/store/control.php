<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$id = $_GET['id'];
$date = $_GET['date'];

$query_boltok = "SELECT * FROM `gyartas` WHERE `datum` = '$date'";
$query_boltok_do = mysqli_query($connection, $query_boltok);

if ($row = mysqli_fetch_assoc($query_boltok_do)) {

    $adat = json_decode($row['adat']);
}

if (isset($_POST['save'])) {

    $key = array_search($id, array_column($adat, 'id'));

    foreach ($adat[$key]->termekek as $innerkey => $value) {

        $seckey = array_search($value->id, array_column($adat[$innerkey]->termekek, 'id'));

        $darab = $_POST[$value->id];

        $adat[$key]->termekek[$seckey]->bevett = $darab;

    }

    $adat_json = json_encode($adat, JSON_UNESCAPED_UNICODE);

    $query = "UPDATE gyartas SET adat = '$adat_json'";
    $query_do = mysqli_query($connection, $query);

    $query = "UPDATE bolt_napok SET statusz = 2 WHERE bolt_id = $id AND datum = '$date'";
    $query_do = mysqli_query($connection, $query);

    header("Location: selling.php?id=$id&datum=$date");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Ellenőrzés</title>
</head>

<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">Ellenőrzés</p>
            <div id="page-buttons">
                <button class="page-button primary" type="submit" name="save" form="main-content">Mentés</button>
            </div>
        </div>
        <form id="main-content" action="" method="post">
            <table class="no-interaction">
                <thead>
                    <tr>
                        <th>
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>ELKÜLDÖTT</p>
                        </th>
                        <th class="square"></th>
                        <th>
                            <p>MEGÉRKEZETT</p>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $key = array_search($id, array_column($adat, 'id'));

                    foreach ($adat[$key]->termekek as $key => $value) {

                    ?>

                        <tr>
                            <td>
                                <p><?php echo $value->nev; ?></p>
                            </td>
                            <td>
                                <p><?php echo $value->mennyiseg; ?></p>
                            </td>
                            <td class="square">
                                <button type="button" onclick="copyToNextCell(this)"><img src="/../assets/icons/arrow-right-black.svg"></button>
                            </td>
                            <td>
                                <div>
                                    <input type="number" name="<?php echo $value->id; ?>" id="">
                                    <p>kg</p>
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