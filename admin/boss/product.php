<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$termek_id = $_GET['id'];

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

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

    $product_visibility = $_POST['product-visibility'];

    //RECEPT

    $quantity = $_POST['quantity'];

    $ingredients = [];

    $query = "SELECT * FROM `keszlet`";
    $query_do = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($query_do)) {

        $id = $row['id'];
        $nev = $row['anyagnev'];
        $mennyiseg = $row['mennyiseg'];
        $mertekegyseg = $row['mertekegyseg'];

        $anyag = new stdClass();
        $anyag->id = $id;
        $anyag->nev = $nev;

        //COUNT FOR ONE PRODUCT

        $egymenny = $_POST[$id] / $quantity;

        $anyag->mennyiseg = $egymenny;
        $anyag->mertekegyseg = $mertekegyseg;

        array_push($ingredients, $anyag);
    }

    $recept = json_encode($ingredients, JSON_UNESCAPED_UNICODE);

    echo mysqli_error($connection);


    if ($termek_id == 'new') {

        $query = "INSERT INTO `termekek`(`nev`, `kat_id`, `ar`, `leiras`, `kep`, `weben_van`, `recept`) VALUES ('$name','$category',$price,'$description','$pic_name',$product_visibility,'$recept')";
        $query_do = mysqli_query($connection, $query);
    } else {

        if ($pic_name == '') {

            $query = "UPDATE `termekek` SET `nev`='$name',`kat_id`='$category',`ar`='$price',`leiras`='$description',`weben_van`=$product_visibility,`recept`='$recept' WHERE `id` = $termek_id";
            $query_do = mysqli_query($connection, $query);
        } else {

            $query_del_pic = "SELECT kep FROM `termekek` WHERE `id` = $termek_id";
            $query_del_pic_do = mysqli_query($connection, $query_del_pic);

            if ($row = mysqli_fetch_assoc($query_del_pic_do)) {

                $del_pic_name = $row['kep'];
            }

            unlink($del_pic_name);

            $query = "UPDATE `termekek` SET `nev`='$name',`kat_id`='$category',`ar`='$price',`leiras`='$description',`kep`='$pic_name',`weben_van`=$product_visibility,`recept`='$recept' WHERE `id` = $termek_id";
            $query_do = mysqli_query($connection, $query);
        }
    }

    header("Location: products.php");
}

if (isset($_POST['del_product'])) {

    $query_del_pic = "SELECT kep FROM `termekek` WHERE `id` = $termek_id";
    $query_del_pic_do = mysqli_query($connection, $query_del_pic);

    if ($row = mysqli_fetch_assoc($query_del_pic_do)) {

        $del_pic_name = $row['kep'];
    }

    unlink($del_pic_name);

    $query = "DELETE FROM `termekek` WHERE `id` = $termek_id";
    $query_do = mysqli_query($connection, $query);

    header("Location: products.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Termék</title>
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

        <?php

        if ($termek_id != 'new') {

            $json_query = "SELECT * FROM `termekek` WHERE `id` = $termek_id";
            $json_query_do = mysqli_query($connection, $json_query);

            if ($row = mysqli_fetch_assoc($json_query_do)) {

                $nev = $row['nev'];
                $kategoria = $row['kat_id'];
                $ar = $row['ar'];
                $leiras = $row['leiras'];
                $weben_van = $row['weben_van'];
                $json_recept = json_decode($row['recept']);
            }
        }

        ?>

        <div id="main-top">
            <p id="page-title"><?php echo $qu = ($termek_id == 'new') ? 'Új termék hozzáadása' : $nev ?></p>
            <div id="page-buttons">
                <button class="page-button primary" name="save" type="submit" form="product-form">Mentés</button>

                <form action="" method="post">
                    <button class="page-button secondary" name="del_product" type="submit">Törlés</button>
                </form>

                <button class="page-button secondary" onclick="window.location.href='products.php'">Vissza</button>
            </div>
        </div>
        <div id="main-content">
            <form action="" method="post" id="product-form" enctype="multipart/form-data" class="center-form" autocomplete="off">
                <div class="form-column">

                    <p class="form-column-title">ADATOK</p>

                    <label for="product-name">NÉV</label>
                    <input type="text" value="<?php echo $qu = ($termek_id == 'new') ? '' : $nev ?>" name="name" id="product-name">

                    <label for="product-category">KATEGÓRIA</label>
                    <div class="select-wrapper">
                        <input type="text" name="category" value="<?php echo $qu = ($termek_id == 'new') ? '' : $kategoria ?>" id="product-category" onfocus="openSelect(this)">
                        <div class="select-options hidden">

                            <?php

                            $query = "SELECT * FROM `kategoriak`";
                            $query_do = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($query_do)) {

                                $nev = $row['nev'];

                            ?>
                                <button onclick="select(this)" type="button"><?php echo $nev; ?></button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <label for="product-price">ÁR / DARAB</label>
                    <input type="number" value="<?php echo $qu = ($termek_id == 'new') ? '' : $ar ?>" name="price" id="product-price">

                    <label for="product-description">LEÍRÁS</label>
                    <textarea name="description" id="product-description" cols="20" rows="5"><?php echo $qu = ($termek_id == 'new') ? '' : $leiras ?></textarea>

                    <label for="product-picture">KÉP</label>
                    <div class="file-upload">
                        <input type="file" name="fileToUpload" id="product-picture">
                    </div>

                    <label for="product-visibility">WEBOLDAL LÁTHATÓSÁG</label>
                    <div class="option_container">
                        <input type="radio" name="product-visibility" id="product-visible" value="1" <?php echo $qu = ($termek_id == 'new') ? 'checked' : ($weben_van == 1) ? 'checked' : '' ?> />
                        <label for="product-visible">Látható</label>
                        <input type="radio" name="product-visibility" id="product-not-visible" value="0" <?php echo $qu = ($weben_van == 0) ? 'checked' : '' ?> />
                        <label for="product-not-visible">Nem látható</label>
                    </div>

                </div>

                <div class="form-column">

                    <p class="form-column-title">RECEPT</p>

                    <label for="product-recipe-quantity">ENNYI DARAB</label>
                    <input type="text" value="<?php echo $qu = ($termek_id == 'new') ? '' : 1 ?>" name="quantity" id="product-recipe-quantity">

                    <label for="product-recipe">ENNYI HOZZÁVALÓ</label>
                    <table class="fixed no-interaction" id="product-recipe">
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

                                if ($termek_id != 'new') {
                                    $key = array_search($id, array_column($json_recept, 'id'));

                                    $mennyiseg = $json_recept[$key]->mennyiseg;
                                }


                                $mertekegyseg = $row['mertekegyseg'];




                            ?>

                                <tr>
                                    <td>
                                        <p><?php echo $nev ?></p>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="float" value="<?php echo $qu = ($termek_id == 'new') ? 0 : $mennyiseg ?>" name="<?php echo $id ?>" id="">
                                            <p><?php echo $mertekegyseg ?></p>
                                        </div>
                                    </td>
                                </tr>

                            <?php

                            }

                            ?>

                        </tbody>
                    </table>


                </div>
            </form>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>

</html>