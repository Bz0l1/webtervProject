<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorozatok</title>
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
            <h1>Kiemelt sorozatok</h1>
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
                        <td><a href="houseofthedragon.php"><img src="./img/posters/HouseOfDragons.jpg" alt="House of the Dragons"></a></td>
                        <td>House of the Dragons</td>
                        <td>2022</td>
                        <td>9.9</td>
                    </tr>
                    <tr>
                        <td><a href="ringsofpower.php"><img src="./img/posters/RingsOfPower.jpg"
                                    alt="Rings of Power"></a></td>
                        <td>Rings of Power</td>
                        <td>2022</td>
                        <td>9.4</td>
                    </tr>
                    <tr>
                        <td><a href="topgunmaverick.php"><img src="./img/posters/Wednesday.jpg"
                                    alt="Wednesday"></a></td>
                        <td>Wednesday</td>
                        <td>2022</td>
                        <td>7.5</td>
                    </tr>
                </tbody>
            </table>
            <h2>További sorozatok</h2>
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
                        <td><img src="./img/posters/Andor.jpg" alt="Andor">
                        </td>
                        <td>Andor</td>
                        <td>2022</td>
                        <td>8.2</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/ABesugo.jpg" alt="A Besúgó"></td>
                        <td>A Besúgó</td>
                        <td>2022</td>
                        <td>7.5</td>
                    </tr>
                    <tr>
                        <td><img src="./img/posters/Peacemaker.jpg" alt="Peacemaker"></td>
                        <td>Peacemaker</td>
                        <td>2022</td>
                        <td>5.3</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
<?php
include("./navbar.php");
?>
</html>