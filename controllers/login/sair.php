<?php
    require("../sessioncontroller.php");
    deleteSessao();
    echo '<script type="text/javascript">'; 
    echo 'window.location.href = "../../";';
    echo 'alert("Sessão Encerrada!");';
    echo '</script>';
    
?>