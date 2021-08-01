<?php include "../../includes/db.php" ?>
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
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Termékek</title>
</head>

<body class="product">
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
            <p id="page-title">Termékek</p>
            <div id="page-buttons">
                <a class="page-button primary" href="product.php?id=new">Új termék</a>
                <a class="page-button secondary" href="categories.php">Kategóriák</a>
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
                            <p>KATEGÓRIA</p>
                        </th>
                        <th>
                            <p>ÁR</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM `termekek`";
                    $query_do = mysqli_query($connection, $query);

                    if (mysqli_num_rows($query_do) != 0) {

                        while ($row = mysqli_fetch_assoc($query_do)) {

                            $id = $row['id'];
                            $nev = $row['nev'];
                            $kat = $row['kat_id'];
                            $ar = $row['ar'];



                    ?>
                            <tr onclick="window.location.href='product.php?id=<?php echo $id; ?>'">
                                <td>
                                    <p><?php echo $nev ?></p>
                                </td>
                                <td>
                                    <p><?php echo $kat ?></p>
                                </td>
                                <td>
                                    <p><?php echo $ar ?> Ft</p>
                                </td>
                            </tr>

                    <?php

                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>