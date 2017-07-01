<html>
    <head>
        <title>Infinity Group S.A.</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="topoAnterior">

            <div class="carrinho">
                <a href="<?php echo BASE_URL; ?>/carrinho">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <?php echo (isset($_SESSION['carrinho'])) ? count($_SESSION['carrinho']) : '0'; ?> Ítens
                </a>
            </div>

            <div class="social-icons-topo">
                <a href="https://www.facebook.com/infinitygroupparaguay/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
        
        <div class="topo">
            <div class="logotipo">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo2.jpg" />
            </div>
            <div class="buscaPrincipal">
                <input type="text" placeholder="Digite aqui sua busca."/>
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        <div style="clear: both"></div><!--desce o titulo das paginas-->

        <button class="btn-menu"> 
            <i class="fa fa-bars fa-lg"></i> 
        </button>


        <div class="menu">


            <a class="btn-close">
                <i class="fa fa-times"></i>
            </a>


            <div class="menuint">
                <ul>
                    <a href="<?php echo BASE_URL; ?>/painel"><li>Home</li></a>
                    <a href="<?php echo BASE_URL; ?>/painel/categorias"><li>Categorias</li></a>
                    <a href="<?php echo BASE_URL; ?>/painel/produtos"><li>Produtos</li></a>
                    <a href="<?php echo BASE_URL; ?>/painel/vendas"><li>Vendas</li></a>
                    <a href="<?php echo BASE_URL; ?>/painel/usuarios"><li>Usuários</li></a>
                </ul>



            </div>
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        <div class="rodape">
            <div class="social-icons">
                <a href="https://www.facebook.com/infinitygroupparaguay/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
            <p class="copyright">
                email: infinitygroup.net@gmail.com
                Tel: 595-061-512216/500628
            </p>
            <p class="copyright">
                Av. San Blás, 136 - Ciudad del Este - Paraguay
            </p>
        </div>
        <div style="clear:both"></div>

        <script src="https://code.jquery.com/jquery-3.1.0.min.js" ></script>
        <script>
            $(".btn-menu").click(function () {
                $(".menu").show();
            });

            $(".btn-close").click(function () {
                $(".menu").hide();
            });
        </script>
    </body>
</html>