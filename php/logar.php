<?php
include('conexao.php');

$query = "select id_usuario, usuario from tb_login where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../trabalho3bi/painel.php');
    exit();
} else {
    header('Location: ../../trabalho3bi/index.php');
}

?>

