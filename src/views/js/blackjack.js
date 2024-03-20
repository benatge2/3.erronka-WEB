let sumaCrupier = 0;
let sumaJugador = 0;

let numeroAsCrupier = 0;
let numeroAsJugador = 0; 

let oculto;
let mazo;

let puedePedir = true; //pedir hasta <=21

$(document).ready(function() {
    crearMazo();
    barajearMazo();
    iniciarPartida();
});

function crearMazo() {
    let values = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
    let types = ["C", "D", "H", "S"];
    mazo = [];

    for (let i = 0; i < types.length; i++) {
        for (let j = 0; j < values.length; j++) {
            mazo.push(values[j] + "-" + types[i]); //A-C -> K-C, A-D -> K-D
        }
    }
}

function barajearMazo() {
    for (let i = 0; i < mazo.length; i++) {
        let j = Math.floor(Math.random() * mazo.length); // (0-1) * 52 => (0-51.9999)
        let temp = mazo[i];
        mazo[i] = mazo[j];
        mazo[j] = temp;
    }
}

function iniciarPartida() {
    oculto = mazo.pop();
    sumaCrupier += obtenerValor(oculto);
    numeroAsCrupier += buscarAs(oculto);
    
    while (sumaCrupier < 17) {
        let cardImg = $("<img>").attr("src", "../../imagenes/blackjack/cards/" + mazo.pop() + ".png");
        sumaCrupier += obtenerValor(cardImg.attr("src"));
        numeroAsCrupier += buscarAs(cardImg.attr("src"));
        $("#cartasCrupier").append(cardImg);
    }

    for (let i = 0; i < 2; i++) {
        let cardImg = $("<img>").attr("src", "./cards/" + mazo.pop() + ".png");
        sumaJugador += obtenerValor(cardImg.attr("src"));
        numeroAsJugador += buscarAs(cardImg.attr("src"));
        $("#cartasJugador").append(cardImg);
    }

    $("#hit").on("click", pedir);
    $("#stay").on("click", plantar);
}

function pedir() {
    if (!puedePedir) {
        return;
    }

    let cardImg = $("<img>").attr("src", "./cards/" + mazo.pop() + ".png");
    sumaJugador += obtenerValor(cardImg.attr("src"));
    numeroAsJugador += buscarAs(cardImg.attr("src"));
    $("#cartasJugador").append(cardImg);

    if (valorAs(sumaJugador, numeroAsJugador) > 21) {
        puedePedir = false;
    }
}

function plantar() {
    sumaCrupier = valorAs(sumaCrupier, numeroAsCrupier);
    sumaJugador = valorAs(sumaJugador, numeroAsJugador);

    puedePedir = false;
    $("#hidden").attr("src", "./cards/" + oculto + ".png");

    let resultado;
    let message = "";
    if (sumaJugador > 21) {
        message = "Has perdido!";
        resultado = 0;
    }
    else if (sumaCrupier > 21) {
        message = "Has ganado!";
        resultado = 1;
    }
    else if (sumaJugador == sumaCrupier) {
        message = "Empate";
        resultado = 2;
    }
    else if (sumaJugador > sumaCrupier) {
        message = "Has ganado!";
        resultado = 1;
    }
    else if (sumaJugador < sumaCrupier) {
        message = "Has perdido!";
        resultado = 0;
    }

    $("#sumaCrupier").text(sumaCrupier);
    $("#sumaJugador").text(sumaJugador);
    $("#resultado").text(message);
    return resultado;
}

function obtenerValor(card) {
    let data = card.split("-"); 
    let value = data[0];

    if (isNaN(value)) {
        if (value == "A") {
            return 11;
        }
        return 10;
    }
    return parseInt(value);
}

function buscarAs(card) {
    if (card[0] == "A") {
        return 1;
    }
    return 0;
}

function valorAs(playerSum, playerAceCount) {
    while (playerSum > 21 && playerAceCount > 0) {
        playerSum -= 10;
        playerAceCount -= 1;
    }
    return playerSum;
}
