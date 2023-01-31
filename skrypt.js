function oblicz(){
    let ilosc = parseInt(document.getElementById('ilosc').value);
    let rodzaj = document.getElementById('rodzaj').value;
    let koszt = 0;
    if(rodzaj=="benzyna95"){
        koszt=ilosc*6.72;
    }
    else if(rodzaj=="benzyna98"){
        koszt=ilosc*7.56;
    }
    else if(rodzaj=="lpg"){
        koszt=ilosc*3.13;
    }
    else if(rodzaj=="olej"){
        koszt=ilosc*7.02;
    }
    document.getElementById('wynik').value=koszt;
}