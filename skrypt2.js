function obliczModulo(){
    let liczba=parseInt(document.getElementById('liczba').value);
    if(liczba%3==0){
        document.getElementById('wynikModulo').value="Liczba jest podzielna przez 3"
    }else{
        document.getElementById('wynikModulo').value="Liczba nie jest podzielna przez 3"
    }
    if(liczba%4==0){
        document.getElementById('wynikModulo').value="Liczba jest podzielna przez 4"
    }else{
        document.getElementById('wynikModulo').value="Liczba nie jest podzielna przez 4"
    }
    if(liczba%5==0){
        document.getElementById('wynikModulo').value="Liczba jest podzielna przez 5"
    }else{
        document.getElementById('wynikModulo').value="Liczba nie jest podzielna przez 5"
    }
    if(liczba%9==0){
        document.getElementById('wynikModulo').value="Liczba jest podzielna przez 9"
    }else{
        document.getElementById('wynikModulo').value="Liczba nie jest podzielna przez 9"
    }
}
function sumaCyfrLiczby(liczba){
    let sumaCyfr=0;
    while (liczba>0){
        sumaCyfr=sumaCyfr+liczba%10;
        liczba=Math.floor(liczba/10);
    }
    return sumaCyfr;
}
function czyPodzielna(){
    let sumaCyfr=sumaCyfrLiczby(liczba);
    let wynik="Liczba jest podzielna przez 3 - Rekurencja";
    if(sumaCyfr==3 || sumaCyfr==6 || sumaCyfr==9){
        wynik="Liczba nie jest podzielna przez 3 - Rekurencja";
    }

    return wynik;
}
function obliczRekurencja(){
    let liczba=parseInt(document.getElementById('liczba').value);
    let odpowiedz=czyPodzielna(liczba);
    document.getElementById("wynikRekurencja").value=odpowiedz;  
}