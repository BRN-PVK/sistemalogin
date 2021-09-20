<?php
include('conexao.php');

$sql = 'INSERT INTO tb_login (adm, usuario, senha) VALUES(0, "'. $usuario .'", md5("'. $senha .'"));';

$result = mysqli_query($conexao, $sql);

if($result){
    echo("Usuário cadastrado com sucesso!");
} else {
    echo("Não foi possível cadastrar o usuário.");
}
mysqli_close($conexao);
?>