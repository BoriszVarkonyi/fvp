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
            <p id="page-title">Üzlet neve</p>
            <div id="page-buttons">

                <form id="page-button-form" method="post" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="page-button-button" type="button" onclick="newProceedToggle()">Naptár</button>
                    <button class="page-button secondary hidden" id="page-button-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="date" name="" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="ujbevet" id="page-button-submit-button" type="submit">Ugrás</button>
                </form>

                <a class="page-button primary" href="store.php">Módosítás</a>
                <a class="page-button secondary" href="stores.php">Vissza</a>
            </div>
            <div id="page-details">
                <div>
                    <p>MA</p>
                    <p>∙</p>
                    <p>NYITVA</p>
                </div>
                <p>Bevétel: 0 Ft</p>
            </div>
        </div>
        <div id="main-content">
            <p class="table-title">TERMÉKEK A BOLTBAN</p>
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>ELKÜLDVE</p>
                        </th>
                        <th>
                            <p>LESZÁLLÍTVA</p>
                        </th>
                        <th>
                            <p>BEÜTVE</p>
                        </th>
                        <th>
                            <p>LESZÁMOLVA</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>finom</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p class="table-title">SELEJT</p>
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>MENNYISÉG</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>finom</p>
                        </td>
                        <td>
                            <p>4</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>