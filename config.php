<?php

/** caminho absoluto para a pasta do sistema **/
if (!defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** caminho no server para o sistema **/
if (!defined('BASEURL')){
    define('BASEURL', '/keyLabepi/');
}

/** caminho do arquivo de banco de dados **/
if (!defined('DBAPI')){
    define('DBAPI', ABSPATH . 'model/conectionBD.php');
}


