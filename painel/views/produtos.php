<h1>Produtos</h1>
<a href="<?php echo BASE_URL;?>/painel/produtos/add" class="btn btn-default">Adicionar Produto</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th width="110">Imagem</th>
            <th>Nome</th>
            <th width="80">Categoria</th>
            <th width="80">Preço</th>
            <th width="80">Quantidade</th>
            <th width="200">Ações</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $prod):?>
    <tr>
        <td><img src="<?php echo BASE_URL;?>/assets/images/prods/<?php echo $prod['imagem']; ?>" border="0" height="80"></td>
        <td><?php echo utf8_encode($prod['nome']) ;?></td>
        <td><?php echo utf8_encode($prod['categoria']) ;?></td>
        <td><?php echo 'R$'.($prod['preco']) ;?></td>
        <td><?php echo $prod['quantidade'] ;?></td>
        <td>
            <a href="<?php echo BASE_URL;?>/painel/produtos/edit/<?php echo $prod['id'];?>" class="btn btn-primary">Editar</a>
            <a href="<?php echo BASE_URL;?>/painel/produtos/remove/<?php echo $prod['id'];?>" class="btn btn-primary">excluir</a>

        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
$conta = ceil($total_produtos / $limit_produtos);
for($q=1;$q<=$conta;$q++): ?>

<a href="<?php echo BASE_URL;?>/painel/produtos?p=<?php echo $q;?>" class="btn btn-primary"> <?php echo $q ;?> </a>

<?php endfor; ?>
