function przelicz(){
    let ilosc = parseInt(document.getElementById('ilosc').value);
    let rodzaj = document.getElementById('waluta').value;
    let koszt = 0;
    if (rodzaj=="euro"){
        koszt=ilosc*0.21;
       
    }
    else if (rodzaj=="dolar"){
        koszt=ilosc*0.23;
   
    }
    else if (rodzaj=="funt"){
        koszt=ilosc*0.19;
    
    }
    document.getElementById('wynik').value=ilosc + "zł to" +koszt+" "+rodzaj;
    
}