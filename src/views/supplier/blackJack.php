<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/_parts/head.php');
?>

<title>50SLASH50</title>
</head>
<body>
    <div class="mobile-display">
        <div class="top-bar">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/top_bar.php');
            ?>
        </div>
                <section class="logIn hidden">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/Popup_login.php');
            ?>
        </section>
        <div class="overlay hidden"></div>
        <section class="register rHidden">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/Popup_register.php');
            ?>
        </section>
        <div class="registerOverlay rHidden"></div>        
        <div class="imgGigante blackJackimg">
            <h1>The Black Jack</h1>
            <p class="textPresentacion">
            ¡Bienvenido a la emocionante aventura del Black Jack! 
            ¿Estás listo para sumergirte en el mundo del Black Jack, donde cada carta puede cambiar tu destino?
            </p>
            <div class="ruletaButton">
                <button class="playGame">GO!</button>
            </div>
        </div>
        <div class="low-bar">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/low-bar.php');
            ?>
            <div class="side_bar">
                <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/side-bar.php');
                ?>
            </div>
        </div>
        <footer class="footer">
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/footer.php');
            ?>
        </footer>
    </div>
    <script>
        $(document).ready(function(){

            $('.side-bar-button').click(function(){
                $('.side_bar').toggleClass('side-bar_open');

                if ($('.side_bar').hasClass('side-bar_open')) {
                    $('.side_bar').show(); // Muestra el side-bar
                } else {
                    $('.side_bar').hide(); // Oculta el side-bar si no tiene la clase side-bar_open
                }
            });
            $('.close').click(function(){
                $('.side_bar').toggleClass('side-bar_close');

                if($('.side_bar').hasClass('side-bar_close')){
                    $('.side_bar').hide();//Oculta el side-bar al clickar en la 'X'
                }
            });

            var logIn = $(".logIn");
            var overlay = $(".overlay");
            var openLogIn = $(".sing-up-button");
            var closeLogIn = $(".fa-x");

            openLogIn.click(function(){
                logIn.removeClass('hidden');
                overlay.removeClass('hidden'); 
            });

            closeLogIn.click(function(){
                logIn.addClass('hidden');
                overlay.addClass('hidden');
            });

            overlay.click(function(){
                logIn.addClass('hidden');
                overlay.addClass('hidden');
            });

            var register = $(".register");
            var registerOverlay = $(".registerOverlay");
            var openRegister = $(".openRegister");
            var closeRegister = $(".fa-x");
            var openLog = $('.openLog');

            openRegister.click(function(){
                register.removeClass('rHidden');
                registerOverlay.removeClass('rHidden'); 
                logIn.addClass('hidden');
                overlay.addClass('hidden');               
            });

            closeRegister.click(function(){
                register.addClass('rHidden');
                registerOverlay.addClass('rHidden');
            });

            openLog.click(function(){
                logIn.removeClass('hidden');
                overlay.removeClass('hidden');
                register.addClass('rHidden');
                registerOverlay.addClass('rHidden');
            });
            registerOverlay.click(function(){
                register.addClass('rHidden');
                registerOverlay.addClass('rHidden');
                logIn.addClass('hidden');
                overlay.addClass('hidden');  
            })

        });
        
    </script>
</body>