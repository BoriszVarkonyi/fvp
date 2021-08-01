<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Üzletek</title>
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
            <p id="page-title">Üzletek</p>
            <div id="page-buttons">
                <a class="page-button primary" href="store.php">Új üzlet</a>
            </div>
        </div>
        <form id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>ÜZLET</p>
                        </th>
                        <th>
                            <p>SZTÁTUSZ</p>
                        </th>
                        <th class="square"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td onclick="window.location.href='store-dashboard.php'">
                            <p>Sor 1</p>
                        </td>
                        <td onclick="window.location.href='store-dashboard.php'">
                            <p>Sor 1</p>
                        </td>
                        <td class="square">
                            <a href="store.php"><img src="/../assets/icons/edit-black.svg"></a>
                        </td>
                    </tr>
                    <tr>
                        <td onclick="window.location.href='store-dashboard.php'">
                            <p>Sor 1</p>
                        </td>
                        <td onclick="window.location.href='store-dashboard.php'">
                            <p>Sor 1</p>
                        </td>
                        <td class="square">
                            <a href="store.php"><img src="/../assets/icons/edit-black.svg"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>