<?php
    require_once ('conectionBD.php');
    
    editarSenha(htmlspecialchars($_POST['idUser']),
            htmlspecialchars($_POST['senha']));
    
    //EDITAR UM USUÁRIO DO SISTEMA
    function editarSenha($idUser, $senha) {
        $senhaCodificada = base64_encode($senha);
        $conn = F_conect();
        $sql = ("UPDATE users SET senha='" .$senhaCodificada . "' WHERE idUser=".$idUser);
        if ($conn->query($sql)) {
            header('Location: ../View/mensagens.php');
            //echo "<a href='home.php'> Voltar a tela de login</a>";
        } else {
            header('Location: ../View/mensagensErro.php');
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

