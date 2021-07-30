<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Bevitelezések</title>
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
            <p id="page-title">Bevitelezések</p>
            <div id="page-buttons">
                <button class="page-button primary">Új kategória</button>
                <button class="page-button secondary">Törlés</button>
                <button class="page-button secondary">Vissza</button>
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
                    <tr>
                        <td>
                            <p>neve</p>
                        </td>
                        <td>
                            <p>{memmyniség} {mértékegység}</p>
                        </td>
                    </tr>
                    <tr>
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
    <script src="main-script.js"></script>
</body>
</html>