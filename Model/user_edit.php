<?php
    
    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('conectionBD.php');
    
    editarUsu(htmlspecialchars($_POST['nome']), 
        htmlspecialchars($_POST['cartao']), 
        htmlspecialchars($_POST['matricula']),
        htmlspecialchars($_POST['permissao']),
        htmlspecialchars($_POST['id']));
    
    //EDITAR UM USUÁRIO DO SISTEMA
    function editarUsu($nome, $cartao, $matricula, $permissao, $id) {
        $conn = F_conect();
        $sql = " UPDATE users SET nome='" . $nome . "', idCartao='" . $cartao . "', matricula=" .$matricula . "', permissao=" .$permissao . " WHERE idUser= " . $id;
        if ($conn->query($sql)) {
            header('Location: ../View/mensagens.php');
            //echo "<a href='home.php'> Voltar a tela de login</a>";
        } else {
            header('Location: ../View/mensagensErro.php');
        }
        $conn->close();
    }
?>

