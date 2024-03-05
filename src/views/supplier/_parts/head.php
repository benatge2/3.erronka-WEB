<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b30f0d5a09.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="/3.erronka-WEB/src/css/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Afacad&family=Kode+Mono:wght@400..700&display=swap');
        * {
            font-family: "Kode Mono", monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            color: #F5FF76;
        }
        body{
            margin-bottom: 120px;
            background: #1CE3E1;
        }
        .mobile-display{
            width: 100%;
            height: 100%;
        }
        .mobile-display .top-bar{
            background: rgb(0,0,0);
            background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,220,255,1) 100%);
            width: 100%;
            height: 60px;
            display: grid;
            align-items: center;
        }
        .mobile-display .top-bar .top-bar-content{
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;            
        }
        .top-bar-content .side-bar-button{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            margin-left: 10px;
            transition: all 0,5s;
        }
        .side-bar-button .fa-bars{
            font-size: 23px;
        }
        .top-bar-content h1{
            letter-spacing: 1px;
            font-size: 25px;
        }
        .top-bar-content .sing-up{
            width: 100px;
            height: 30px;
            margin-right: 10px;
            display: grid;
            justify-content: center;
            align-items: center;
        }
        .top-bar-content .sing-up .sing-up-button{
            width: 80px;
            height: 30px;
            background-color: inherit;
            font-size: 12px;
            font-weight: 900;
            border: solid 1px black;
            letter-spacing: 1px;
            padding: 0 10px;
            box-shadow: 0 6.4px 1.6px 0.304px black;
        }
        .top-bar-content .sing-up .sing-up-button:hover{
            transition: all 0.5s;
            transform: translate(0, 6.4px);
            box-shadow: 0 0 0 0 black;
        }
        .sing-up-button:not(hover){
            transition: all 0.5s;
        }
        .top-bar-content .sing-up .sing-up-button span{
            color: black;
        }
        @media only screen and (max-device-width: 480px){
            .mobile-display{
                width: auto;
            }
        }
    </style>

    <?php
    define('APP DIR', $_SERVER['DOCUMENT_ROOT']);
    ?>