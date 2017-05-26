<div class="banner">
    <?php 
    if($categoria == "Perfumaria"){
        echo "<img src=".BASE_URL."/assets/images/mr-burberry.jpg />";
    } else if($categoria == "Casa"){
        echo "<img src=".BASE_URL."/assets/images/casa.jpg />";
        } else if($categoria == "Decoração"){
        echo "<img src=".BASE_URL."/assets/images/decoracao.jpg />";
    } else {
        echo "<img src=".BASE_URL."/assets/images/decoracao.jpg />";
    }
    
    
    ;?>
</div>
<div style="clear:both"></div><!-- pra tirar uma linha branca que ficava antes do banner -->
<div class="containerHome">
    <h1><?php echo utf8_encode($categoria);?></h1>

<?php foreach ($produtos as $produto): ?>
<a class="linkproduto" href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
    <div class="produto">
        <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" width="176" height="180" border="0"/>
        <?php echo utf8_encode($produto['nome']); ?><br/>
        <?php echo '$ '.number_format($produto['preco'],2,',','.'); ?>
    </div>
    </a>
<?php endforeach; ?>
</div>
<div style="clear:both"></div>

