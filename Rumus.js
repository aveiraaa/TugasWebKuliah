function hitung(){
    var a = parseInt(document.getElementById("pangkatdua").value);
    var b = parseInt(document.getElementById("pangkatsatu").value);
    var c = parseInt(document.getElementById("konstanta").value);
    var f; var x; var x2; var ftur; var D;
    
    D=(b*b)-(4*a*c)
    
    if(D>=0){
    x = c;
    f = (a*x*x)+(b*x)+c;
    ftur = (2*a*x)+(b*x);
    
    while((f<-0.0001)||(f>0.0001)){
    x = x-(f/ftur);
    f = (a*x*x)+(b*x)+c;
    ftur = (2*a*x)+b;
    }
    z = x.toFixed(4);
    
    document.getElementById("hasil").innerHTML = ""+z+"";
    
    x2 = 0-c;
    f = (a*x2*x2)+(b*x2)+c;
    ftur = (2*a*x2)+(b*x2);
    
    while((f<-0.0001)||(f>0.0001)){
    x2 = x2-(f/ftur);
    f = (a*x2*x2)+(b*x2)+c;
    ftur = (2*a*x2)+b;
    }
    y = x2.toFixed(4);
    document.getElementById("hasil").innerHTML = ""+z+"";
    document.getElementById("hasil2").innerHTML = ""+y+"";
    alert("Akar penyelesaiannya adalah: "+z+" dan "+y+"");
    
    }
    else{
    document.getElementById("hasil").innerHTML="Tidak Punya Penyelesaian";
    document.getElementById("hasil2").innerHTML="Tidak Punya Penyelesaian";
    alert("Tidak mempunyai akar penyelesaian");
    }
}