<?php include './header.php'; ?>
<?php include '../public/index.php'; ?>

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
            <img src="../public/img/slide/img1.jpg" alt="">
            <div class="carousel-caption">
                <h4> Primeiro rótulo do slide </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Error, quam.</p>
            </div>
        </section>

        <section class="item">
            <img src="../public/img/slide/img2.jpg" alt="">
            <div class="carousel-caption">
                <h4> segundo rótulo do slide </h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis harum neque dolorem odit voluptates hic explicabo incidunt possimus aliquid obcaecati necessitatibus velit, laborum, cum debitis porro ex molestias! Similique, unde!</p>
            </div>
        </section>

        <section class="item">
            <img src="../public/img/slide/img3.jpg" alt="">
            <div class="carousel-caption">
                <h4> terceiro rótulo do slide </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quae necessitatibus magni facilis fugit quisquam exercitationem corporis facere voluptate dicta excepturi quas, atque sint numquam assumenda, ex pariatur. Accusamus, quaerat.</p>
            </div>	
        </section>

        <section class="item">
            <img src="../public/img/slide/img4.jpg" alt="">
            <div class="carousel-caption">
                <h4>quarto rótulo do slide </h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt corrupti, laudantium exercitationem aliquam optio quisquam, quo repellendus aliquid maiores quasi nam velit voluptatibus harum dignissimos iure cupiditate neque. Tempore, aspernatur!</p>
            </div>
        </section>
    </div>
    <a href="#carrossel" class="carousel-control left " data-slide="prev"> &lsaquo;  </a>
    <a href="#carrossel" class="carousel-control right" data-slide="prev"> &rsaquo; </a>
</section>	
<?php include './footer.php'; ?>
</body>
</html>
