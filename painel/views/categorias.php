<h1>Categorias</h1>
<a href="<?php echo BASE_URL;?>/painel/categorias/add" class="btn btn-default">Adicionar Categoria</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Titulot</th>
            <th width="200">Ações</th>
        </tr>
    </thead>
    <?php foreach ($categorias as $cat):?>
    <tr>
        <td><?php echo $cat['titulo']; ?></td>
        <td>
            <a href="<?php echo BASE_URL;?>/painel/categorias/edit/<?php echo $cat['id'];?>" class="btn btn-primary">Editar</a>
            <a href="<?php echo BASE_URL;?>/painel/categorias/remove/<?php echo $cat['id'];?>" class="btn btn-primary">excluir</a>

        </td>
    </tr>
    <?php endforeach; ?>
</table>