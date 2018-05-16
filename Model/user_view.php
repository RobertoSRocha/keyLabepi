<?php

    //require_once 'C:\xampp\htdocs\keyLabepi\Model\conectionBD.php';
    require_once ('conectionBD.php');
    
    //LISTA TODOS USUÁRIOS 
    function listarUsers() {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users");
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr>
                <td>" . $row['nome'] . "</td>
                  <td>" . $row['idCartao'] . "</td>
                  <td>" . $row['matricula'] . "</td>
                  
                  
                    <td class='actions'>
			<a class='btn btn-success btn-xs' href='../View/gerenciarUserList.php'>Visualizar</a>
			<a class='btn btn-warning btn-xs' href='../View/gerenciarUserEdit.php'>Editar</a>
			<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
                    </td>
                  
                  
                </tr>";
  
            }
        }
        else{
            echo "</br></br>Usuário não encontrado!</br></br>";
        }
        $conn->close();
    }
    
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
    function listarEditPorId($id) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where idUser=" . $id);
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
            echo
            "<form action='../Model/user_edit.php' method='POST'>
                <div class='form-group'>
                    <label for='id'></label>
                    <input type='hidden' class='form-control' id='idUser' 
                         value='" . $row['idUser'] . "' name='idUser'>
                </div>
                <div class='form-group'>
                    <label for='nome'>Nome:</label>
                    <input type='text' class='form-control' id='nome' 
                         value='" . $row['nome'] . "' name='nome'>
                </div>
                <div class='form-group'>
                    <label for='cartao'>Cartão:</label>
                    <input type='text' class='form-control' id='cartao' 
                        value='" . $row['idCartao'] . "' name='cartao'>
                </div>
                <div class='form-group'>
                    <label for='matricula'>Matrícula:</label>
                    <input type='number' class='form-control' id='matricula' 
                        value='" . $row['matricula'] . "' name='matricula'>
                </div>
                <div class='form-group'>
                    <label for='permissao'>Permissao:</label></br>";
                    if($row['permissao']){
                        echo
                        "<select class='simple basic' name='permissao' id='permissao'>
                            <option value=1 selected> Administrador</option>
                            <option value=0>Usuário Comum</option>
                        </select>";
                    }else{
                        echo
                        "<select class='simple basic' name='permissao' id='permissao'>
                            <option value=1>Administrador</option>
                            <option value=0 selected>Usuário Comum</option>
                        </select>";
                    }
                echo    
                "</div>
                <button type='submit' class='btn btn-warning btn-xs'>Atualizar</button>
                <a class='btn btn-danger btn-xs'  href='../View/gerenciarUser.php'>Cancelar</a>
            </form>";
            }
        }
        else{
            header('Location: ../View/mensagensErro.php');
        }
        $conn->close();
    }

       //LISTA USUÁRIO ATRAVÉS DO ID
    function listarViewPorId($id) {
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from users where idUser=" . $id);
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
            echo
            "<form action='../Model/user_edit.php' method='POST'>
                <div class='form-group' style='visibility:hidden;>
                    <label for='nome'>ID do Usuário:</label>
                    <input type='text' class='form-control' id='idUser' 
                         placeholder='" . $row['idUser'] . "' name='idUser'>
                </div>
                <div class='form-group'>
                    <label for='nome'>Nome:</label>
                    <input type='text' class='form-control' id='nome' 
                         placeholder='" . $row['nome'] . "' name='nome'>
                </div>
                <div class='form-group'>
                    <label for='cartao'>Cartão:</label>
                    <input type='text' class='form-control' id='cartao' 
                        placeholder='" . $row['idCartao'] . "' name='cartao'>
                </div>
                <div class='form-group'>
                    <label for='matricula'>Matrícula:</label>
                    <input type='number' class='form-control' id='matricula' 
                        placeholder='" . $row['matricula'] . "' name='matricula'>
                </div>
                <div class='form-group'>
                    <label for='permissao'>Permissao:</label></br>
                    <select class='simple basic' name='permissao' id='permissao'>
                        <option value=''></option>
                        <option value=1>Administrador</option>
                        <option value=0>Usuário Comum</option>
                    </select>
                </div>
                <button type='submit' class='btn btn-warning btn-xs'>Atualizar</button>
                <button type='submit' class='btn btn-danger btn-xs'>Cancelar</button>
            </form>";
            }
        }
        else{
            header('Location: ../View/mensagensErro.php');
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

<!--
    <form action="../Model/user_register.php" method="POST">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" id="nome" 
                         placeholder="Nome do usuário" name="nome" required="">
                </div>
                <div class="form-group">
                  <label for="cartao">Cartão:</label>
                  <input type="text" class="form-control" id="cartao" 
                         placeholder="Cartão do usuário" name="cartao" required="">
                </div>
                <div class="form-group">
                  <label for="matricula">Matrícula:</label>
                  <input type="number" class="form-control" id="matricula" 
                         placeholder="Matrícula do usuário" name="matricula" required="">
                </div>
                <div class="form-group">
                  <label for="permissao">Permissao:</label></br>
                  <select class="simple basic" name="permissao" id="permissao" required="">
                    <option value="" ></option>
                    <option value=1>Administrador</option>
                    <option value=0>Usuário Comum</option>

                  </select>
                </div>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
-->

