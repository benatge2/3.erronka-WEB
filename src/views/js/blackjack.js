let sumaCrupier = 0;
let sumaJugador = 0;

let numeroAsCrupier = 0;
let numeroAsJugador = 0; 

let oculto;
let mazo;

let puedePedir = true; //pedir hasta <=21

window.onload = function() {
    crearMazo();
    barajearMazo();
    iniciarPartida();
}

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
    console.log(mazo);
}

function iniciarPartida() {
    oculto = mazo.pop();
    sumaCrupier += obtenerValor(oculto);
    numeroAsCrupier += buscarAs(oculto);
    
    while (sumaCrupier < 17) {
      
        let cardImg = document.createElement("img");
        let card = mazo.pop();
        cardImg.src = "../../imagenes/blackjack/cards/" + card + ".png";
        sumaCrupier += obtenerValor(card);
        numeroAsCrupier += buscarAs(card);
        document.getElementById("dealer-cards").append(cardImg);
    }
    console.log(sumaCrupier);

    for (let i = 0; i < 2; i++) {
        let cardImg = document.createElement("img");
        let card = mazo.pop();
        cardImg.src = "./cards/" + card + ".png";
        sumaJugador += obtenerValor(card);
        numeroAsJugador += buscarAs(card);
        document.getElementById("your-cards").append(cardImg);
    }

    console.log(sumaJugador);
    document.getElementById("hit").addEventListener("click", pedir);
    document.getElementById("stay").addEventListener("click", plantar);

}

function pedir() {
    if (!puedePedir) {
        return;
    }

    let cardImg = document.createElement("img");
    let card = mazo.pop();
    cardImg.src = "./cards/" + card + ".png";
    sumaJugador += obtenerValor(card);
    numeroAsJugador += buscarAs(card);
    document.getElementById("your-cards").append(cardImg);

    if (valorAs(sumaJugador, numeroAsJugador) > 21) { //A, J, 8 -> 1 + 10 + 8
        puedePedir = false;
    }

}

function plantar() {
    sumaCrupier = valorAs(sumaCrupier, numeroAsCrupier);
    sumaJugador = valorAs(sumaJugador, numeroAsJugador);

    puedePedir = false;
    document.getElementById("hidden").src = "./cards/" + oculto + ".png";

    let message = "";
    if (sumaJugador > 21) {
        message = "You Lose!";
    }
    else if (sumaCrupier > 21) {
        message = "You win!";
    }
    //empate con 21
    else if (sumaJugador == sumaCrupier) {
        message = "Tie!";
    }
    else if (sumaJugador > sumaCrupier) {
        message = "You Win!";
    }
    else if (sumaJugador < sumaCrupier) {
        message = "You Lose!";
    }

    document.getElementById("suma-crupier").innerText = sumaCrupier;
    document.getElementById("suma-jugador").innerText = sumaJugador;
    document.getElementById("results").innerText = message;
}

function obtenerValor(card) {
    let data = card.split("-"); // "4-C" -> ["4", "C"]
    let value = data[0];

    if (isNaN(value)) { //A J Q K
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