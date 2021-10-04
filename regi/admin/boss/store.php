<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$bolt_id = $_GET['id'];

$days = ['hetfo' => 'Hétfő', 'kedd' => 'Kedd', 'szerda' => 'Szerda', 'csutortok' => 'Csütörtök', 'pentek' => 'Péntek', 'szombat' => 'Szombat', 'vasarnap' => 'Vasárnap'];

if (isset($_POST['ujbolt'])) {

    $nev = $_POST['nev'];
    $cim = $_POST['cim'];
    $leiras = $_POST['leiras'];

    //KÉP

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            $pic_name = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            $pic_name = "";
        }
    }

    //KÉP

    //NYITVATARTÁS

    $nyitvatartasok = [];

    foreach ($days as $key => $value) {

        $nap = new stdClass();

        $nap->nev = $value;
        $nap->nyitas = $_POST[$key . 'nyit'];
        $nap->zaras = $_POST[$key . 'zar'];

        array_push($nyitvatartasok, $nap);
    }

    $nyitvatartasok_json = json_encode($nyitvatartasok, JSON_UNESCAPED_UNICODE);

    //NYITVATARTÁS

    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];

    if ($bolt_id == 'new') {

        $query = "INSERT INTO `boltok`(`nev`, `felhasznalo`, `jelszo`, `nyitvatartas`, `cim`, `kep`, `leiras`, `statusz`) VALUES ('$nev','$felhasznalonev','$jelszo','$nyitvatartasok_json','$cim','$pic_name','$leiras',0)";
    } else {

        $query_pic = "SELECT kep FROM `boltok` WHERE `id` = $bolt_id";
        $query_pic_do = mysqli_query($connection, $query_pic);

        if ($row = mysqli_fetch_assoc($query_pic_do)) {

            unlink($row['kep']);
        }

        if ($pic_name != '') {
            $query = "UPDATE `boltok` SET `nev`='$nev',`felhasznalo`='$felhasznalonev',`jelszo`='$jelszo',`nyitvatartas`='$nyitvatartasok_json',`cim`='$cim',`kep`='$pic_name',`leiras`='$leiras' WHERE `id` = $bolt_id";
        } else {
            $query = "UPDATE `boltok` SET `nev`='$nev',`felhasznalo`='$felhasznalonev',`jelszo`='$jelszo',`nyitvatartas`='$nyitvatartasok_json',`cim`='$cim',`leiras`='$leiras' WHERE `id` = $bolt_id";
        }
    }


    $query_do = mysqli_query($connection, $query);

    echo mysqli_error($connection);

    header("Location: stores.php");
}

if (isset($_POST['del_shop'])) {

    $query_pic = "SELECT kep FROM `boltok` WHERE `id` = $bolt_id";
    $query_pic_do = mysqli_query($connection, $query_pic);

    if ($row = mysqli_fetch_assoc($query_pic_do)) {

        unlink($row['kep']);
    }

    $query = "DELETE FROM `boltok` WHERE `id` = $bolt_id";
    $query_do = mysqli_query($connection, $query);

    header("Location: stores.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Üzlet</title>
</head>

<body class="store">
    <header>
        <p>FŐNÖK</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <nav>
        <a href="stores.php" class="navigation-option">ÜZLETEK</a>
        <a href="productions.php" class="navigation-option">GYÁRTÁS</a>
        <a href="storage.php" class="navigation-option">KÉSZLET</a>
        <a href="products.php" class="navigation-option">TERMÉKEK</a>
    </nav>
    <main>

        <?php

        if ($bolt_id != 'new') {


            $query = "SELECT * FROM `boltok` WHERE `id` = $bolt_id";
            $query_do = mysqli_query($connection, $query);

            if ($row = mysqli_fetch_assoc($query_do)) {

                $nev = $row['nev'];
                $cim = $row['cim'];
                $leiras = $row['leiras'];

                $nyitvatartas_nyers = $row['nyitvatartas'];

                $nyitvatartas_toltve = json_decode($row['nyitvatartas']);

                $felhasznalonev = $row['felhasznalo'];
                $jelszo = $row['jelszo'];
            }
        }

        ?>

        <div id="main-top">
            <p id="page-title">Üzlet</p>
            <div id="page-buttons">
                <button class="page-button primary" name="ujbolt" type="submit" form="store-form">Hozzáadás / Mentés</button>

                <form action="" method="post">
                    <button class="page-button secondary" type="submit" name="del_shop">Törlés</button>
                </form>

                <a class="page-button secondary" href="stores.php">Vissza</a>
            </div>
        </div>
        <div id="main-content">
            <form action="" enctype="multipart/form-data" id="store-form" class="center-form" method="post" autocomplete="off">
                <div class="form-column">

                    <p class="form-column-title">ADATOK</p>

                    <label for="store-name">NÉV</label>
                    <input type="text" name="nev" value="<?php echo $qu = ($bolt_id == 'new') ? '' : $nev ?>" id="store-name">

                    <label for="store-address">CÍM</label>
                    <input type="text" name="cim" value="<?php echo $qu = ($bolt_id == 'new') ? '' : $cim ?>" id="store-address">

                    <label for="store-description">LEÍRÁS</label>
                    <textarea name="leiras" id="store-description" cols="20" rows="5"><?php echo $qu = ($bolt_id == 'new') ? '' : $leiras ?></textarea>

                    <label for="store-picture">KÉP</label>
                    <div class="file-upload">
                        <input type="file" name="fileToUpload" id="store-picture">
                    </div>

                </div>

                <div class="form-column">

                    <p class="form-column-title">NYITVATARTÁS ÉS BEJELENTKEZÉS</p>

                    <table class="no-interaction" id="store-business-hours">
                        <thead>
                            <tr>
                                <th>
                                    <p>NAP</p>
                                </th>
                                <th>
                                    <p>NYITÁS</p>
                                </th>
                                <th>
                                    <p>ZÁRÁS</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            $daycounter = 0;
                            foreach ($days as $key => $day) {

                            ?>

                                <tr>
                                    <td>
                                        <p><?php echo $day ?></p>
                                    </td>
                                    <td>
                                        <input type="time" value="<?php echo $azt = ($bolt_id != 'new') ? $nyitvatartas_toltve[$daycounter]->nyitas : '' ?>" name="<?php echo $key . 'nyit' ?>" id="">
                                    </td>
                                    <td>
                                        <input type="time" value="<?php echo $azt = ($bolt_id != 'new') ? $nyitvatartas_toltve[$daycounter]->zaras : '' ?>" name="<?php echo $key . 'zar' ?>" id="">
                                    </td>
                                </tr>

                            <?php
                                $daycounter++;
                            }
                            ?>
                        </tbody>
                    </table>

                    <label for="store-login-username">BOLTI FELHASZNÁLÓNÉV</label>
                    <input type="text" name="felhasznalonev" value="<?php echo $qu = ($bolt_id == 'new') ? '' : $felhasznalonev ?>" id="store-login-username">

                    <label for="store-login-password">BOLTI JELSZÓ</label>
                    <input type="password" name="jelszo" value="<?php echo $qu = ($bolt_id == 'new') ? '' : $jelszo ?>" id="store-login-password">

                </div>
            </form>
        </div>
    </main>
    <script src="/../js/admin-main-script.js"></script>
</body>

</html>