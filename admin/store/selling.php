<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Eladás</title>
</head>
<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main class="selling">
        <div id="cash-register">
            <div id="register-numbers">
                <div>
                    <p>Fizet:</p>
                    <div>
                        <p id="full-price">15</p>
                        <p> Ft</p>
                    </div>
                </div>
                <div>
                    <p>Adott:</p>
                    <div>
                        <input type="number" name="" id="given-amount-input">
                        <p>Ft</p>
                    </div>
                </div>
                <div>
                    <p>Visszajár:</p>
                    <div>
                        <p id="change">5</p>
                        <p>Ft</p>
                    </div>
                </div>
            </div>
            <form action="">
                <input type="text" readonly>
                <button class="action-buttons selling">Eladás befejezése</button>
            </form>
        </div>
        <div id="products-listing">
            <div id="categories">
                <button class="category" id="category-1" onclick="selectCategory(this)">
                    <p>Édes</p>
                </button>

                <button class="category" id="category-2" onclick="selectCategory(this)">
                    <p>Sós</p>
                </button>

                <button class="category" id="category-3" onclick="selectCategory(this)">
                    <p>Kenyérfélék</p>
                </button>
            </div>
            <div id="products-wrapper">
                <p id="no-category-selected">Válassz ki egy kategóriát!</p>
                <div id="category-products-1" class="category-products-listing hidden">
                    <p class="category-title">Édes</p>
                    <div class="products-grid">
                        <div class="product" id="product-1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Mákosguba</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-2">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Édes</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-3">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Csiga</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-4">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-5">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-6">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="category-products-2" class="category-products-listing hidden">
                    <p class="category-title">Sós</p>
                    <div class="products-grid">
                        <div class="product" id="product-7">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-8">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Sajt</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-9">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Zsemle</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-10">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-11">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-12">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="category-products-3" class="category-products-listing hidden">
                    <p class="category-title">Kenyérfélék</p>
                    <div class="products-grid">
                        <div class="product" id="product-13">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Sima</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-14">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Jó</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-15">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kovász</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-16">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-17">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                        <div class="product" id="product-18">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" class="product-input" name="" id="" placeholder="db">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shopping-cart">
            <p class="shopping-cart-title">Kosár</p>

            <div id="shopping-cart-list">


                <div class="shopping-cart-item">
                    <div>
                        <p class="cart-item-name">Kifli</p>
                        <p class="cart-item-quantity"><span>1</span> db</p>
                        <p class="cart-item-price">250 Ft</p>
                    </div>
                </div>


                <form action="">
                    <button class="action-buttons closing">Bolt bezárása</button>
                </form>

            </div>


        </div>
    </main>
    <script src="/../js/admin-main-script.js"></script>
    <script src="/../js/selling.js"></script>
</body>
</html>