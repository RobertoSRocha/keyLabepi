<?php
    require_once("user_verifica.php");
    require_once("log_register.php");
    $idCart = null;
    //VERIFICA A EXISTÊNCIA DA VARIÁVEL E SE HÁ CONTEÚDO NELA
    if(isset($_GET["a"]) && !empty($_GET["a"])){
        $idCart = $_GET["a"];
        echo "Cartão lido: $idCart</br>";
        $aux = verificaCart($idCart);
        if($aux){
            //EXIBE LED VERDE
            echo "</br>Usuário válido</br></br>";
            guardarLog("permitido", $aux, $idCart);
            //return $idCart.'|'.1;
        }
        else{
            //EXIBE LED VERMELHO
            echo "</br>Usuário inválido</br>";
            guardarLog("negado", $aux, $idCart);
            //return $idCart.'|'.0;
        }
    }
    else{
        //EXIBE LED AZUL
        echo "Dados insuficientes!</br>";
        //return $idCart.'|'.0;
    }
   