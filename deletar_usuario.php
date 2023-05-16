<?php 
include('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = "delete from usuario where id_usuario = $id_usuario";
$result = mysqli_query($con, $sql);
if($result){
    echo "<script>alert('Usuário excluido com sucesso!);";
    echo "location.href='listar_usuario.php';</script>";
}else{
    echo "<script>alert('Erro ao excluir o usuário!');";
    echo "location.href='listar_usuario.php';</script>";
}
