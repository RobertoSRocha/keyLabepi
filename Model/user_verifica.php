<?php
    require_once ('conectionBD.php');
    
    //VERIFICA SE EXISTE O CARTAO NO BANCO DE DADOS
    function  verificaCart($idUsu) {
        $conn = F_conect();
        $sql = ("SELECT * FROM users WHERE idCartao='" . $idUsu."'");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
			if (DEBUG)
			{
				echo"<tr><td></br>Nome: " . $row['nome'] . "</td>";
				echo"<td></br>Matrícula: " . $row['matricula'] . "</td>";
			}
            $idUser = $row['idUser']; 
            $conn->close();
            return $idUser;
        }
		else{
			if (DEBUG)
            	echo "ID Inexistente!</br>";
            $conn->close();
            return 0;
        }
        //$conn->close();
        
    }
    
    
?>

