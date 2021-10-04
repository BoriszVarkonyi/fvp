<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$id = $_GET['material_id'];

if (isset($_POST['save_material'])) {

    $nev = $_POST['nev'];
    $mennyiseg = $_POST['mennyiseg'];
    $mertekegyseg = $_POST['mertekegyseg'];
    $kell_lennie = $_POST['kell_lennie'];


    if ($id == 'new') {
        $query = "INSERT INTO `keszlet`(`anyagnev`, `mennyiseg`, `kell_lennie`, `mertekegyseg`) VALUES ('$nev',$mennyiseg,$kell_lennie,'$mertekegyseg')";
        $query_do = mysqli_query($connection, $query);
        header("Location: storage.php");
    }
    else{
        $query = "UPDATE `keszlet` SET `anyagnev`='$nev',`mennyiseg`=$mennyiseg, `kell_lennie` = $kell_lennie, `mertekegyseg`='$mertekegyseg' WHERE `id` = '$id'";
        $query_do = mysqli_query($connection, $query);
        header("Location: storage.php");
    }

}

if (isset($_POST['torles'])) {

    $query = "DELETE FROM `keszlet` WHERE id = '$id'";
    $query_do = mysqli_query($connection, $query);
    header("Location: storage.php");

}

if ($id != 'new') {

    $query = "SELECT * FROM `keszlet` WHERE `id` = '$id'";
    $query_do = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($query_do)) {
        $a_nev = $row['anyagnev'];
        $a_mennyiseg = $row['mennyiseg'];
        $a_mertekegyseg = $row['mertekegyseg'];
        $a_kell_lennie = $row['kell_lennie'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Alapanyag</title>
</head>
<body class="storage">
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
        <div id="main-top">
            <p id="page-title">Alapanyag</p>
            <div id="page-buttons">
                <button type="submit" form="material-form" name="save_material" class="page-button primary">Hozzáadás</button>
                <form action="" method="post"><button type="submit" name="torles" class="page-button secondary">Törlés</button></form>
                <a class="page-button secondary" href="storage.php">Vissza</a>
            </div>
        </div>
        <div id="main-content">
            <form autocomplete="off" action="material.php?material_id=<?php echo $id; ?>" id="material-form" method="post">
                <label for="material-name">NÉV</label>
                <input type="text" placeholder="" value="<?php echo $termeknev = ($id != 'new') ? $a_nev : "" ?>" name="nev" id="material-name">

                <label for="material-quantity">MENNYISÉG</label>
                <input type="text" placeholder="" value="<?php echo $termekmenny = ($id != 'new') ? $a_mennyiseg : "" ?>" name="mennyiseg" id="material-quantity">

                <label for="material-needed-quantity">KELL HOGY LEGYEN</label>
                <input type="text" placeholder="" value="<?php echo $termekmertek = ($id != 'new') ? $a_kell_lennie : "" ?>" name="kell_lennie" id="material-needed-quantity">

                <label for="material-unit">MÉRTÉKEGYSÉG</label>
                <input type="text" placeholder="" value="<?php echo $termekmertek = ($id != 'new') ? $a_mertekegyseg : "" ?>" name="mertekegyseg" id="material-unit">
            </form>
        </div>
    </main>
    <script src="admin-main-script.js"></script>
</body>
</html>