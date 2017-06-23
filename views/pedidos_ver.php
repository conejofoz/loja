<h1>Seu Pedido</h1>
<table border="0" width="100%">
    <tr>
        <th>Nº do pedido</th>
        <th>Valor Pago</th>
        <th>Forma de Pgto.</th>
        <th>Status do Pgto.</th>

    </tr>

    <tr>
        <td><?php echo $pedido['id']; ?></td>
        <td>R$ <?php echo number_format($pedido['valor'], 2, ',', '.'); ?></td>
        <td><?php echo $pedido['tipopgto']; ?></td>
        <td><?php echo $config['status_pgto'][$pedido['status_pg']]; ?></td>
        <td><a href="<?php echo BASE_URL; ?>/pedidos/ver/<?php echo $pedido['id']; ?>">Detalhes</a></td>
    </tr>
</table>
<hr>

<?php foreach ($pedido['produtos'] as $produto): ?>
<div class="pedido_produto">
    <img src="" border="0" width="100" /><br/>
    <?php echo $produto['nome']; ?><br/>
    R$ <?php echo $produto['preco']; ?><br/>
    Quantidade: <?php echo $produto['quantidade']; ?><br/>
</div>


<?php endforeach; ?>


