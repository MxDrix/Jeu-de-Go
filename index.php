<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="view/style.css">
        <meta http-equiv="content-language" content="fr" />
        <title>Le jeu de Go</title>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div class="wrapper">

            <?php
//            include('model/_autoloader.php');
//            $goban = new Goban(9);
//            $goban->placer_pierre(0, 8, null);
//            $goban->placer_pierre(0, 7, null);
            ?>
            <!--<pre>-->
            <?php
            //print_r($goban);
            ?>
            <!--</pre>-->

            <table>
                <?php
                include('view/define_board.php')
                ?>
            </table>

        </div>
        <script src="controller/draw_board.js"></script>
    </body>
</html>
