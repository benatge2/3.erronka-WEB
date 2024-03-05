<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/_parts/head.php');
?>

<title>50SLASH50</title>
</head>
<body>
    <div class="mobile-display">
        <div class="top-bar">
            <!--<div class="side_bar">
                
                //require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/side-bar.php')
                
            </div>-->
            <?php
            require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/supplier/top_bar.php');
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.side-bar-button').click(function(){
                $('.side_bar').toggleClass('side-bar_open');
                $('.side-bar-button').toggleClass('button-move');

                if ($('.side_bar').hasClass('side-bar_open')) {
                    $('.side_bar').show(); // Muestra el side-bar
                } else {
                    $('.side_bar').hide(); // Oculta el side-bar si no tiene la clase side-bar_open
                }
            });
        });
    </script>
</body> 