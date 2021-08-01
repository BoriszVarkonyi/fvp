<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

if (isset($_POST['ujkat'])) {

    $name = $_POST['katnev'];

    $query = "INSERT INTO `kategoriak` (`nev`) VALUES ('$name')";
    $query_do = mysqli_query($connection, $query);

    header("Location: categories.php");
}

if (isset($_POST['delete_cat'])) {
    
    $id = $_POST['delete_cat'];

    $query = "DELETE FROM `kategoriak` WHERE `kategoriak`.`id` = $id";
    $query_do = mysqli_query($connection, $query);

    header("Location: categories.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Kategóriák</title>
</head>

<body class="product">
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
            <p id="page-title">Kategóriák</p>
            <div id="page-buttons">
                <form id="page-button-form" method="post" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="page-button-button" type="button" onclick="newProceedToggle()">Új kategória</button>
                    <button class="page-button secondary hidden" id="page-button-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="text" name="katnev" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="ujkat" id="page-button-submit-button" type="submit">Új kategória</button>
                </form>

                <a class="page-button secondary" href="products.php">Vissza</a>
            </div>
        </div>
        <form id="main-content" method="post">
            <table class="no-interaction">
                <thead>
                    <tr>
                        <th>
                            <p>NÉV</p>
                        </th>
                        <th class="square"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM `kategoriak`";
                    $query_do = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $id = $row['id'];
                        $nev = $row['nev'];

                    ?>
                        <tr>
                            <td>
                                <p><?php echo $nev; ?></p>
                            </td>
                            <td class="square">
                                <button type="submit" name="delete_cat" value="<?php echo $id; ?>"><img src="/../assets/icons/delete-black.svg"></button>
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