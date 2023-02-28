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
        } if($connect){
            $zapytanie="SELECT * FROM dane";
            $wynik=mysqli_query($connect,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $id[]=$wiersz['id'];
                $imie[]=$wiersz['imie'];
                $nazwisko[]=$wiersz['nazwisko'];
                $wiek[]=$wiersz['wiek']."<br>";
            }
        }else{
            echo "błąd połączenia z bazą";
        }
        mysqli_close($connect);
    ?>
    <label for="przedmiot">Wybierz przedmiot</label>
    <select name="przedmiot" id="przedmiot">
        <?php
            for($i=0;$i<count($przedmiot);$i++){
                echo "<option value=$przedmiot[$i]>$idprzedmiot[$i]</option>";
            }
        ?>
    </select>
    <label for="imie">Wybierz imie</label>
    <select name="imie" id="imie">    
        <?php
            for($a=0;$a<count($id);$a++){
                echo "<option value=$id[$a]>$imie[$a]</option>";
            }
        ?>
    </select>
    <label for="nazwisko">Wybierz nazwisko</label>
    <select name="nazwisko" id="nazwisko">    
        <?php
            for($b=0;$b<count($id);$b++){
                echo "<option value=$id[$b]>$nazwisko[$b]</option>";
            }
        ?>
    </select>
    </main>
    <footer>
        <p>Stronę wykonał Marek</p>
    </footer>
    
</body>
</html>