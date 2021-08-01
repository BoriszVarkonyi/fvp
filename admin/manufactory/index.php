<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/admin-base-style.min.css">
    <title>Gyártások</title>
</head>
<body class="no-nav">
    <header>
        <p>ÜZEM</p>
        <button id="logout-button">Kilépés</button>
    </header>
    <main>
        <div id="main-top">
            <p id="page-title">Gyártások</p>
        </div>
        <div id="main-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <p>DÁTUM</p>
                        </th>
                        <th>
                            <p>STÁTUSZ</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="window.location.href='production.php'">
                        <td>
                            <p>Dátume</p>
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