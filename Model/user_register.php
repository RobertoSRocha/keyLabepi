<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('../config.php');
    require_once 'user_verifica.php';
    

    cadastrarPessoa(htmlspecialchars($_POST['nome']), 
            htmlspecialchars($_POST['cartao']), 
            htmlspecialchars($_POST['matricula']));
    
    //CADASTRAR USUÁRIOS DO SISTEMA
    function cadastrarPessoa($nome, $cartao, $matricula){
        if(verificaCart($cartao)){
            echo "Cartao já cadastrado!</br>";
        }
        else{
            $conn = F_conect();
            $sql = "INSERT INTO users(nome, idCartao, matricula)
                VALUES('" . $nome . "','" . $cartao . "',$matricula)";
            if ($conn->query($sql) == TRUE) {
                //Alert("Oba!", "Usuário cadastrado com sucesso", "success");
                echo("Oba!, Usuário cadastrado com sucesso</br>");
                //echo "<a href='../index.php'> Voltar a tela de login</a>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
        
    }
?>

