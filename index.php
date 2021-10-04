<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.min.css">
    <title>Farkas Vadkovászos Pékség</title>
    <meta name="description" content="{Ide kéne egy leírás}">
</head>
<body>
    <header>
        <nav id="desktop-navigation">
            <div>
                <a href="#about" class="desktop-specific">Rólunk</a>
            </div>
            <div>
                <a href="#products" class="desktop-specific">Termékeink</a>
            </div>
            <div>
                <img id="website-logo" src="/../assets/images/logo.svg" alt="Farkas Vadkovászos Pékség Logo" loading="lazy">
            </div>
            <div>
                <a href="#stores" class="desktop-specific">Üzleteink</a>
                <button id="open-nav-button" class="mobile-specific" onclick="openMobileNavigation()" aria-label="Navigáció kinyitása" loading="lazy">
                    <img src="/../assets/icons/menu-white.svg" alt="Navigáció kinyitása ikon">
                </button>
                <button id="close-nav-button" class="mobile-specific hidden" onclick="closeMobileNavigation()" aria-label="Navigáció bezárása" loading="lazy">
                    <img src="/../assets/icons/menu-white.svg" alt="Navigáció bezárása ikon">
                </button>
            </div>
            <div>
                <a href="#contact" class="desktop-specific">Elérhetőség</a>
            </div>
        </nav>
    </header>
    <nav id="mobile-navigation" class="collapsed">
        <a href="#about" onclick="closeMobileNavigation()">Rólunk</a>
        <a href="#products" onclick="closeMobileNavigation()">Termékeink</a>
        <a href="#stores" onclick="closeMobileNavigation()">Üzleteink</a>
        <a href="#contact" onclick="closeMobileNavigation()">Elérhetőség</a>
    </nav>
    <main>
        <div id="show-off">

            <div id="show-off-content">
                <p class="show-off-text">FARKAS</p>
                <p class="show-off-text">VADKOVÁSZOS</p>
                <p class="show-off-text">PÉKSÉG</p>

                <div class="show-off-data">
                    <div>
                        <p>12</p>
                        <p>Üzlet</p>
                    </div>
                    <div>
                        <p>152</p>
                        <p>Egyedi Termék</p>
                    </div>
                </div>

                <!--
                    <div class="show-off-highlight">
                        <img src="/../assets/icons/priority-high-red.svg" alt="{Cím}" class="highlight-icon">
                        <p>Újdonságok</p>
                        <img src="/../assets/icons/chevron-right-black.svg" alt="{Cím}" class="highlight-arrow">
                    </div>
                 -->

            </div>

            <a href="#main-content-wrapper" id="go-down"><img src="/../assets/icons/expand-more-white.svg" alt="Tovább ikon" loading="lazy">Tovább</a>
        </div>
        <div id="main-content-wrapper">


            <section id="about">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Rólunk</h1>
                    </div>
                    <div class="content text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, rerum impedit nemo quas enim officiis sunt doloribus, qui quod quaerat dolorum rem possimus ea, laboriosam nostrum adipisci iste in consequatur.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit ab odio at beatae vitae libero suscipit reprehenderit sed necessitatibus omnis eos rerum, voluptas maiores laborum amet optio nemo molestias error quas facilis quasi qui. Vel rerum aperiam voluptate ipsum ea non unde repudiandae reiciendis eligendi provident nulla doloremque, perferendis delectus tempora odit nostrum natus tenetur!</p>
                    </div>
                </div>
            </section>

            <section class="light" id="products">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Termékeink</h1>
                    </div>

                    <h2>Kenyerek</h2>

                    <div class="content grid">

                        <div class="section-item highlight">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                    </div>

                    <div class="content-footer">
                        <button aria-label="Többi megjelenítése" onclick="showMore(this, 0)">
                            <p>Többi <span>{7}</span> elem megjelelenítése</p>
                            <img src="/../assets/icons/visibility-red.svg" alt="További megjelenítése ikon" loading="lazy">
                        </button>
                    </div>

                    <h2>Édesek</h2>

                    <div class="content grid">

                        <div class="section-item highlight">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                        <div class="section-item">
                            <h3>Kenyér</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/products/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia dolorum nobis odio error rerum commodi incidunt saepe illo! Obcaecati quasi corrupti quis quos est. Vero a ad itaque deleniti.</p>
                            </div>
                        </div>

                    </div>

                    <div class="content-footer">
                        <button aria-label="Többi megjelenítése" onclick="showMore(this, 1)">
                            <p>Többi <span>{7}</span> elem megjelelenítése</p>
                            <img src="/../assets/icons/visibility-red.svg" alt="További megjelenítése ikon" loading="lazy">
                        </button>
                    </div>

                </div>
            </section>

            <section class="medium" id="stores">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Üzleteink</h1>
                    </div>
                    <div class="content grid stores">
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}" loading="lazy">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-item">
                            <h3>Magyon jó fajta és finomn nagyon jó</h3>
                            <div class="section-image-wrapper">
                                <img src="/../admin/boss/images/stores/1.jpg" alt="{Cím}">

                            </div>
                            <div class="section-item-details">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit natus ad rerum veritatis unde nihil. Aliquid eius repellat placeat quaerat aut amet perspiciatis libero mollitia.</p>
                                <p>
                                    <b>Cím: </b>
                                    1142 Budapest, Korong utca 211-213
                                </p>
                                <p>
                                    <b>Tel.: </b>
                                    +36 70 255 22 77
                                </p>
                                <em>Nyitvatartás</em>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Hétfő</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Kedd</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szerda</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Csütörtök</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Péntek</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Szombat</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Vasárnap</p>
                                            </td>
                                            <td>
                                                <p>11:00 - 15:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="dark" id="contact">
                <div class="content-wrapper">
                    <div class="content-header">
                        <h1>Elérhetőségeink</h1>
                    </div>
                    <div class="content text-extended">
                        <p>Üzem és Iroda: <span>Nagyon jó hely, sok páncélos kocsi utca 4</span></p>
                        <p>Telefonszám: <span>+36 70 123 5678</span></p>
                        <p>E-mail: <span>email.cim@email.com</span></p>
                    </div>
                </div>
            </section>

        </div>
    </main>
    <footer>
        <div>
            <img src="/../assets/images/logo.svg" alt="Farkas Vadkovászos Pékség Logo" loading="lazy">
            <p>Farkas Vadkovászos Pékség &copy; 2021</p>
        </div>
        <div>
            <p>Weblapot készítette:</p>
            <p>Várkonyi Borisz, Wolfram Kristóf</p>
        </div>
    </footer>
    <script src="/../js/main-script.js"></script>
</body>
</html>