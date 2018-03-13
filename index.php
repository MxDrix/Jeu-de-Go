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

            <table>
                <?php
                include('view/define_board.php')
                ?>
            </table>

        </div>
        <?php include('model/_autoloader.php'); ?>


        <?php
    //    $goban = new Goban(9);
    //    $joueur1 = new Joueur(1,"");
    //    $joueur2 = new Joueur(2);
    //    $goban->placer_pierre(0, 8, $joueur1);
    //    $goban->placer_pierre(0, 7, $joueur1);
    //    $goban->placer_pierre(1, 8, $joueur2);
    //    $goban->placer_pierre(1, 7, $joueur2);
    //    $goban->placer_pierre(0, 6, $joueur2);
    //    echo '<pre>';
    // //    print_r($goban);
    //    echo '</pre>';
    //     ?>
        
        <script src="controller/draw_board.js"></script>
    </body>
</html>
