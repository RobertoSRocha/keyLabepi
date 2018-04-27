<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("verificaBD.php");
        $idCart = $_GET["a"];
        echo "$idCart";
        /* @var $verificaBD type */
        $verificaBD = verificaBD($idCart);
        /*if(verificaBD($n1)){
            //return 1;
        }
        else{
            //return 0;
        }  
        */
        
        ?>
    </body>
</html>