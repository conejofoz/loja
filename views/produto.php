<div class="produto_foto">
    <img src="<?php echo BASE_URL;?>/assets/images/prods/<?php echo $produto['imagem'];?>" border="0" width="300" height="300" />
</div>
<div class="produto_info">
    <h2><?php echo $produto['nome'];?></h2>
    <?php echo $produto['descricao'];?>
    <h3><?php echo $produto['preco'];?></h3>
    <a href="<?php echo BASE_URL;?>/carrinho/add/<?php echo $produto['id'];?>">Adicionar ao carrinho</a>
</div>
<div style="clear: both"></div>