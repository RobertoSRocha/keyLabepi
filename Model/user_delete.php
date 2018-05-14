<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('conectionBD.php');
  
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

    <script>
        require_once '../Model/user_view.php';
        $id = htmlspecialchars($_GET['id']);
        function confirmar() {
            // só permitirá o envio se o usuário responder OK
            alert("Deseja realmente excluir?");
            location.replace("../Model/user_delete.php");	
            //else
                //return false;
        }
        window.onload = function(){
            confirmar();
        }
    </script>
