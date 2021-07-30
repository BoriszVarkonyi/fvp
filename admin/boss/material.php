<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Alapanyag</title>
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
            <p id="page-title">Alapanyag</p>
            <div id="page-buttons">
                <button type="submit" form="material-form" class="page-button primary">Hozzáadás</button>
                <button class="page-button secondary">Törlés</button>
                <button class="page-button secondary">Vissza</button>
            </div>
        </div>
        <div id="main-content">
            <form action="" id="material-form">
                <label for="material-name">NÉV</label>
                <input type="text" placeholder="" id="material-name">

                <label for="material-quantity">MENNYISÉG</label>
                <input type="text" placeholder="" id="material-quantity">

                <label for="material-unit">MÉRTÉKEGYSÉG</label>
                <input type="text" placeholder="" id="material-unit">
            </form>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>