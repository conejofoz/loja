<h1>Produtos - Editar</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" value="<?php echo $produto['nome'] ;?>" class="form-control" placeholder="Nome do produto"><br/>
    <textarea name="descricao" class="form-control" placeholder="Descrição produto" value="<?php echo $produto['quantidade'] ;?>"></textarea><br/>
    <select name="categoria" class="form-control">
        <?php foreach ($categorias as $categoria): ?>
        <option <?php echo ($categoria['id']==$produto['id_categoria'])?'selected="selected"':'';?> value="<?php echo $categoria['id'];?>"><?php echo $categoria['titulo'];?></option>
        <?php endforeach; ?>
    </select><br/>
    <input type="text" name="preco" value="<?php echo $produto['preco'] ;?>" class="form-control" placeholder="Preço"><br/>
    <input type="text" name="quantidade" value="<?php echo $produto['quantidade'] ;?>" class="form-control" placeholder="Quantidade"><br/>
    <input type="file" name="imagem" value="<?php echo $produto['imagem'] ;?>" class="btn btn-default"><br/>
    <img src="<?php echo BASE_URL ;?>/assets/images/prods/<?php echo $produto['imagem'] ;?>" border="0" height="100"/><br/>
    <input type="submit" value="Salvar" class="btn btn-default" /><br/>
    
    
</form><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

