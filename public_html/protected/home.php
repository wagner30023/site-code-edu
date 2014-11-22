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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include'../protected/menu.php' ?>
        <?php include'../library/lib/rota.php'; ?>


        <header class="jumbotron subhead">
            <div class="container">
                <h1> Code Education PHP </h1>
            </div>
        </header>	



        <header class="page-header">
            <h1>Slide show - <small> Carrosel de imagens </small></h1>
        </header>


        <section class="carousel slide" id="carrossel">
            <div class="carousel-inner">

                <section class="active item">
                    <img src="../library/img/slide/img1.jpg" alt="">
                    <div class="carousel-caption">
                        <h4> Primeiro rótulo do slide </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Error, quam.</p>
                    </div>
                </section>

                <section class="item">
                    <img src="../library/img/slide/img2.jpg" alt="">
                    <div class="carousel-caption">
                        <h4> segundo rótulo do slide </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis harum neque dolorem odit voluptates hic explicabo incidunt possimus aliquid obcaecati necessitatibus velit, laborum, cum debitis porro ex molestias! Similique, unde!</p>
                    </div>
                </section>

                <section class="item">
                    <img src="../library/img/slide/img3.jpg" alt="">
                    <div class="carousel-caption">
                        <h4> terceiro rótulo do slide </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quae necessitatibus magni facilis fugit quisquam exercitationem corporis facere voluptate dicta excepturi quas, atque sint numquam assumenda, ex pariatur. Accusamus, quaerat.</p>
                    </div>	
                </section>

                <section class="item">
                    <img src="../library/img/slide/img4.jpg" alt="">
                    <div class="carousel-caption">
                        <h4>quarto rótulo do slide </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt corrupti, laudantium exercitationem aliquam optio quisquam, quo repellendus aliquid maiores quasi nam velit voluptatibus harum dignissimos iure cupiditate neque. Tempore, aspernatur!</p>
                    </div>
                </section>
            </div>
            <a href="#carrossel" class="carousel-control left " data-slide="prev"> &lsaquo;  </a>
            <a href="#carrossel" class="carousel-control right" data-slide="prev"> &rsaquo; </a>
        </section>	
        <?php include'../protected/footer.php' ?>
    </body>
</html>