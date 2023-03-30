<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
    <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
    <?php
        $connect=mysqli_connect('localhost', 'root', '', 'hurtownia');
        if($connect){
        $zapytanie="SELECT zdjecie, imie, opinia FROM klienci INNER JOIN opinie ON klienci.id=opinie.klienci_id WHERE Klienci.Typy_id=2 OR Klienci.Typy_id=3;";
        $wynik=mysqli_query($connect,$zapytanie);
        while($wiersz=mysqli_fetch_array($wynik)){
            echo "<img src='".$wiersz['zdjecie']."' alt='l;ient'>";
            echo "<blockquote>".$wiersz['opinia']."</blockquote>";
            echo "<h4>".$wiersz['imie']."</h4><br>"; 

        }
        
    }   else{
        echo "Błąd połączenia z bazą";
    }
    mysqli_close($connect);
        
    ?>
    </main>
    <footer class="stopka1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </footer>
    <footer class="stopka2">
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
                $polaczenie=mysqli_connect('localhost', 'root', '', 'hurtownia');
                if($polaczenie){
                    $zapytanie2="SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3;";
                    $wynik2=mysqli_query($polaczenie,$zapytanie2);
                    while($wiersz2=mysqli_fetch_array($wynik2)){
                        echo "<li>".$wiersz2['imie']." ".$wiersz2['nazwisko'].", ".$wiersz2['punkty']."pkt. </li>";
                    }
                }
                mysqli_close($polaczenie); 
            ?>
        </ol>
    </footer>
    <footer class="stopka3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>
    <footer class="stopka4">
        <h3>Autor: 00000</h3>
    </footer>
</body>
</html>