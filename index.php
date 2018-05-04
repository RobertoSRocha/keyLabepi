<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include("Model/interfaceUser.php");
            $idCart = null;
            if(isset($_GET["a"])){
                $idCart = $_GET["a"];
                echo "Cartão lido: $idCart</br>";
                if(verificaID($idCart)){
                    //EXIBE LED VERDE
                    echo "</br>Usuário válido</br></br>";
                    //return 1;
                }
                else{
                    //EXIBE LED VERMELHO
                    echo "</br>Usuário inválido</br>";
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
             * */
        ?>
    </body>
</html>