<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Black Jack</title>
        
        <script src="./blackjack.js"></script>
    </head>

    <body>
        <h2>Dealer: <span id="sumaCrupier"></span></h2>
        <div id="cartasCrupier">
            <img id="hidden" src="./cards/BACK.png">
        </div>

        <h2>You: <span id="sumaJugador"></span></h2>
        <div id="cartasJugador"></div>

        <br>
        <button id="hit">Hit</button>
        <button id="stay">Stay</button>
        <p id="resultado"></p>
    </body>
</html>