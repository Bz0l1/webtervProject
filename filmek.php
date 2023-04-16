<?php
// Betöltjük a JSON fájl tartalmát egy változóba
$jsonData = file_get_contents('db/filmek.json');

// JSON adatok átalakítása PHP tömbbe
$data = json_decode($jsonData, true);
?>

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
                        <td><a href="secondpage.php?valtozo=0"><img src="<?php echo $data['movies'][0]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][0]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][0]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][0]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=1"><img src="<?php echo $data['movies'][1]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][1]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][1]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][1]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=4"><img src="<?php echo $data['movies'][4]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][4]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][4]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][4]['rating']; ?>
                        </td>
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
                        <td><a href="secondpage.php?valtozo=6"><img src="<?php echo $data['movies'][6]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][6]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][6]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][6]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=7"><img src="<?php echo $data['movies'][7]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][7]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][7]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][7]['rating']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="secondpage.php?valtozo=8"><img src="<?php echo $data['movies'][8]['posterURL']; ?>"
                                    alt="A film borítóképe"></a></td>
                        <td>
                            <?php echo $data['movies'][8]['title']; ?>
                        </td>
                        <?php $year = $data['movies'][8]['premier']; ?>
                        <td>
                            <?php echo substr($year, 0, 4); ?>
                        </td>
                        <td>
                            <?php echo $data['movies'][8]['rating']; ?>
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