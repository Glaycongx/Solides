<?php
session_start();
include("conexao.php");


if (!'conexao.php') {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql = "UPDATE users  
    SET entrada_empresa = NOW()";


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


 

