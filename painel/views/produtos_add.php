<h1>Produtos - Adicionar</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" class="form-control" placeholder="Nome do produto"><br/>
    <textarea name="descricao" class="form-control" placeholder="Descrição produto"></textarea><br/>
    <select name="categoria" class="form-control"><br/>
        <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria['id'];?>"><?php echo $categoria['titulo'];?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="preco" class="form-control" placeholder="Preço"><br/>
    <input type="text" name="quantidade" class="form-control" placeholder="Quantidade"><br/>
    <input type="file" name="imagem" class="btn btn-default"><br/>
    <input type="submit" value="Salvar" class="btn btn-default" /><br/>
    
    
</form>