<?php

require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
require_once 'C:\xampp\htdocs\keyLabepi\Model\User\viewUser.php';
    //LISTA TODOS OS LOGS
    function listarLogs() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from log");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo 
                "<tr>
                  <th>".$row['id']."</th>";
                  if($row['idUser']){
                    listarPorId($row['idUser']);
                  }
                  else{
                      echo
                        "<th>" ."inexistente". "</th>
                        <th>" . $row['cartao'] . "</th>
                        <th>" ."inexistente". "</th>";
                  }
                  echo
                  "<th>" . $row['acesso'] . "</th>
                  <th>" . $row['data'] . "</th>
                </tr>";
            }
        }
        else{
            echo "<h3>Logs não encontrados no banco de dados!</h3>";
        }
        $conn->close();
    }
    
    //LISTA TODOS OS LOGS PERMITIDOS
    function listarLogsPerm() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from log where acesso='permitido'");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo"id:" . $row['id'] . "</br>";
                //echo"idUser: " . $row['idUser'] . "</br>";
                if($row['idUser']){
                    listarPorId($row['idUser']);
                }
                echo"acesso: " . $row['acesso'] . "</br>";
                echo"data: " . $row['data'] . "</br></br>";
            }
        }
        else{
            echo "</br></br>Logs não encontrado!</br></br>";
        }
        $conn->close();
    }
    
    //LISTA TODOS OS LOGS NEGADOS
    function listarLogsNeg() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from log where acesso='negado'");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo"id:" . $row['id'] . "</br>";
                //echo"idUser: " . $row['idUser'] . "</br>";
                if($row['idUser']){
                    listarPorId($row['idUser']);
                }
                echo"acesso: " . $row['acesso'] . "</br>";
                echo"data: " . $row['data'] . "</br></br>";
            }
        }
        else{
            echo "</br></br>Logs não encontrado!</br></br>";
        }
        $conn->close();
    }
    
    //LISTA TODOS OS LOGS POR DATA
    /*function listarLogsData($data) {
        $conn = F_conect();
        echo date('Y-m-d', strtotime($data));
        $result = mysqli_query($conn, "Select * from log where data like $data".'%');
        echo "</br>$result";
        if (isset(mysqli_num_rows($result))) {
            while ($row = $result->fetch_assoc()) {
                echo"id:" . $row['id'] . "</br>";
                //echo"idUser: " . $row['idUser'] . "</br>";
                if($row['idUser']){
                    listarPorId($row['idUser']);
                }
                echo"acesso: " . $row['acesso'] . "</br>";
                echo"data: " . $row['data'] . "</br></br>";
            }
        }
        else{
            echo "</br></br>Logs não encontrado!</br></br>";
        }
        $conn->close();
     
    }
    */
 ?>

