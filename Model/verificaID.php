<?php
    require_once 'conectionBD.php';
    function  verificaID($idUsu) {
        //echo $idUsu;
        $conn = F_conect();
        //$result = mysqli_query($conn, "SELECT * FROM users where idCartao=" . $idUsu);
        $sql = ("SELECT * FROM users WHERE idCartao='" . $idUsu."'");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo"<tr><td></br>Nome: " . $row['nome'] . "</td>";
                echo"<td></br>Matrícula: " . $row['matricula'] . "</td>";
                //echo"<td>" . $row['email'] . "</td>";
                //echo"<td><a href=INQ_editar.php?id=" . $row['id'] . "><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                            //<a onclick='return confirmar();' href=INQ_excluir.php?id=" . $row['id'] . "><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
                "</td></tr>";
            }
            $conn->close();
            return 1;
        }
        else{
            echo "ID Inexistente!</br>";
            $conn->close();
            return 0;
        }
        //$conn->close();
    }
?>

