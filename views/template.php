<html>
    <head>
        <title>Infinity Group S.A.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/font-awesome/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="topo">
            <div class="logotipo">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo2.jpg" class="logotipo" />
            </div>
            <div class="buscaPrincipal">
                <input type="text" placeholder="Digite aqui sua busca.">
            </div>
            <div class="botaoBusca">
                <img src="<?php echo BASE_URL; ?>/assets/images/icones/lupa.png" width="20" height="20"/>
            </div>
        </div>
        <div class="menu">
            <div class="menuint">
                <ul>
                    <a href="<?php echo BASE_URL; ?>"><li>Home</li></a>
                    <a href="<?php echo BASE_URL; ?>/empresa"><li>Empresa</li></a>

                    <?php foreach ($menu as $menuitem): ?>
                        <a href="<?php echo BASE_URL; ?>/categoria/ver/<?php echo $menuitem['id']; ?>"><li><?php echo utf8_encode($menuitem['titulo']); ?></li></a>
                    <?php endforeach; ?>

                    <a href="<?php echo BASE_URL; ?>/contato"><li>Contato</li></a>
                </ul>
                <div class="carrinho">
                    <a href="<?php echo BASE_URL; ?>/carrinho">
                        Carrinho:<br/>
                        <?php echo (isset($_SESSION['carrinho'])) ? count($_SESSION['carrinho']) : '0'; ?> Ítens
                    </a>
                </div>
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
    </body>
</html>