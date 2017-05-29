<div class="containerHome">
<div class="produto_foto">
    <img src="<?php echo BASE_URL;?>/assets/images/prods/<?php echo $produto['imagem'];?>" border="0" width="500" height="500" />
</div>
<div class="produto_info">
    <h2><?php echo utf8_encode($produto['nome']);?></h2>
    <?php echo utf8_encode($produto['descricao']);?>
    <h3>$ <?php echo number_format($produto['preco'], 2, ',','.');?></h3>
    <a href="<?php echo BASE_URL;?>/carrinho/add/<?php echo $produto['id'];?>" class="botaoAddCarrinho">Adicionar ao carrinho</a>
</div>
<div style="clear: both"></div>
</div>