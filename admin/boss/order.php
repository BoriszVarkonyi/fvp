<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <link rel="stylesheet" href="/../css/admin-base-print-style.min.css" media="print">
    <title>Rendelés</title>
</head>

<body class="storage">
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
            <p id="page-title">Rendelés</p>
            <div id="page-buttons">
                <button class="page-button primary" onclick="window.print()">Nyomtatás</button>
                <a class="page-button secondary" href="storage.php">Vissza</a>
            </div>
        </div>
        <div id="main-content">
            <table class="order-table">
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

                    $query = "SELECT * FROM `keszlet`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $id = $row['id'];
                        $nev = $row['anyagnev'];
                        $mennyiseg = $row['mennyiseg'];
                        $mertekegyseg = $row['mertekegyseg'];
                        $kell_lennie = $row['kell_lennie'];
                    ?>
                        <tr>
                            <td>
                                <p><?php echo $nev ?></p>
                            </td>
                            <td>
                                <p><?php echo ( $kell_lennie - $mennyiseg ). " " . $mertekegyseg ?></p>
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