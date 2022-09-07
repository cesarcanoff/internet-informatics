function interruptor(){
    var l = document.getElementById("Lampada");
    var b = document.getElementById("button");
    if(b.innerHTML == "Ligar"){
        l.src = "img/on.jpg";
        b.innerHTML = "Desligar";
    }else{
        l.src = "img/off.jpg";
        b.innerHTML = "Ligar";
    }
}