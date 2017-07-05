<h1>Venda</h1>
<h3>Produtos da venda</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Qtd.</th>
            <th>Preço</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $prod):?>
    <tr>
        <td width="100"><img src="<?php echo BASE_URL;?>/assets/images/prods/<?php echo $prod['imagem']; ?>" border="0" width="100"/></td>
        <td><?php echo $prod['nome']; ?></td>
        <td><?php echo $prod['quantidade']; ?></td>
        <td><?php echo $prod['preco']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>