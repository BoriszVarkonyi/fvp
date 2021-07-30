<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$bev_id = $_GET['id'];
$datum = $_GET['date'];

if (isset($_POST['save'])) {

    $query = "SELECT * FROM `keszlet`";
    $query_do = mysqli_query($connection, $query);

    $productsarray = [];

    $part_query = "";

    print_r($_POST);

    while ($row = mysqli_fetch_array($query_do)) {

        $anyag = new stdClass();
        $anyag->id = $row['id'];
        $anyag->mennyiseg = $_POST[$row['id']];
        $anyag->nev = $row['anyagnev'];
        $anyag->mertekegyseg = $row['mertekegyseg'];

        array_push($productsarray, $anyag);

        $vegsomenny = $row['mennyiseg'] + $anyag->mennyiseg;

        $part_query = "UPDATE `keszlet` SET mennyiseg = $vegsomenny WHERE `id` = $anyag->id;";
        $part_query_do = mysqli_query($connection, $part_query);
        echo mysqli_error($connection);
    }

    $json_bevet = json_encode($productsarray, JSON_UNESCAPED_UNICODE);
    $query = "INSERT INTO `bevetelezesek`(`datum`, `adat`) VALUES ('$datum','$json_bevet')";
    $query_do = mysqli_query($connection, $query);

    header("Location: storage.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Új bevét</title>
</head>

<body class="production">
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
            <?php

            if ($bev_id != 'new') {

                echo '<p id="page-title">' . $datum . '</p>';
            } else {
                echo '<p id="page-title">Új bevét</p>';
            }

            ?>
            <div id="page-buttons">
                <?php

                if ($bev_id == 'new') {

                    echo '<button type="submit" name="save" form="main-content" class="page-button primary">Mentés</button>';
                }
                ?>
                <button class="page-button secondary">Vissza</button>
            </div>
        </div>
        <form id="main-content" method="post" autocomplete="off">
            <table class="no-interaction">
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

                    if ($bev_id != 'new') {

                        $query = "SELECT * FROM `bevetelezesek` WHERE `id` = '$bev_id'";
                        $query_do = mysqli_query($connection, $query);

                        if ($row = mysqli_fetch_assoc($query_do)) {

                            $json_adat = json_decode($row['adat']);
                        }

                        foreach ($json_adat as $key => $value) {

                    ?>

                            <tr>
                                <td>
                                    <p><?php echo $value->nev ?></p>
                                </td>
                                <td>
                                    <div>
                                        <?php

                                        echo '<p>' . $value->mennyiseg . '</p>';
                                        ?>

                                        <p><?php echo $value->mertekegyseg ?></p>
                                    </div>
                                </td>
                            </tr>


                        <?php
                        }
                    } else {

                        $query = "SELECT * FROM `keszlet`";
                        $query_do = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($query_do)) {

                            $id = $row['id'];
                            $nev = $row['anyagnev'];
                            $mennyiseg = $row['mennyiseg'];
                            $mertekegyseg = $row['mertekegyseg'];

                        ?>

                            <tr>
                                <td>
                                    <p><?php echo $nev ?></p>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" value="0" name="<?php echo $id ?>" id="">
                                        <p><?php echo $mertekegyseg ?></p>
                                    </div>
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