<?php

require_once "conectionBD.php";

function startLogin($matricula, $senha) {

// session_start inicia a sessão
    session_name(md5("seg" . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));

  //  session_cache_expire(10);

    session_start();

    
// conectar com o bando de dados.
    $con = F_conect();

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
    $sql = "SELECT * FROM users WHERE matricula =".$matricula. " AND permissao=1 AND senha='".$senha."'";
    $result = $con->query($sql);

    /*
     * Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida,
     * ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, 
     * se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php 
     * ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login 
     */

    if ($result->num_rows) {
        //Insere os campos do usuario do banco de dados com a variavel $row
        $row = $result->fetch_assoc();
        
        $_SESSION['matricula'] = $matricula;
        $_SESSION['senha'] = $senha; 
        $_SESSION['nome'] = $row['nome'];
        header('location:../View/index.php');
    } else {
        unset($_SESSION['users']);
        unset($_SESSION['senha']);
        //unset($_SESSION['permissao']); 
        unset($_SESSION['nome']); 
        header('location:../View/mensagensLogin.php');
    }
}

function verificarLogin() {

    /*
     * Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida,
     * ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não,
     * se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php
     * ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login
     */
    session_name(md5("seg" . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));

 //   session_cache_expire(100);

    session_start();

    if (isset($_SESSION['matricula']) and isset($_SESSION['senha']) and isset($_SESSION['nome'])) {
        
        return [$_SESSION['matricula'],$_SESSION['nome']];
        
    } else {
        unset($_SESSION['matricula']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']); 
        
        header('location: ../View/login.php');
    }
}

function verificarLoginLogout() {

    /*
     * Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida,
     * ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não,
     * se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php
     * ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login
     */
    session_name(md5("seg" . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));

 //   session_cache_expire(100);

    session_start();

    if (isset($_SESSION['matricula']) and isset($_SESSION['senha']) and isset($_SESSION['nome'])) {
        
        return TRUE;
        
    } else {
        unset($_SESSION['matricula']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']); 
        
        return FALSE;
    }
}

?>
