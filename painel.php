<?php
//session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">	
</head>
<body>
	<section class="hero is-success is-fullheight is-fullwidth">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">


<div class="box">
                        <form>

                            <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

                                    <?php
                               if(isset($_SESSION['status_cadastro'])):
                            ?>
                            <div class="notification is-success">
                              <p>Ponto Registrado!</p>
                            </div>
                            <?php
                        endif;
                        unset($_SESSION['status_cadastro']);
                            ?>  
                            
                            <div style="display: flex; margin-top: 20px">
                                <a href="entrada_empresa.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Entrada 1</a>
                                <div style="margin-right: 5px"></div>
                                <a href="saida_almoco.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Saida 1</a>
                                <div div style="margin-right: 5px"></div>
                                <a href="entrada_almoco.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Entrada 2</a>
                                <div div style="margin-right: 5px"></div>
                                <a href="saida_empresa.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Saída 2</a>
                            </div>
                        </form>

                        <div style="display: flex; margin-top: 20px">
                            <a href="logout.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500; background-color: red">Sair</a>
                        <div style="margin-right: 5px"></div>
                            <a href="relatorio.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Histórico</a>
                        </div>
                    </div>

</div>
</div>
</div>
</section>

</body>
</html>