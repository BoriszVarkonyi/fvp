<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Bevételezések</title>
</head>

<body class="storage">
    <header>
        <p>BOSS</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <nav>
        <a href="stores.php" class="navigation-option">ÜZLETEK</a>
        <a href="production.php" class="navigation-option">GYÁRTÁS</a>
        <a href="storage.php" class="navigation-option">KÉSZLET</a>
        <a href="products.php" class="navigation-option">TERMÉKEK</a>
    </nav>
    <main>
        <div id="main-top">
            <p id="page-title">Bevételezések</p>
            <div id="page-buttons">
                <button class="page-button secondary">Vissza</button>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>DÁTUM</p>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query = "SELECT * FROM `bevetelezesek`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($query_do)) {

                        $id = $row['id'];
                        $datum = $row['datum'];

                    ?>
                        <tr onclick="window.location.href='new-proceed.php?id=<?php echo $id; ?>&date=<?php echo $datum ?>'">
                            <td>
                                <p><?php echo $datum ?></p>
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