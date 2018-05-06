<?php
    //VERIFICA SE EXISTE O CARTAO NO BANCO DE DADOS
    require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    function  verificaCart($idUsu) {
        $conn = F_conect();
        //$result = mysqli_query($conn, "SELECT * FROM users where idCartao=" . $idUsu);
        $sql = ("SELECT * FROM users WHERE idCartao='" . $idUsu."'");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo"<tr><td></br>Nome: " . $row['nome'] . "</td>";
            echo"<td></br>Matrícula: " . $row['matricula'] . "</td>";
            $idUser = $row['idUser']; 
            $conn->close();
            return $idUser;
        }
        else{
            echo "ID Inexistente!</br>";
            $conn->close();
            return 0;
        }
        //$conn->close();
    }
?>

