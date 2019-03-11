<?php
session_start();
include("conexao.php");

$nome = $_SESSION['usuario'];

$exibe = ("SELECT id from users where usuario = '$nome'");

$sql = ("SELECT data_registro from ponto_eletronico where (select id from users where id = id_users)");

$result = mysqli_query($conexao, $exibe);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Relatório</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/relatorio.css">
            
        </style>
    </head>
    <body>
        <div>
            <p id="titulo"><b>Solides Tecnologia</b></p>
            <p id="subtitulo"><b>Relatório de Apontamentos</b></p>
            <p><b>Usuário: </b><?php echo $_SESSION['usuario'];?></p>
        </div>
        <table id="tabela">
            <thead>
                <tr>
                    <th class="celula_head">Data Registro</th>
                    <th class="celula_head">Tipo Registro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<td class="celula_center">
                        <?php echo $result;
                     ?>
                         
                     </td>
                    <td class="celula_center">{{Data}}</td>
                </tr>
            </tbody>
        </table>
        <div id="rodape-final">
            <hr size="1" color=black>
        </div>
    </body>
</html>
