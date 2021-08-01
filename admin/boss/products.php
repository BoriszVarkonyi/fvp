<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Termékek</title>
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
            <p id="page-title">Termékek</p>
            <div id="page-buttons">
                <a class="page-button primary" href="product.php">Új termék</a>
                <a class="page-button secondary" href="categories.php">Kategóriák</a>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>KATEGÓRIA</p>
                        </th>
                        <th>
                            <p>ÁR</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="window.location.href='product.php'">
                        <td>
                            <p>Sor 1</p>
                        </td>
                        <td>
                            <p>Sor 1</p>
                        </td>
                        <td>
                            <p>Sor 1</p>
                        </td>
                    </tr>
                    <tr onclick="window.location.href='product.php'">
                        <td>
                            <p>Sor 1</p>
                        </td>
                        <td>
                            <p>Sor 1</p>
                        </td>
                        <td>
                            <p>Sor 1</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>