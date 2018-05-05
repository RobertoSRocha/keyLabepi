<?php
    require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    //DELETA Log A PARTIR DO ID
    function excluirLog($id) {
        $conn = F_conect();
        $sql = "DELETE FROM log WHERE id='" . $id."'";
        if($conn->query($sql)){
            echo "</br></br>Log deletado com sucesso!</br></br>";
        }
        else{
            echo "</br></br>Falha ao excluir!</br></br>";
        }
        $conn->close();
    }
    
    //DELETA todos os Log de um usuario a partir do seu ID
    function excluirLogUser($idUser) {
        $conn = F_conect();
        $sql = "DELETE FROM log WHERE idUser='" . $idUser."'";
        if($conn->query($sql)){
            echo "</br></br>Log deletado com sucesso!</br></br>";
        }
        else{
            echo "</br></br>Falha ao excluir!</br></br>";
        }
        $conn->close();
    }
?>
