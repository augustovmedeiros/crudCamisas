<?php
    require("../dbcontroller.php");
    require("../sessioncontroller.php");
    if($_POST){
        if(!$_POST['user'] || !$_POST['senha']){
            die("Informação faltando.");
            header('Location: ../../');
        }
        else{
            if(makeLogin($_POST['user'], $_POST['senha'])){
                setarSessao();
            }else{
                echo '<script type="text/javascript">'; 
                echo 'window.location.href = "../../";';
                echo 'alert("Esse usuario já existe!");';
                echo '</script>';
            }
        }
    }
    else{
        die("Sem informações!");
        header('Location: ../../');
    }
?>