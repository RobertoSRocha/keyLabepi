<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('conectionBD.php');
    
    
    excluirUsu(htmlspecialchars($_GET['idUser']));
    //DELETA USUARIO A PARTIR DO ID
    function excluirUsu($id) {
        $conn = F_conect();
        $sql = "DELETE FROM users WHERE idUser='" . $id."'";
        if($conn->query($sql)){
            header('Location: ../View/mensagens.php');
        }
        else{
            header('Location: ../View/mensagensErro.php');
        }
        $conn->close();
    }
?>

