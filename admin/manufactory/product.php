<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$termek_id = $_GET['termek_id'];
$quantity = $_GET['quantity'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Gyártások</title>
</head>

<body class="no-nav">
    <header>
        <p>ÜZEM</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">2021 04 05 Gyártások KIFLI</p>
            <div id="page-buttons">
                <form action="">
                    <button class="page-button primary" type="submit">Kész</button>
                </form>
                <form action="">
                    <button class="page-button primary" type="submit">Sztornó</button>
                </form>
                <a class="page-button secondary" href="production.php">Vissza</a>
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
                            <p>ALAPANYAG</p>
                        </th>
                        <th>
                            <p>MENNYISÉG</p>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query = "SELECT `recept` FROM `termekek` WHERE id = $termek_id";
                    $query_do = mysqli_query($connection, $query);

                    echo mysqli_error($connection);

                    if ($row = mysqli_fetch_assoc($query_do)) {

                        $adat = json_decode($row['recept']);
                    }

                    foreach ($adat as $key => $value) {

                    ?>
                        <tr>
                            <td>
                                <p><?php echo $value->nev ?></p>
                            </td>
                            <td>
                                <p><?php echo ($value->mennyiseg * $quantity) ?></p>
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