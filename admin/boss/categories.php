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
        <a href="productions.php" class="navigation-option">GYÁRTÁS</a>
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
                        <input type="text" name="" id="page-button-input" class="hidden">
                    </div>
                    <button class="page-button primary hidden" name="ujbevet" id="page-button-submit-button" type="submit">Új kategória</button>
                </form>

                <a class="page-button secondary" href="products.php">Vissza</a>
            </div>
        </div>
        <form id="main-content">
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
                    <tr>
                        <td>
                            <p>Sor 1</p>
                        </td>
                        <td class="square">
                            <button type="submit"><img src="/../assets/icons/delete-black.svg"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Sor 2</p>
                        </td>
                        <td class="square">
                            <button type="submit"><img src="/../assets/icons/delete-black.svg"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>