<?php//
session_start();
include("conexao.php");

$nome = $_SESSION['usuario'];

$id_fk = ("SELECT id from users where usuario = '$nome'");


if (!'conexao.php') {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql = "INSERT into ponto_eletronico(id_users, data_registro, tipo_registro, hora) values ((select id from users where usuario = '$nome'),NOW(),'Saida Almoco', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
header('Location: painel.php');

$conexao->close();

exit;
?>