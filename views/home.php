<div class="banner">
    <img src="<?php echo BASE_URL; ?>/assets/images/azzaro-wanted.jpg" />
</div>
















<div class="containerHome">
    <?php foreach ($produtos as $produto): ?>
        <a class="linkproduto" href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
            <div class="produto">
                <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" border="0"/>
                <h3><?php echo utf8_encode($produto['nome']); ?></h3><br/>
                <?php echo '$ '.number_format($produto['preco'],2,',','.'); ?>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<div style="clear:both"></div>





