<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Készlet</title>
</head>
<body class="storage">
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
            <p id="page-title">Készlet</p>
            <div id="page-buttons">

                <form id="new-proceed-form" class="page-button-wrapper" autocomplete="off">
                    <button class="page-button primary" id="new-proceed-button" type="button" onclick="newProceedToggle()">Új bevét</button>
                    <button class="page-button secondary hidden" id="new-proceed-back-button" type="button" onclick="newProceedToggle()">Vissza</button>
                    <div>
                        <input type="date" name="" id="new-proceed-date" class="hidden">
                    </div>
                    <button class="page-button primary hidden" id="new-proceed-submit-button" type="submit">Új bevét</button>
                </form>

                <a class="page-button primary" href="material.php">Új alapanyag</a>
                <a class="page-button secondary" href="proceeds.php">Bevételezések</a>
            </div>
        </div>
        <div id="main-content">
            <table>
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
                    <tr onclick="window.location.href='material.php'">
                        <td>
                            <p>neve</p>
                        </td>
                        <td>
                            <p>{memmyniség} {mértékegység}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>