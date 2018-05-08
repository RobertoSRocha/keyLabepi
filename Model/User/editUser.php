<?php
    
    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('../config.php');
    
    //EDITAR UM USUÁRIO DO SISTEMA
    function editarUsu($nome, $cartao, $matricula, $id) {
        $conn = F_conect();
        $sql = " UPDATE users SET nome='" . $nome . "', idCartao='" . $cartao . "', matricula=" .$matricula . " WHERE idUser= " . $id;
        if ($conn->query($sql)) {
            echo "</br>Dados atualizados com sucesso";
            //echo "<a href='home.php'> Voltar a tela de login</a>";
        } else {
            echo "</br>Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

