<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Eladás</title>
</head>
<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main class="selling">
        <div id="cash-register">
            <div id="numeric-pad">
                <button onclick="numPad(1)">1</button>
                <button onclick="numPad(2)">2</button>
                <button onclick="numPad(3)">3</button>
                <button onclick="numPad(4)">4</button>
                <button onclick="numPad(5)">5</button>
                <button onclick="numPad(6)">6</button>
                <button onclick="numPad(7)">7</button>
                <button onclick="numPad(8)">8</button>
                <button onclick="numPad(9)">9</button>
                <button onclick="numPad(0)">0</button>
            </div>
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
                <div id="category-products-1" class="category-products-listing hidden">
                    <p class="category-title">Édes</p>
                    <div class="products-grid">
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Mákosguba</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Édes</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Csiga</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="category-products-2" class="category-products-listing hidden">
                    <p class="category-title">Sós</p>
                    <div class="products-grid">
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Sajt</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Zsemle</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="category-products-3" class="category-products-listing hidden">
                    <p class="category-title">Kenyérfélék</p>
                    <div class="products-grid">
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Sima</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Jó</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kovász</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
                            </div>
                        </div>
                        <div class="product" id="1">
                            <p class="price">199 Ft</p>
                            <div class="product-name">
                                <p>Kifli</p>
                            </div>

                            <div class="product-input">
                                <input type="number" name="" id="" placeholder="db" onclick="setSelectedInput(this)" readonly>
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
                    <div onclick="expandCartItem(this)">
                        <p class="cart-item-name">Kifli</p>
                        <p class="cart-item-quantity">8 db</p>
                        <p class="cart-item-price">250 Ft</p>
                    </div>
                    <div class="closed">
                        <button><img src="/../assets/icons/remove-black.svg"></button>
                        <button><img src="/../assets/icons/add-black.svg"></button>
                        <button><img src="/../assets/icons/delete-black.svg"></button>
                    </div>
                </div>

            </div>


        </div>
    </main>
    <script src="/../js/main-script.js"></script>
    <script src="/../js/selling.js"></script>
</body>
</html>