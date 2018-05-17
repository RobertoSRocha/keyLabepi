<?php

    function verificaLog($matricula, $senha){
        $conn = F_conect();
        $sql = ("SELECT * FROM users WHERE matricula=" . $matricula.", senha='" . $senha."'");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idUser = $row['idUser']; 
            $conn->close();
            return $idUser;
            
            //start_s
            
        }
        else{
            header('Location: ../View/mensagensErro.php');
        }
    }
