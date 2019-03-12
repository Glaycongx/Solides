<?php
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
	echo "New record created successfully";
}else {
      echo "Error: Não foi possível executar a query";
  }


//$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);
$conexao->close();

exit;
?>