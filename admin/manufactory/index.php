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
            <p id="page-title">Gyártások</p>
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

                    $query = "SELECT * FROM `gyartas`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $date = $row['datum'];
                        $status = $row['statusz'];

                    ?>

                        <tr onclick="window.location.href='production.php?date=<?php echo $date ?>'">
                            <td>
                                <p><?php echo $date; ?></p>
                            </td>
                            <td>
                                <p><?php echo secStatusConverter($status) ?></p>
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