<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define("DEBUG", FALSE);

    require_once("user_verifica.php");
    require_once("log_register.php");
    $idCart = null;
    //VERIFICA A EXISTÊNCIA DA VARIÁVEL E SE HÁ CONTEÚDO NELA
    if(isset($_GET["uid"]) && !empty($_GET["uid"])){
        $idCart = $_GET["uid"];
	if (DEBUG){
        	echo "Cartão lido: $idCart</br>";
	}
        $aux = verificaCart($idCart);
        if($aux){
  		//EXIBE LED VERDE	
		if (DEBUG){
			echo "</br>Usuário válido</br></br>";
		}
		else{
			echo "$idCart|1";
		}
 		guardarLog("permitido", $aux, $idCart);
        }
	else{
		//EXIBE LED VERMELHO
		if (DEBUG){
			echo "</br>Usuário inválido</br>";
		}
		else{
            		echo "$idCart|0";
		}
 		guardarLog("negado", $aux, $idCart);
        }
    }
    else{
        //EXIBE LED AZUL
        echo "Dados insuficientes!</br>";
        //return $idCart.'|'.0;
    }
   
