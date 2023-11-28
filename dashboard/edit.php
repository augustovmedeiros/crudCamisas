<!DOCTYPE html>
<html lang="en">
<?php
    require("../controllers/sessioncontroller.php");
    getSessao();
    require("../controllers/dbcontroller.php");
    if($_GET){
        if(!$_GET['id']){
            header('Location: .');
        }else{
            $camisa = getCamisa($_GET['id']);
            if($camisa == null){
                header('Location: .');
            }
        }
    }else{
        header('Location: .');
    }
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar Camisa</title>
</head>
<body>
    <div class="container">
        <h1>Editar Camisa</h1>
        <div class="links">
            <a href=".">Voltar</a>
        </div>
        <br>
        <?php
        echo ' <form id="editForm" action="../controllers/camisas/edit.php" method="post">
            <input type="hidden" id="id" name="id" value=' . $camisa["id"] . '>

            <label for="cor">Cor:</label>
            <input type="text" id="cor" name="cor" required value="' . $camisa["cor"] . '">

            <label for="desenho">Desenho:</label>
            <input type="text" id="desenho" name="desenho" required value="' . $camisa["desenho"] . '">

            <button type="submit">Salvar Alterações</button>
        </form>';
        ?>
    </div>
</body>
</html>
