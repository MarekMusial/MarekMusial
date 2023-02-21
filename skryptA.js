function obliczA(){
    let a=parseInt(document.getElementById("wyrazA").value);
    let a1=parseInt(document.getElementById("wyrazA1").value);
    let n=parseInt(document.getElementById("wyrazA").value);
    let an=parseInt(document.getElementById("wyrazA2").value);

    if(a1<=10){
        let wynik=(an-a1)/(n-1);
    }
    document.getElementById("wynik").value=a1;
}

