<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('../config.php');
    
    //LISTA USUÁRIO ATRAVÉS DO NOME
    function listarPorNome($nome) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where nome='" . $nome."'");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo"Nome:" . $row['nome'] . "</br>";
                echo"Cartão: " . $row['idCartao'] . "</br>";
                echo"Matrícula: " . $row['matricula'] . "</br>";
            }
        }
        else{
            echo "</br></br>Usuário não encontrado!</br></br>";
        }
        $conn->close();
    }
    
    //LISTA USUÁRIO ATRAVÉS DO CARTÃO
    function listarPorCartao($cartao) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where idCartao='" . $cartao."'");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo"Nome:" . $row['nome'] . "</br>";
                echo"Cartão: " . $row['idCartao'] . "</br>";
                echo"Matrícula: " . $row['matricula'] . "</br>";
            }
        }
        else{
            echo "</br></br>Usuário não encontrado!</br></br>";
        }
        $conn->close();
    }
    
    //LISTA USUÁRIO ATRAVÉS DA MATRÍCULA
    function listarPorMatricula($matricula) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where matricula=" . $matricula);
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo"Nome:" . $row['nome'] . "</br>";
                echo"Cartão: " . $row['idCartao'] . "</br>";
                echo"Matrícula: " . $row['matricula'] . "</br>";
            }
        }
        else{
            echo "</br></br>Usuário não encontrado!</br></br>";
        }
        $conn->close();
    }
    
    //LISTA USUÁRIO ATRAVÉS DO ID
    function listarPorId($id) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where idUser=" . $id);
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                //echo"Nome:" . $row['nome'] . "</br>";
                //echo"Cartão: " . $row['idCartao'] . "</br>";
                //echo"Matrícula: " . $row['matricula'] . "</br>";
                echo
                "<th>" . $row['nome'] . "</th>
                  <th>" . $row['idCartao'] . "</th>
                  <th>" . $row['matricula'] . "</th>";
            }
        }
        else{
            echo "</br></br>Usuário não encontrado!</br></br>";
        }
        $conn->close();
    }

?>
