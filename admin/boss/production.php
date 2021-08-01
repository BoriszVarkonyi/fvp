<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Gyártás</title>
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
            <p id="page-title">Új gyártás / Gyártás dátuma</p>
            <div id="page-buttons">
                <button class="page-button primary">Új kategória</button>
                <a class="page-button secondary" href="print-production.php">Nyomtatás</a>
                <form action="">
                    <button class="page-button secondary">Törlés</button>
                </form>
                <a class="page-button secondary" href="productions.php">Vissza</a>
            </div>
            <div id="page-details">
                <div>
                    <p>MA</p>
                    <p>∙</p>
                    <p>KÉSZ</p>
                </div>
            </div>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>BOLT</p>
                        </th>
                        <th>
                            <p>GYÁRTÁS STÁTUSZ</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="window.location.href='store-production.php'">
                        <td>
                            <p>Helo</p>
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