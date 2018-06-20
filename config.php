<?php

/** caminho absoluto para a pasta do sistema **/
if (!defined('ROOT_PATH')){
    define('ROOT_PATH', dirname(__FILE__));
}

/** caminho no server para o sistema **/
if (!defined('BASEURL')){
    define('BASEURL', '/keyLabepi/');
}

/** caminho do arquivo de banco de dados **/
if (!defined('DBAPI')){
    define('DBAPI', ROOT_PATH . 'Model/conectionBD.php');
}

/** caminho para visualizar as informações dos usuários
if (!defined('DVAPI')){
    define('DVAPI', ABSPATH . 'Model/User/viewUser.php');
}
**/

