<h1>Carrinho de compras</h1>
<table border="0" width="100%">
    <tr>
        <th align="left">Imagem</th>
        <th align="left">Nome do produto</th>
        <th align="left">Valor</th>
        <th align="left">Ações</th>
    </tr>
    <?php $subtotal = 0; ?>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><img src="<?php echo BASE_URL ; ?>/assets/images/prods/<?php echo $produto['imagem'] ;?>" border="0" width="60" /></td>
        <td><?php echo utf8_encode($produto['nome']); ?></td>
        <td><?php echo '$ '.number_format($produto['preco'],2,',','.'); ?></td>
        <td>
            <a href="<?php echo BASE_URL ; ?>/carrinho/del/<?php echo $produto['id']; ?>"><img src="<?php echo BASE_URL; ?>/assets/images/icones/remover.jpg" width="25" height="25"/></a> 
        </td>
    </tr>
    <?php $subtotal += $produto['preco']; ?>
    <?php endforeach; ?>
    <tr>
        <td colspan="2" align="right">Sub-total:</td>
        <td align="left">$ <?php echo number_format($subtotal,2,',','.'); ?></td>
        <td><a href="<?php echo BASE_URL ; ?>/carrinho/finalizar" class="finalizarCompra">Finalizar Compra</a></td>
    </tr>
</table>