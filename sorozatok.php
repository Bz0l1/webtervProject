<?php
// Betöltjük a JSON fájl tartalmát egy változóba
$jsonData = file_get_contents('db/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);
?>

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
                        <td><a href="secondpage.php?valtozo=2"><img src="<?php echo $data['movies'][2]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][2]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][2]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][2]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=3"><img src="<?php echo $data['movies'][3]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][3]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][3]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][3]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=5"><img src="<?php echo $data['movies'][5]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][5]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][5]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][5]['rating']; ?>
                        </td>
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
                        <td><a href="secondpage.php?valtozo=9"><img src="<?php echo $data['movies'][9]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][9]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][9]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][9]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=10"><img src="<?php echo $data['movies'][10]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][10]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][10]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][10]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=11"><img src="<?php echo $data['movies'][11]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][11]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][11]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][11]['rating']; ?>
                        </td>
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