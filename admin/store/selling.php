<?php include "../../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php

$shop_id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Eladás</title>
</head>

<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main class="selling">
        <div id="cash-register">
            <div id="register-numbers">
                <div>
                    <p>Fizet:</p>
                    <div>
                        <p id="full-price">15</p>
                        <p> Ft</p>
                    </div>
                </div>
                <div>
                    <p>Adott:</p>
                    <div>
                        <input type="number" name="" id="given-amount-input">
                        <p>Ft</p>
                    </div>
                </div>
                <div>
                    <p>Visszajár:</p>
                    <div>
                        <p id="change">5</p>
                        <p>Ft</p>
                    </div>
                </div>
            </div>
            <form action="">
                <input type="text" readonly>
                <button class="action-buttons selling">Eladás befejezése</button>
            </form>
        </div>
        <div id="products-listing">
            <div id="categories">

                <?php

                $query = "SELECT * FROM kategoriak";
                $query_do = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($query_do)) {

                    $nev = $row['nev'];

                    if ($nev == 'Alapanyagok') {
                        continue;
                    }

                ?>

                    <button class="category" id="<?php echo $nev; ?>" onclick="selectCategory(this)">
                        <p><?php echo $nev; ?></p>
                    </button>

                <?php
                }
                ?>
            </div>
            <div id="products-wrapper">
                <p id="no-category-selected">Válassz ki egy kategóriát!</p>

                <?php
                $first = 0;

                $query = "SELECT * FROM `termekek` ORDER BY `kat_id`";
                $query_do = mysqli_query($connection, $query);

                $voltkat = '';

                if (mysqli_num_rows($query_do) != 0) {

                    while ($row = mysqli_fetch_assoc($query_do)) {

                        $id = $row['id'];
                        $nev = $row['nev'];
                        $kat = $row['kat_id'];
                        $ar = json_decode($row['ar']);

                        if ($kat == 'Alapanyagok') {
                            continue;
                        }

                        if ($voltkat != $kat) {

                            if ($first != 0) {
                                echo "</div></div>";
                            }
                ?>
                            <div id="l_<?php echo $kat ?>" class="category-products-listing hidden">
                                <p class="category-title">Édes</p>
                                <div class="products-grid">

                                <?php
                            }
                                ?>

                                <div class="product" id="<?php echo $kat ?>">
                                    <p class="price"><?php $key = array_search($shop_id, array_column($ar, 'id')); echo $ar[$key]->price . " Ft"; ?></p>
                                    <div class="product-name">
                                        <p><?php echo $nev ?></p>
                                    </div>

                                    <div class="product-input">
                                        <input type="number" class="product-input" name="" id="" placeholder="db">
                                    </div>
                                </div>

                        <?php

                        $voltkat = $kat;

                        $first++;
                    }
                }
                        ?>
                                </div>
                            </div>
            </div>
        </div>
        <div id="shopping-cart">
            <p class="shopping-cart-title">Kosár</p>

            <div id="shopping-cart-list">


                <div class="shopping-cart-item">
                    <div>
                        <p class="cart-item-name">Kifli</p>
                        <p class="cart-item-quantity"><span>1</span> db</p>
                        <p class="cart-item-price">250 Ft</p>
                    </div>
                </div>


                <form action="">
                    <button class="action-buttons closing">Bolt bezárása</button>
                </form>

            </div>


        </div>
    </main>
    <script src="/../js/admin-main-script.js"></script>
    <script src="/../js/selling.js"></script>
</body>

</html>