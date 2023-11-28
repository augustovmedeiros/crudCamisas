<!DOCTYPE html>
<html lang="en">
<?php
    require("../controllers/sessioncontroller.php");
    getSessao();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adicionar Camisa</title>
</head>
<body>

    <div class="container">
        <h1>Adicionar Camisa</h1>
        <div class="links">
            <a href=".">Voltar</a>
        </div>
        <br>
        <form id="addForm" action="../controllers/camisas/add.php" method="post">
            <label for="cor">Cor:</label>
            <input type="text" id="cor" name="cor" required>

            <label for="desenho">Desenho:</label>
            <input type="text" id="desenho" name="desenho" required>

            <button type="submit">Adicionar</button>
        </form>
    </div>

</body>
</html>
