<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title> Componentes </title>
        <link rel="stylesheet" type="text/css" href="../library/css/bootstrap.css" />
        <link rel="stylesheet" href="../library/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="../library/css/style.css" />
        <script type="text/javascript" src="../library/js/bootstrap.js"></script>
        <script type="text/javascript" src="../library/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include'../protected/menu.php' ?>
        <?php include'../library/lib/rota.php'; ?>


        <!-- FOR EACH DATA ROW -->

        <!-- FOR EACH DATA COLUMN -->

        <!-- END -->
        <table class="table table-striped table-hover"> <br>
            <caption> Dados enviados  </caption>
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Mensagem </th>
                    <th> Assunto </th>	
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <?php echo $nome = $_POST['nome']; ?></td>
                    <td> <?php echo $nome = $_POST['email']; ?></td>
                    <td> <?php echo $nome = $_POST['mensagem']; ?></td>
                    <td> <?php echo $nome = $_POST['assunto']; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button id="voltar" name="voltar"> <a href="http://localhost/curso/home.php"> Voltar </a> </button>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       <?php include'../protected/footer.php' ?>
    </body>
</html>