<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie obecności</title>
</head>
<body>
    <?php
        $connect=mysqli_connect('localhost', 'root', '', '4ti');
        if($connect){
            echo "połączyliśmy się z bazą<br>";
            $zapytanie="SELECT * FROM obecnosc";
            $wynik=mysqli_query($connect,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                $id[]=$wiersz['id'];
                $data[]=$wiersz['data'];
                $idosoby[]=$wiersz['id_osoby']
                $obecny[]=$wiersz['obecny']."<br>";
        }else{
            echo "błąd połączenia z bazą";
        }

        mysqli_close($connect);
    ?>
    <header>
        <h1>Dodawanie obecności</h1>
    </header>
    <main>

    </main>
    <footer>
        Strone wykonał Marek
    </footer>
</body>
</html>