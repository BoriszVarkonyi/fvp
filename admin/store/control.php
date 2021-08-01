<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/base-style.css">
    <title>Ellenőrzés</title>
</head>
<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">Ellenőrzés</p>
            <div id="page-buttons">
                <button class="page-button primary" type="button" form="main-conten">Mentés</button>
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
                            <p>ELKÜLDÖTT</p>
                        </th>
                        <th class="square"></th>
                        <th>
                            <p>MEGÉRKEZETT</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>kifli</p>
                        </td>
                        <td>
                            <p>8</p>
                        </td>
                        <td class="square">
                            <button type="button" onclick="copyToNextCell(this)"><img src="/../assets/icons/arrow-right-black.svg"></button>
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
    </main>
    <script src="/../js/main-script.js"></script>
</body>
</html>