<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Termék</title>
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
            <p id="page-title">Termék nev vagy "Új termék" ha új!!!</p>
            <div id="page-buttons">
                <button class="page-button primary" type="submit" form="product-form">Mentés</button>

                <form action="">
                    <button class="page-button secondary" type="submit">Törlés</button>
                </form>

                <button class="page-button secondary">Vissza</button>
            </div>
        </div>
        <div id="main-content">
            <form action="" id="product-form" class="center-form" autocomplete="off">
                <div class="form-column">

                    <p class="form-column-title">ADATOK</p>

                    <label for="product-name">NÉV</label>
                    <input type="text" name="" id="product-name">

                    <label for="product-category">KATEGÓRIA</label>
                    <div class="select-wrapper">
                        <input type="text" name="" id="product-category" onfocus="openSelect(this)">
                        <div class="select-options hidden">
                            <button onclick="select(this)" type="button">Opció 1</button>
                            <button onclick="select(this)" type="button">Opció 2</button>
                            <button onclick="select(this)" type="button">Opció 3</button>
                            <button onclick="select(this)" type="button">Opció 4</button>
                            <button onclick="select(this)" type="button">Opció 5</button>
                            <button onclick="select(this)" type="button">Opció 6</button>
                        </div>
                    </div>

                    <label for="product-price">ÁR / DARAB</label>
                    <input type="number" name="" id="product-price">

                    <label for="product-description">LEÍRÁS</label>
                    <textarea name="" id="product-description" cols="20" rows="5"></textarea>

                    <label for="product-picture">KÉP</label>
                    <div class="file-upload">
                        <input type="file" name="" id="product-picture">
                    </div>

                    <label for="product-visibility">WEBOLDAL LÁTHATÓSÁG</label>
                    <div class="option_container">
                        <input type="radio" name="product-visibility" id="product-visible" value="" checked/>
                        <label for="product-visible">Látható</label>
                        <input type="radio" name="product-visibility" id="product-not-visible" value=""/>
                        <label for="product-not-visible">Nem látható</label>
                    </div>

                </div>

                <div class="form-column">

                    <p class="form-column-title">RECEPT</p>

                    <label for="product-recipe-quantity">ENNYI DARAB</label>
                    <input type="text" name="" id="product-recipe-quantity">

                    <label for="product-recipe">ENNYI HOZZÁVALÓ</label>
                    <table class="fixed no-interaction" id="product-recipe">
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
                                    <div>
                                        <input type="number" name="" id="">
                                        <p>kg</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </form>
        </div>
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>