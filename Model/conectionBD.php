<?php
    //CONECÇÃO COM O BD
    function F_conect(){
        //nome do host
        $servidor = "localhost";
        //nome da database
        $nomebanco = "keyLabepi" ;
        //nome do usuário
        $usuario = "root";
        //senha
        $senha = "";
        // Criando conexão com o Banco de Dados
        $conn = new mysqli($servidor, $usuario, $senha,$nomebanco);
        // Checando conexão erro
        if ($conn->connect_error)
            {
            //Caso verdadeiro, Mostra o Erro.
            die("Connection failed: " . $conn->connect_error);
        }else{
            // Caso falso, retorna a conexão
            //echo "\nCONECTADO AO BD!";
            return $conn;
        }
    }
?>