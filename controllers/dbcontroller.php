<?php
function conectar(){
    try{
        $con = new mysqli("localhost", "root", "", "jf_camisas");
        return $con;
    } catch (Exception $e){
        error_log($e->getMessage());
        exit("Erro ao conectar.");
        return null;
    }
    
}

function getCamisas(){
    $con = conectar();
    $res = $con->query("SELECT * FROM camisas");
    $camisas = $res->fetch_all(MYSQLI_ASSOC);
    return $camisas;
}

function getCamisa($id){
    $con = conectar();
    $stmt = $con->prepare("SELECT * FROM camisas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $camisa = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $camisa[0];
}

function addCamisa($cor, $desenho){
    $con = conectar();
    try{
        $stmt = $con->prepare("INSERT INTO camisas (cor, desenho) VALUES (?, ?)");
        $stmt->bind_param("ss", $cor, $desenho);
        $stmt->execute();
        $stmt->close();
        return True;
    }catch (Exception $e){
        error_log($e->getMessage());
        exit("Erro ao adicionar.");
        return False;
    }
}

function editCamisa($id, $cor, $desenho){
    $con = conectar();
    try{
        $stmt = $con->prepare("UPDATE camisas SET cor=?, desenho=? WHERE id = ?");
        $stmt->bind_param("ssi", $cor, $desenho, $id);
        $stmt->execute();
        $stmt->close();
        return True;
    }catch (Exception $e){
        error_log($e->getMessage());
        exit("Erro ao adicionar.");
        return False;
    }
}

function removeCamisa($id){
    $con = conectar();
    try{
        $stmt = $con->prepare("DELETE FROM camisas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        return True;
    }catch (Exception $e){
        error_log($e->getMessage());
        exit("Erro ao remover.");
        return False;
    }  
}

function checkLogin($login, $password){
    $con = conectar();
    try{
        $stmt = $con->prepare('SELECT id, password FROM usuarios WHERE user = ?');
        $stmt->bind_param('s', $login);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        if(isset($user[0]) && password_verify($password, $user[0]['password'])){
            return True;
        }else{
            return False;
        }
        return True;
    }catch (Exception $e){
        error_log($e->getMessage());
        exit("Erro ao remover.");
        return False;
    }  
}

function makeLogin($login, $password){
    $con = conectar();
    try{
        $stmt = $con->prepare("INSERT INTO usuarios (user, password) VALUES (?, ?)");
        $hashSenha = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("ss", $login, $hashSenha);
        $stmt->execute();
        $stmt->close();
        return True;
    }catch (Exception $e){
        error_log($e->getMessage());
        return False;
    }
}

?>