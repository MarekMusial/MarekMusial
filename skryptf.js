function obliczF(){
    let n=parseInt(document.getElementById("wyraz1").value);
    let Fn=0;
    if(n<=2){
        Fn=1;
    }else{
        let i=3;
        F1=1;
        F2=2;
        while(i<=n){
            Fn=F1+F2;
            F1=F2;
            F2=Fn
            i=i+1;
        }
    }
    document.getElementById("wynik").value=Fn;
}
