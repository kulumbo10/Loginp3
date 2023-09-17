<?php
$name = $_POST['usuario'];
$senha = $_POST['senha'];

if($name == "gabriel" and $senha == 123):
    header("Location:bootstrap.php");
    return;
else:
    header("Location:Form.php?mensagem=Erro ao fazer login");
    return;
endif;



?>