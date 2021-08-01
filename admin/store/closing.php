<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Zárás</title>
</head>
<body class="no-nav">
    <header>
        <p>BOLT ∙ {BOLT NEVE}</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">Zárás</p>
            <div id="page-buttons">
                <button class="page-button primary" type="submit" form="main-content">Véglegesítés</button>
                <a class="page-button secondary" href="selling.php">Vissza</a>
            </div>
        </div>
        <div id="main-content">
            <label for="end-of-day-profit-input">NAPI BEVÉTEL LESZÁMOLVA</label>
            <input type="text" id="end-of-day-profit-input">
            <table class="no-interaction">
                <thead>
                    <tr>
                        <th>
                            <p>TERMÉK</p>
                        </th>
                        <th>
                            <p>MEGMARADT</p>
                        </th>
                        <th>
                            <p>SELEJT</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>kifli</p>
                        </td>
                        <td>
                            <div>
                                <input type="number" name="" id="">
                                <p>db</p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <input type="number" name="" id="">
                                <p>db</p>
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