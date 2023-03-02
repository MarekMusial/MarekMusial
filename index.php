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
            $zapytanie="SELECT * FROM dane";
            $wynik=mysqli_query($connect,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $id[]=$wiersz['id'];
                $imie[]=$wiersz['imie'];
                $nazwisko[]=$wiersz['nazwisko'];
                $wiek[]=$wiersz['wiek']."<br>";
            }
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $przedmiotID=$_POST["przedmiot"];
                $ocena=$_POST["ocena"];
                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $insert="INSERT INTO oceny VALUES(null, '$imie', '$nazwisko', '$przedmiotID', '$ocena')";
                if(mysqli_query($connect, $insert)){
                    echo "Dodano dane do bazy";
                }else{
                    echo "Bład dodawania do bazy";
                }
                
            }
        }else{
            echo "błąd połączenia z bazą";
        }
        mysqli_close($connect);
    ?>
    <form method="POST">
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
                echo "<option value=$id[$a]>$imie[$a] $nazwisko[$a]</option>";
            }
        ?>
    </select>
  
    <br>
    <label for="ocena">Podaj ocenę</label>
    <input type="number" name="ocena" id="ocena">
    <br>
    <input type="submit" value="Zapisz do bazy">
        </form>
    </main>
    <footer>
        <p>Stronę wykonał Marek</p>
    </footer>
    
</body>
</html>