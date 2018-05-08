<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('../config.php');
    
    //DELETA USUARIO A PARTIR DO CARTAO
    function excluirUsu($cartao) {
        $conn = F_conect();
        $sql = "DELETE FROM users WHERE idCartao='" . $cartao."'";
        if($conn->query($sql)){
            echo "</br></br>Usuário deletado com sucesso!</br></br>";
        }
        else{
            echo "</br></br>Falha ao excluir!</br></br>";
        }
        $conn->close();
    }
?>
