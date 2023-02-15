function obliczNWW(){
    let liczba1=parseInt(document.getElementById("liczba1").value);
    let liczba2=parseInt(document.getElementById("liczba2").value);
    let x=liczba1*liczba2;
    
    while(liczba2!=0){
            let liczba3=liczba1%liczba2;
            liczba1=liczba2;
            liczba2=liczba3;

    }
    let NWD=liczba1;
    let NWW=x/NWD;
    document.getElementById("wynik").value=NWW;
}