<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Gyártások</title>
</head>
<body class="production">
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
            <p id="page-title">Gyártások</p>
            <div id="page-buttons">
                <form id="page-button-form" method="post" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="page-button-button" type="button" onclick="newProceedToggle()">Új gyártás</button>
                    <button class="page-button secondary hidden" id="page-button-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="date" name="" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="" id="page-button-submit-button" type="submit">Új gyártás</button>
                </form>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>DÁTUM</p>
                        </th>
                        <th>
                            <p>STÁTUSZ</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>Dátume</p>
                        </td>
                        <td>
                            <p>Kész</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>