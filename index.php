<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le jeu de Go</title>
    </head>
    <body>
        <?php
        include('./lib/goban.class.php');
        new Goban(9);
        ?>
    </body>
</html>
