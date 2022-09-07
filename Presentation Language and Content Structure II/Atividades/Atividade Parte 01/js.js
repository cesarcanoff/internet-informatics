function minimo(n1, n2){
    if(n2 > n1){
        return(n1);
    }if(n1 > n2){
    return(n2)
}
    }
function rpg(personagem1, personagem2){
 var m = Math.random();
 var g = Math.random();
 if(m > g){
     return(personagem1 + "Ganhou com o dano " + m);
 }if(g > m){
    return(personagem2 + "Ganhou com o dano " + g);
 }
}
 console.log(minimo(4, 6));
 console.log(rpg("Guerreiro", "Mago"));
