<?php
    if(session_start() == false){
        header('Location: ../View/login.php');
    }

