<?php
    require("../sessioncontroller.php");
    getSessao();
    require("../dbcontroller.php");
    if($_POST){
        if(!$_POST['id'] || !$_POST['cor'] || !$_POST['desenho']){
            die("Informação faltando.");
        }
        else{
            editCamisa($_POST['id'], $_POST['cor'], $_POST['desenho']);
        }
    }
    else{
        die("Sem informações!");
    }
    header('Location: ../../dashboard/');
?>