<?php
    require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    
    // Modifica a zona de tempo a ser utilizada.
    date_default_timezone_set('America/Sao_Paulo');
    function guardarLog($status, $user){
        //$date = date('Y-m-d');
        //echo "$date";
        
        $conn = F_conect();
        $sql = "INSERT INTO log(data, idUser, acesso)
                VALUES(NOW() ,$user, '" . $status . "')";
        if ($conn->query($sql) == TRUE) {
            echo("Oba!, Log cadastrado com sucesso</br>");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

?>
