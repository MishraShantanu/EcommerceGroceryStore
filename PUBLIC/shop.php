<?php require_once("..\\resources\\config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->

    <div class="container">


        <!-- Jumbotron Header -->
        <header >
            <h1>SHOP</h1>
            
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
            
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            
            <?php get_shop_pro() ?>

        </div>
        <!-- /.row -->

        <hr>
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
</body>

</html>
