<!DOCTYPE html>
<html lang="en">
<?php
    require("../controllers/dbcontroller.php");
    require("../controllers/sessioncontroller.php");
    $camisas = getCamisas();
    getSessao();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Camisas de Jeofton</title>
</head>
<body>

    <div class="container">
        <h1>Camisas de Jeofton</h1>
        <div class="links">
            <a href="add.php">Adicionar Camisa</a>
            <a href="../controllers/login/sair.php">Sair</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cor</th>
                    <th>Desenho</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="tableBody">
            <?php     
            for($i=0; $i<count($camisas); $i++){
                echo '<tr><td>' . $camisas[$i]["id"] . '</td>
                <td>' . $camisas[$i]["cor"] . '</td>
                <td>' . $camisas[$i]["desenho"] . '</td>
                <td>
                    <button class="edit" onclick="editarCamisa(' . $camisas[$i]["id"] . ')">Editar</button>
                    <button class="delete" onclick="excluirCamisa(' . $camisas[$i]["id"] . ')">Excluir</button>
                </td></tr>';
            }
            ?>   
            </tbody>
        </table>
    </div>
</body>
<script>
    function excluirCamisa(id){
        const resposta = confirm("Tem certeza que quer deletar essa camisa de Jeofton?");
        if(resposta){
            window.location.href = "../controllers/camisas/delete.php?id=" + id;
        }
    }
    function editarCamisa(id){
        window.location.href = "./edit.php?id=" + id;
    }
</script>
</html>
