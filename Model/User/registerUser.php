<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('../config.php');
    
    //CADASTRAR USUÁRIOS DO SISTEMA
    function cadastrarPessoa($nome, $cartao, $matricula){
        if(verificaID($cartao)){
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

