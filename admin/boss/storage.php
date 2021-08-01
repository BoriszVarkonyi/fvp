<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

if (isset($_POST['ujbevet'])) {

    $date = $_POST['datum'];

    header("Location: new-proceed.php?id=new&date=$date");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Készlet</title>
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
            <p id="page-title">Készlet</p>
            <div id="page-buttons">

                <form id="page-button-form" method="post" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="page-button-button" type="button" onclick="newProceedToggle()">Új bevét</button>
                    <button class="page-button secondary hidden" id="page-button-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="date" name="datum" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="ujbevet" id="page-button-submit-button" type="submit">Új bevét</button>
                </form>

                <a class="page-button primary" href="material.php?material_id=new">Új alapanyag</a>
                <a class="page-button secondary" href="proceeds.php">Bevételezések</a>
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

                    $query = "SELECT * FROM `keszlet`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $id = $row['id'];
                        $nev = $row['anyagnev'];
                        $mennyiseg = $row['mennyiseg'];
                        $mertekegyseg = $row['mertekegyseg'];

                    ?>


                        <tr onclick="window.location.href='material.php?material_id=<?php echo $id; ?>'">
                            <td>
                                <p><?php echo $nev ?></p>
                            </td>
                            <td>
                                <p><?php echo $mennyiseg . " " . $mertekegyseg ?></p>
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