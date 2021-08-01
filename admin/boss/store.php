<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Üzlet</title>
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
            <p id="page-title">Üzlet</p>
            <div id="page-buttons">
                <button class="page-button primary" type="submit" form="store-form">Hozzáadás / Mentés</button>

                <form action="">
                    <button class="page-button secondary">Törlés</button>
                </form>

                <a class="page-button secondary" href="stores.php">Vissza</a>
            </div>
        </div>
        <div id="main-content">
            <form action="" id="store-form" class="center-form" autocomplete="off">
                <div class="form-column">

                    <p class="form-column-title">ADATOK</p>

                    <label for="store-name">NÉV</label>
                    <input type="text" name="" id="store-name">

                    <label for="store-address">CÍM</label>
                    <input type="text" name="" id="store-address">

                    <label for="store-description">LEÍRÁS</label>
                    <textarea name="" id="store-description" cols="20" rows="5"></textarea>

                    <label for="store-picture">KÉP</label>
                    <div class="file-upload">
                        <input type="file" name="" id="store-picture">
                    </div>

                </div>

                <div class="form-column">

                    <p class="form-column-title">NYITVATARTÁS ÉS BEJELENTKEZÉS</p>

                    <label for="store-business-hours">ENNYI HOZZÁVALÓ</label>
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
                            <tr>
                                <td>
                                    <p>Hétfő</p>
                                </td>
                                <td>
                                    <input type="time" name="" id="">
                                </td>
                                <td>
                                    <input type="time" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Kedd</p>
                                </td>
                                <td>
                                    <input type="time" name="" id="">
                                </td>
                                <td>
                                    <input type="time" name="" id="">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <label for="store-login-username">BOLTI FELHASZNÁLÓNÉV</label>
                    <input type="text" name="" id="store-login-username">

                    <label for="store-login-password">BOLTI JELSZÓ</label>
                    <input type="password" name="" id="store-login-password">

                </div>
            </form>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>