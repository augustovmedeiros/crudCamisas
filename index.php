<!DOCTYPE html>
<?php
    require("controllers/sessioncontroller.php");
    if(getSessaoLogin()){
         header('Location: /dashboard');
    }
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Camisas de Jeofton</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="tela-login">

          <div class="layout">
            <header>
              <h1>Camisas de Jeofton</h1>
            </header>
            <main>
    
                <div id="conteudo">
                    <form id="addForm" action="../controllers/login/logar.php" method="post">
                    <div id="login">
                        <input name="user" id="user" type="text" placeholder="Digite seu login">
                        <input name="senha" id="senha" type="password" placeholder="Digite sua senha">
                    </div>
                    </form>

                    <div id="botoes">
                        <button class="botao" onclick="makeLogin()" id="entrar"><b>Entrar</b></button>
                        <button class="botao" onclick="makeRegistro()" id="registrar"><b>Registrar</b></button>
                    </div>
                </div>
            </main>    
          </div>
</body>
<script>
    var frm = document.getElementById('addForm');
    function makeLogin(){
        frm.action = '../controllers/login/logar.php';
        frm.submit();
    }
    function makeRegistro(){
        frm.action = '../controllers/login/registrar.php';
        frm.submit();
    }
</script>
</html>