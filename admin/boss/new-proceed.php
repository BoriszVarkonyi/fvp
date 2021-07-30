<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Új bevét</title>
</head>
<body class="production">
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
            <p id="page-title">Új bevét</p>
            <div id="page-buttons">
                <button type="submit" form="main-content" class="page-button primary">Mentés</button>
                <button class="page-button secondary">Vissza</button>
            </div>
        </div>
        <form id="main-content">
            <table class="no-interaction">
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
                    <tr>
                        <td>
                            <p>Neve</p>
                        </td>
                        <td>
                            <div>
                                <input type="number" name="" id="">
                                <p>kg</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Neve 2</p>
                        </td>
                        <td>
                            <div>
                                <input type="number" name="" id="">
                                <p>db</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>