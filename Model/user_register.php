<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('conectionBD.php');
    require_once 'user_verifica.php';
    
    
    
    
    
    cadastrarUser(htmlspecialchars($_POST['nome']), 
        htmlspecialchars($_POST['cartao']), 
        htmlspecialchars($_POST['matricula']),
        'mudar123',
        htmlspecialchars($_POST['permissao']));
        
    
    //CADASTRAR USUÁRIOS DO SISTEMA
    function cadastrarUser($nome, $cartao, $matricula, $password, $permissao){
        if(verificaCart($cartao)){
            echo "Cartao já cadastrado!</br>";
        }
        else{
            $conn = F_conect();
            $sql = "INSERT INTO users(nome, idCartao, matricula, senha, permissao)
                VALUES('" . $nome . "','" . $cartao . "',$matricula,'" . $password . "', $permissao)";
            if ($conn->query($sql)) {
                echo "<script>alert('Adicionado com sucesso!');</script>";
                
                //echo "<a href='../index.php'> Voltar a tela de login</a>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
        header('Location: ../View/mensagens.php');
    }
?>

