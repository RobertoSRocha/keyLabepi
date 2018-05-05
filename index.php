<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>keyLabepi</title>
    </head>
    <body>
        <?php
            include("Model/User/interfaceUser.php");
            include("Model/Log/interfaceLog.php");
            
            $idCart = null;
            if(isset($_GET["a"])){
                $idCart = $_GET["a"];
                echo "Cartão lido: $idCart</br>";
                $aux = verificaCart($idCart);
                if($aux){
                    //EXIBE LED VERDE
                    echo "</br>Usuário válido</br></br>";
                    guardarLog("permitido", $aux);
                    
                    //return 1;
                }
                else{
                    //EXIBE LED VERMELHO
                    echo "</br>Usuário inválido</br>";
                    guardarLog("negado", $aux);
                    //return 0;
                }
            }
            else{
                //EXIBE LED AZUL
                echo "Dados insuficientes!</br>";
                //return 0;
            }

            /*
            //TESTES
            cadastrarPessoa("Tafareu", "AIAI554477", 2014000000);
            excluirUsu("AIAI554477");
            listarPorNome("ronaldinho");
            listarPorCartao("ABCD010203");
            listarPorMatricula(20140602)
            excluirLog(23);
            excluirLogUser(2);
            listarLogs();
            listarLogsNeg();
            listarLogsPerm();
            listarLogsData('2018-05-05');
             * */
        ?>
    </body>
</html>