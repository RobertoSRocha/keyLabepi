<?php

require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
require_once 'C:\xampp\htdocs\keyLabepi\Model\User\viewUser.php';
    //LISTA TODOS OS LOGS
    function listarLogs() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from log");
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
    /*
    //LISTA TODOS OS LOGS POR DATA
    function listarLogsData($data) {
        $conn = F_conect();
        echo date('Y-m-d', strtotime($data));
        $result = mysqli_query($conn, "Select * from log where data=". $data);
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
    */
 ?>

