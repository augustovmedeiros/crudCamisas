<?php
    require("../sessioncontroller.php");
    getSessao();
    require("../dbcontroller.php");
    if($_GET){
        if(!$_GET['id']){
            die("Informação faltando.");
        }
        else{
            removeCamisa($_GET['id']);
        }
    }
    else{
        die("Sem informação!");
    }
    header('Location: ../../dashboard/');
?>