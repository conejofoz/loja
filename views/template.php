<html>
    <head>
        <title>Nossa loja</title>
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="topo"></div>
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
            </div>
        </div>
        <div class="container">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        <div class="rodape"></div>
    </body>
</html>