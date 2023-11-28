<?php 

session_start();

function setarSessao(){
    $_SESSION["sessao"]=True;
    header('Location: ../../dashboard/');
}

function getSessao(){
    if(isset($_SESSION["sessao"])){
        return True;
    }else{
        header('Location: ../../');
        return False;
    }
}

function getSessaoLogin(){
    if(isset($_SESSION["sessao"])){
        return True;
    }else{
        return False;
    }
}

function deleteSessao(){
    unset($_SESSION["sessao"]);
    header('Location: ../../');
}


?>