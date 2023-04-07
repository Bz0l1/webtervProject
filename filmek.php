<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmek</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.ico">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/styleLogin.css">
    <link rel="stylesheet" href="./styles/osszMusorStyle.css">
    <script src="./scripts/script.js"></script>
</head>

<?php
include("./navbar.php");
?>

<body>
    <main class="main">
        <section class="section">
            <h1>Kiemelt filmek</h1>
            <table class="film-table">
                <thead class="head">
                    <tr>
                        <th>Képek</th>
                        <th><button onclick="sortTable(1)">Címek</button></th>
                        <th><button onclick="sortTable(2)">Megjelenés éve</button></th>
                        <th><button onclick="sortTable(3)">Értékelés</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="avatar.php"><img src="./img/posters/Avatar2.jpg" alt="Avatar 2"></a></td>
                        <td>Avatar 2</td>
                        <td>2022</td>
                        <td>9.1</td>
                    </tr>
                    <tr>
                        <td><a href="blackadam.php"><img src="./img/posters/BlackAdam.jpg"
                                    alt="Black Adam"></a></td>
                        <td>Black Adam</td>
                        <td>2022</td>
                        <td>8.4</td>
                    </tr>
                    <tr>
                        <td><a href="topgunmaverick.php"><img src="./img/posters/TopGunMaverick.jpg"
                                    alt="Top Gun: Maverick"></a></td>
                        <td>Top Gun: Maverick</td>
                        <td>2022</td>
                        <td>7.8</td>
                    </tr>
                </tbody>
            </table>
            <h2>További filmek</h2>
            <table class="film-table">
                <thead class="head">
                    <tr>
                        <th>Képek</th>
                        <th><button onclick="sortTable(1, 1)">Címek</button></th>
                        <th><button onclick="sortTable(2, 1)">Megjelenés éve</button></th>
                        <th><button onclick="sortTable(3, 1)">Értékelés</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="./img/posters/AllQuietOnTheWesternFront.jpg" alt="All Quiet on the Western Front">
                        </td>
                        <td>All Quiet on the Western Front</td>
                        <td>2022</td>
                        <td>8.2</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/BatmanBegins.jpg" alt="Batman Begins"></td>
                        <td>Batman Begins</td>
                        <td>2022</td>
                        <td>9.0</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/Elvis.jpg" alt="Elvis"></td>
                        <td>Elvis</td>
                        <td>2022</td>
                        <td>7.5</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
<?php
include("./footer.php");
?>
</html>