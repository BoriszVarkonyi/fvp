<?php include "../../includes/db.php" ?>
<?php include "../../includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Üzletek</title>
</head>

<body class="store">
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
            <p id="page-title">Üzletek</p>
            <div id="page-buttons">
                <a class="page-button primary" href="store.php?id=new">Új üzlet</a>
            </div>
        </div>
        <form id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>ÜZLET</p>
                        </th>
                        <th>
                            <p>SZTÁTUSZ</p>
                        </th>
                        <th class="square"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query = "SELECT * FROM `boltok`";
                    $query_do = mysqli_query($connection, $query);

                    if (mysqli_num_rows($query_do) != 0) {

                        while ($row = mysqli_fetch_assoc($query_do)) {

                            $id = $row['id'];
                            $nev = $row['nev'];
                            $status = statusConverter($row['statusz']);

                    ?>

                            <tr>
                                <td onclick="window.location.href='store-dashboard.php?id=<?php echo $id; ?>date=today'">
                                    <p><?php echo $nev; ?></p>
                                </td>
                                <td onclick="window.location.href='store-dashboard.php?id=<?php echo $id; ?>date=today'">
                                    <p><?php echo $status; ?></p>
                                </td>
                                <td class="square">
                                    <a href="store.php?id=<?php echo $id; ?>"><img src="/../assets/icons/edit-black.svg"></a>
                                </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>