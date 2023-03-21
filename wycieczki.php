<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓZY</h1>
    </header>
    <section class="lewy" style="float:left;">
        <h2>KONTAKT</h2>
        <a href="biuro@wycieczki.pl">napisz do nas</a>
        <br>
        <p>telefon: 555666777</p>
    </section>
    <section class="srodkowy" style="text-align:center;">
        <h2>GALERIA</h2>
    </section>
    <section class="prawy" style="text-align:right;">
        <h2>PROMOCJE</h2>
        <table style="float:right;">
            <thead>
                <tr>
                    <th>Jesień</th> <th>Grupa 4+</th> <th>Grupa 10+</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>5%</th> <th>10%</th> <th>15%</th>
                </tr>
            </tbody>
        </table>
    </section>
    <main style="text-align:center;">
        <br>
        <h2>LISTA WYCIECZEK</h2>
    </main>
    <footer>
        <p style="text-align: center;">Stronę wykonał: 00000</p>
    </footer>
    <?php
        $connect=mysqli_connect('localhost', 'root', '', 'bazasql');
        if($connect){
            echo "Połączyliśmy się z bazą";
        }
    ?>
</body>
</html>