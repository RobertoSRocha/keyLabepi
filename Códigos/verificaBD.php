<?php
//CONECTA BOM O BD
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
            echo "\nCONECTADO AO BD!";
            return $conn;
        }
    }
    
    //Verificar no bando de dados a existência do ID do cartão
    function verificaBD($idUsu) {
        echo $idUsu;
        $conn = F_conect();
        //$result = mysqli_query($conn, "SELECT * FROM users where idCartao=" . $idUsu);
        $sql = ("SELECT * FROM users WHERE idCartao='" . $idUsu."'");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo"<tr><td>" . $row['nome'] . "</td>";
                echo"<td>" . $row['matricula'] . "</td>";
                //echo"<td>" . $row['email'] . "</td>";
                //echo"<td><a href=INQ_editar.php?id=" . $row['id'] . "><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                            //<a onclick='return confirmar();' href=INQ_excluir.php?id=" . $row['id'] . "><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
                "</td></tr>";
            }
        }
        $conn->close();
    }
?>

<!--
//CONEXÃO
 function F_conect(){
        $servidor = "localhost";    
        $nomebanco = "sga" ;
        $usuario = "root";
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
            return $conn;
        }
    }  
	
//CADASTRO	
function cadastrar($nome, $email, $senha) {
    $conn = F_conect();
    $sql = "INSERT INTO usuario(nome, email, senha)
            VALUES('" . $nome . "','" . $email . "','" . $senha . "' )";
    if ($conn->query($sql) == TRUE) {
        Alert("Oba!", "Usuário cadastrado com sucesso", "success");
        echo "<a href='../index.php'> Voltar a tela de login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
//EDITAR
function editarUsu($nome, $email, $senha, $id) {
    $conn = F_conect();
    $sql = " UPDATE usuario SET  nome='" . $nome . "', email='" . $email . " ', senha='" .
            $senha . "' WHERE id= " . $id;
    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso";
        echo "<a href='home.php'> Voltar a tela de login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
//LISTAR
function listarIquilino($idUsu) {
    $conn = F_conect();
    $result = mysqli_query($conn, "Select * from iquilino where id_usuario=" . $idUsu);
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            echo"<tr><td>" . $row['nome'] . "</td>";
            echo"<td>" . $row['telefone'] . "</td>";
            echo"<td>" . $row['email'] . "</td>";
            echo"<td><a href=INQ_editar.php?id=" . $row['id'] . "><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                        <a onclick='return confirmar();' href=INQ_excluir.php?id=" . $row['id'] . "><i class='fa fa-trash-o' aria-hidden='true'></i></a></td></tr>";
        }
    }
    $conn->close();
}
//EXCLUIR
function excluirUsu($id) {
    $conn = F_conect();
    $sql = "DELETE FROM usuario WHERE id=" . $id;
    $conn->query($sql);
    $conn->close();
}
//PARA PEGAR o GET da URL
www.sistemaroberto.com/index.php?id=10&nome=Roberto
$id = null;
$nome = null;
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
if(isset($_GET['nome'])){
	$nome = $_GET['nome'];
}
funcaoQualquer($id , $nome){
			...
}
-->