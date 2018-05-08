<?php
    require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    //require_once ('../config.php');
    
    // Modifica a zona de tempo a ser utilizada.
    date_default_timezone_set('America/Sao_Paulo');
    function guardarLog($status, $user, $cartao){ 
        $conn = F_conect();
        $sql = "INSERT INTO log(data, idUser, acesso, cartao)
                VALUES(NOW() ,$user, '" . $status . "', '" . $cartao . "')";
        if ($conn->query($sql)) {
            echo("Oba, Log cadastrado com sucesso</br>");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>
