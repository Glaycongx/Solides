<?php
session_start();
include("conexao.php");

$nome = $_SESSION['usuario'];

$exibe = ("SELECT ponto_eletronico.data_registro AS data, ponto_eletronico.tipo_registro AS tipo, ponto_eletronico.hora AS hora FROM ponto_eletronico INNER JOIN users ON users.id = ponto_eletronico.id_users WHERE usuario = '$nome'");

// $sql = ("SELECT data_registro from ponto_eletronico where (select id from users where id = id_users)");

$result = $conexao->query($exibe);

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
            <p style="margin-left: 5px"><b>Usuário: </b><?php echo $_SESSION['usuario'];?></p>
        </div>
        <table id="tabela">
            <thead>
                <tr>
                    <th class="celula_head">Data Registro</th>
                    <th class="celula_head">Hora</th>
                    <th class="celula_head">Tipo Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="celula_center">
                                <?php echo $row['data'];?>
                             </td>
                             <td class="celula_center">
                                <?php echo $row['hora']; ?>
                             </td>
                            <td class="celula_center">
                                <?php echo $row['tipo']; ?>
                            </td>
                        </tr>

                   
                   <?php }
                 ?>
            </tbody>
        </table>
        <a href="painel.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500; margin-top: 20px">Voltar</a>
        <div id="rodape-final" style="margin-top: 20px">
            <hr size="1" color=black>
        </div>
    </body>
</html>
