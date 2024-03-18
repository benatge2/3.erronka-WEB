//creamos clase cartas
class carta {
    //variable estática
    static x = 50;
    static y = 50;
constructor (valor, palo) {
    this.img = new Image ();
    this.valor = valor;
    this.palo = palo;

}
}

var cartas = [];
var cartasJugador = [];
var cartasCrupier = [];
var indiceCarta = 0;
var palos = ["S", "H", "D", "C"];
//Crear cartas 
for(i =0; i<100;i++){
    for (j = 1; j<=13; j++){
        cartas.splice(Math.random() * 52, 0, cartas[0]);
        cartas.shift();
    }
}

function dibujarCarta(CJ){
    //cargar cartas porque sino no carga
    CJ.img.onload = () => {
        ctx.drawImage(CJ.img, carta.x, carta.y, 239,335);
        carta.x +=300;

    };
    //Para cargar imagen conectar archivos de cartas con el palo correcto
    CJ.img.src ="../../imagenes/blackjack/cartas/" +CJ.valor.toString() + ".svg";
}

function pedirCartas () {
    //limitar máximo de cartas que podamos sacar para que el crupier pueda sacar
    if (indiceCarta < 8) {
        let CJ = carta[indiceCarta]; //carta jugada
        cartasJugador.push(CJ);
        dibujarCarta(CJ);
        indiceCarta++;
    }
}

//funcion para plantarse 
function plantarme () {

}