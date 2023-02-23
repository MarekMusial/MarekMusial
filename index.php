<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie ocen</title>
</head>
<body>
    <header><h1>Dodawanie ocen</h1>
</header>
    <main>
    <?php
        $connect=mysqli_connect('localhost', 'root', '', '4ti');
        if($connect){
            echo "połączyliśmy się z bazą<br>";
            $zapytanie="SELECT * FROM przedmiot";
            $wynik=mysqli_query($connect,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $przedmiot[]=$wiersz['id'];
                $idprzedmiot[]=$wiersz['przedmiot'];
                $idprzedmiot2[]=$wiersz['nauczyciel']."<br>";
            }
        }else{
            echo "błąd połączenia z bazą";
        }
        mysqli_close($connect);
    ?>
    <label for="przedmiot">Wybierz przedmiot</label>
    <select name="przedmiot" id="przedmiot">
    </select>
    </main>
    <footer>
        <p>Stronę wykonał Marek</p>
    </footer>
    
</body>
</html>