<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b30f0d5a09.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="/3.erronka-WEB/src/css/index.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        body {
            margin-bottom: 120px;
            background-color: white;
        }

        .top-bar {
            background-color: #F0DD6F;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            padding: 10px 30px;
            width: 100%;
        }

        .top-bar h1 {
            color: white;
            width: 150px;
            display: flex;
            justify-content: center;
            margin-left: 40px;
        }

        .sing-up {
            width: 130px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sing-up-button {
            background-color: #0A8C2C;
            width: 100px;
            font-size: 16px;
            font-weight: 900;
            padding: 0 10px;
            height: 30px;
            color: #F0DD6F;
            border-radius: 15px;
            box-shadow: 0 6.4px 1.6px 0.304px black;
            cursor: pointer;
        }

        .sing-up-button:hover {
            transition: all 0.5s;
            transform: translate(0, 6.4px);
            box-shadow: 0 0 0 0 black;
        }

        .sing-up-button:not(hover) {
            transition: all 1s;
        }

        .side-bar-button {
            display: flex;
            width: 40px;
            height: 40px;
            font-size: 23px;
            justify-content: center;
            align-items: center;
            color: white;
            border: solid 3px white;
            border-radius: 50%;
            transition: 0.5s;
        }
        .side-bar-button .fa-play{
            margin-left: 5px;
        }        
        .side-bar-button:hover {
            color: #0A8C2C;
        }

        .side_bar {
            position: fixed;
            height: 100%;
            width: 0px;
            background: #0A8C2C;
            padding: 15px;
            top: 0px;
            left: 0px;
            display: none;
            transition: 0, 5s;
        }

        .side_bar .menu {
            height: 100%;
        }

        .side_bar .menu .logo {
            color: #F0DD6F;
            font-size: 30px;
            width: 100px;
            height: 70px;
            margin-top: 20px;
        }

        ul {
            margin-top: 20px;
        }

        .side_bar .menu .bar-content ul li a {
            display: block;
            margin: 10px;
            padding: 13px 30px;
            font-size: 18px;
            transition: 0.5s;
            border-radius: 15px;
        }

        .side_bar .menu .bar-content ul li a:hover {
            background-color: #F0DD6F;
            color: black;
        }

        .side_bar .menu .bar-content .menu-items .section-title {
            font-size: 20px;
            padding: 20px 20px;
            font-weight: bold;
            border-bottom: solid 1px #F0DD6F;
            color: #F0DD6F;
        }

        a {
            color: #F0DD6F;
            font-weight: 1000;
        }

        .side-bar_open {
            width: 300px;
            /* Ancho del side-bar cuando está abierto */
            display: block;
            /* Muestra el side-bar cuando está abierto */
        }

        .button-move {
            margin-left: 290px;
        }

        @media screen and (max-width: 768px) {
            body {
                margin-bottom: 0px;
                /*Esto ajustalo segun tus necesidades*/
            }

            .top-bar {
                padding: 10px;
                /* Puedes ajustar este valor según tus necesidades */
                width: auto;
            }

            .sing-up {
                width: auto;
                /* Para que ocupe el ancho disponible */
            }

            .sing-up-button {
                width: auto;
                padding: 0 10px;
                font-size: 15px;
            }

            .side-bar_open {
                width: 768px;
            }
        }
    </style>

    <?php
    define('APP DIR', $_SERVER['DOCUMENT_ROOT']);
    ?>