<?php include "includes/db.php" ?>
<?php include "includes/functions.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.min.css">
    <title>Farkas Vadkovászos Pékség</title>
    <meta name="description" content="{Ide kéne egy leírás}">
</head>

<body>
    <header>
        <nav id="desktop-navigation">
            <div>
                <a href="#about" class="desktop-specific">Rólunk</a>
            </div>
            <div>
                <a href="#products" class="desktop-specific">Termékeink</a>
            </div>
            <div>
                <img id="website-logo" src="/../assets/images/logo.svg" alt="Farkas Vadkovászos Pékség Logo" loading="lazy">
            </div>
            <div>
                <a href="#stores" class="desktop-specific">Üzleteink</a>
                <button id="open-nav-button" class="mobile-specific" onclick="openMobileNavigation()" aria-label="Navigáció kinyitása" loading="lazy">
                    <img src="/../assets/icons/menu-white.svg" alt="Navigáció kinyitása ikon">
                </button>
                <button id="close-nav-button" class="mobile-specific hidden" onclick="closeMobileNavigation()" aria-label="Navigáció bezárása" loading="lazy">
                    <img src="/../assets/icons/menu-white.svg" alt="Navigáció bezárása ikon">
                </button>
            </div>
            <div>
                <a href="#contact" class="desktop-specific">Elérhetőség</a>
            </div>
        </nav>
    </header>
    <nav id="mobile-navigation" class="collapsed">
        <a href="#about" onclick="closeMobileNavigation()">Rólunk</a>
        <a href="#products" onclick="closeMobileNavigation()">Termékeink</a>
        <a href="#stores" onclick="closeMobileNavigation()">Üzleteink</a>
        <a href="#contact" onclick="closeMobileNavigation()">Elérhetőség</a>
    </nav>
    <main>
        <div id="show-off">

            <div id="show-off-content">
                <p class="show-off-text">FARKAS</p>
                <p class="show-off-text">VADKOVÁSZOS</p>
                <p class="show-off-text">PÉKSÉG</p>

                <?php

                    //get boltok szama for frontpage counter
                    $qry_get_shops = "SELECT `nev` FROM boltok";
                    $do_get_shops = mysqli_query($connection, $qry_get_shops);

                    if (!$num_rows_boltok = mysqli_num_rows($do_get_shops)) {
                        echo mysqli_error($connection);
                    }

                    //get egyedi termekek szama ami weben_van for frontpage counter
                    $qry_get_termekek = "SELECT `nev` FROM `termekek` WHERE `weben_van` = 1";
                    $do_get_termekek = mysqli_query($connection, $qry_get_termekek);

                    if (!$num_rows_termekek = mysqli_num_rows($do_get_termekek)){
                        echo mysqli_error($connection);
                    }

                ?>
                <div class="show-off-data">
                    <div>
                        <p><?php echo $num_rows_boltok ?></p>
                        <p>Üzlet</p>
                    </div>
                    <div>
                        <p><?php echo $num_rows_termekek ?></p>
                        <p>Egyedi Termék</p>
                    </div>
                </div>

                <!--
                    <div class="show-off-highlight">
                        <img src="/../assets/icons/priority-high-red.svg" alt="{Cím}" class="highlight-icon">
                        <p>Újdonságok</p>
                        <img src="/../assets/icons/chevron-right-black.svg" alt="{Cím}" class="highlight-arrow">
                    </div>
                 -->

            </div>

            <a href="#main-content-wrapper" id="go-down"><img src="/../assets/icons/expand-more-white.svg" alt="Tovább ikon" loading="lazy">Tovább</a>
        </div>
        <div id="main-content-wrapper">


            <section id="about">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Rólunk</h1>
                    </div>
                    <div class="content text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, rerum impedit nemo quas enim officiis sunt doloribus, qui quod quaerat dolorum rem possimus ea, laboriosam nostrum adipisci iste in consequatur.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit ab odio at beatae vitae libero suscipit reprehenderit sed necessitatibus omnis eos rerum, voluptas maiores laborum amet optio nemo molestias error quas facilis quasi qui. Vel rerum aperiam voluptate ipsum ea non unde repudiandae reiciendis eligendi provident nulla doloremque, perferendis delectus tempora odit nostrum natus tenetur!</p>
                    </div>
                </div>
            </section>

            <section class="light" id="products">
                <div class="content-wrapper">

                    <div class="content-header">
                        <h1>Termékeink</h1>
                    </div>
                    <?php
                        $qry_kiemelt_termk = "SELECT * FROM termekek WHERE weben_van = 2";
                        $do_kiemelt_termk = mysqli_query($connection, $qry_kiemelt_termk);
                        if ($num_rows = mysqli_num_rows($do_kiemelt_termk) != 0) {
                    ?>
                    <h2>Kiemelt Termékek</h2>
                    <?php
                        echo mysqli_num_rows($do_kiemelt_termk);
                        while ($row_item = mysqli_fetch_assoc($do_kiemelt_termk)) {
                            $item_name = $row_item['nev'];
                            $item_pic_path = $row_item['kep'];
                            if ($item_pic_path == "") {
                                $item_pic_path = "images/image-palceholder.svg";
                            }
                            $item_string_recept = $row_item['recept'];
                            $item_json_recept = json_decode($item_string_recept);
                            $item_leiras = $row_item['leiras'];
                            $item_string_alapanyagok = "";
                            //get alapanyagok
                            foreach ($item_json_recept as $recept_obj) {
                                if ($recept_obj -> mennyiseg > 0) {
                                    $item_string_alapanyagok .= $recept_obj -> nev . ", ";
                                }
                            }
                            $item_string_alapanyagok = substr($item_string_alapanyagok, 0, -2);
                    ?>



                        <div class="content grid">

                            <div class="section-item">
                                <h3><?php echo $item_name ?></h3>
                                <div class="section-image-wrapper">
                                    <img src="/../admin/boss/<?php echo $item_pic_path ?>" alt="{Cím}" loading="lazy">

                                </div>
                                <div class="section-item-details">
                                    <p><?php echo $item_leiras ?></p>
                                </div>
                                <div class="section-item-details">
                                    <p><?php echo $item_string_alapanyagok?><p>
                                </div>
                            </div>
                        </div>

                        <?php } }?>

                        <div class="content-footer">
                            <button aria-label="Többi megjelenítése" onclick="showMore(this, 0)">
                                <p>Többi <span>{7}</span> elem megjelelenítése</p>
                                <img src="/../assets/icons/visibility-red.svg" alt="További megjelenítése ikon" loading="lazy">
                            </button>
                        </div>


                    <?php

                        //get categories
                        $qry_get_categories = "SELECT * FROM kategoriak";
                        $do_get_categories = mysqli_query($connection, $qry_get_categories);

                        $cat_C = 1;
                        while ($row = mysqli_fetch_assoc($do_get_categories)) {
                            $cat_name = $row['nev'];
                            $cat_id = $row['id'];

                            if ($cat_name == "Alapanyagok") {
                                continue;
                            }

                            //get intems in category
                            $qry_get_items = "SELECT * FROM termekek WHERE kat_id = '$cat_name' AND weben_van = 1";
                            $do_get_items = mysqli_query($connection, $qry_get_items);

                            if ($num_rows = mysqli_num_rows($do_get_items)) {

                                if ($num_rows != 0) {

                    ?>
                                    <h2><?php echo $cat_name ?></h2>

                                    <div class="content grid">

                                        <?php
                                        while ($row_item = mysqli_fetch_assoc($do_get_items)) {
                                            $item_name = $row_item['nev'];
                                            $item_pic_path = $row_item['kep'];


                                            if ($item_pic_path == "") {
                                                $item_pic_path = "images/kenyer_kitoltes.jpg";//IDE PAKOLD BE A HELYET KRIS PLS_---------------------------
                                            }


                                            $item_string_recept = $row_item['recept'];
                                            $item_json_recept = json_decode($item_string_recept);
                                            $item_leiras = $row_item['leiras'];
                                            $item_string_alapanyagok = "";
                                            //get alapanyagok
                                            foreach ($item_json_recept as $recept_obj) {
                                                if ($recept_obj -> mennyiseg > 0) {
                                                    $item_string_alapanyagok .= $recept_obj -> nev . ", ";
                                                }
                                            }
                                            $item_string_alapanyagok = substr($item_string_alapanyagok, 0, -2);

                                        ?>
                                            <div class="section-item">
                                                <h3><?php echo $item_name ?></h3>
                                                <div class="section-image-wrapper">
                                                    <img src="/../admin/boss/<?php echo $item_pic_path ?>" alt="{Cím}" loading="lazy">

                                                </div>
                                                <div class="section-item-details">
                                                    <p><?php echo $item_leiras?></p>
                                                </div>
                                                <div class="section-item-details">
                                                    <p><?php echo $item_string_alapanyagok?></p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="content-footer">
                                        <button aria-label="Többi megjelenítése" onclick="showMore(this, <?php echo $cat_C ?>)"><!-- sorolva hany darab kategoria kell 0,1,2,3,4,5 -->
                                            <p>Többi <span>{7}</span> elem megjelelenítése</p>
                                            <img src="/../assets/icons/visibility-red.svg" alt="További megjelenítése ikon" loading="lazy">
                                        </button>
                                    </div>

                    <?php
                            }
                        }

                        $cat_C++;
                    } ?>



                </div>
            </section>


            <section class="medium" id="stores">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Üzleteink</h1>
                    </div>
                    <div class="content grid stores">
                        <?php
                            $qry_get_üzletek = "SELECT * FROM boltok";
                            $do_get_üzletek = mysqli_query($connection, $qry_get_üzletek);

                            while ($row = mysqli_fetch_assoc($do_get_üzletek)) {

                                $store_name = $row['nev'];
                                $store_nyitv = $row['nyitvatartas'];
                                $store_cim = $row['cim'];
                                $store_kep_path = $row['kep'];
                                $store_leiras = $row['leiras'];

                                if ($store_kep_path == "") {
                                    $store_kep_path = "images/kenyer_kitoltes.jpg";//IDE PAKOLD BE A HELYET KRIS PLS_---------------------------
                                }

                                $json_nyitv = json_decode($store_nyitv);

                        ?>
                        <div class="section-item">
                            <h3><?php echo $store_name ?></h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/<?php echo $store_kep_path ?>" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p><?php echo $store_leiras ?></p>
                                <p>
                                    <b>Cím: </b>
                                    <?php echo $store_cim ?>
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <?php
                                            foreach ($json_nyitv as $napi_nyitv) {

                                                $nap_name = $napi_nyitv -> nev;
                                                $nyitva = $napi_nyitv -> nyitas;
                                                $zarva = $napi_nyitv -> zaras;

                                            ?>
                                                <tr>
                                                    <td>
                                                        <p><?php echo $nap_name ?></p>
                                                    </td>
                                                    <td>
                                                        <p><?php echo $nyitva . " - " . $zarva ?></p>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </section>

            <section class="dark" id="contact">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Elérhetőségeink</h1>
                    </div>
                    <div class="content text-extended">
                        <p>Üzem és Iroda: <span>Fehér út 1</span></p>
                        <p>Telefonszám: <span>+36 70 123 5678</span></p>
                        <p>E-mail: <span>delisbistro@gmail.com</span></p>
                    </div>
                </div>
            </section>

        </div>
    </main>
    <footer>
        <div>
            <img src="/../assets/images/logo.svg" alt="Farkas Vadkovászos Pékség Logo" loading="lazy">
            <p>Farkas Vadkovászos Pékség &copy; 2021</p>
        </div>
        <div>
            <p>Weblapot készítette:</p>
            <p>Várkonyi Borisz, Wolfram Kristóf</p>
        </div>
    </footer>
    <script src="/../js/main-script.js"></script>
</body>
</html>