<?php foreach($produtos as $produto): ?>
<a href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id']; ?>"/>
<div class="produto">
    <img src="" width="180" height="180" border="0" />
    <?php echo utf8_encode($produto['nome']); ?><br/>
    <?php echo $produto['preco']; ?>
</div>
</a>
<?php endforeach; ?>
<div style="clear:both"></div>
