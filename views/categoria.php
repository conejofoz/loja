<h1><?php echo $categoria;?></h1>

<?php foreach ($produtos as $produto): ?>
<a class="linkproduto" href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>">
    <div class="produto">
        <img src="<?php echo BASE_URL; ?>/assets/images/prods/<?php echo $produto['imagem']; ?>" width="176" height="180" border="0"/>
        <?php echo $produto['nome']; ?><br/>
        <?php echo $produto['preco']; ?>
    </div>
    </a>
<?php endforeach; ?>
<div style="clear:both"></div>

