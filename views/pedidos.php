<?php global $config;?>

<div class="containerHome">
<h1>Seus Pedidos</h1>
<a href="<?php echo BASE_URL ;?>/login/logout" >Sair</a>
<table border="0" width="100%">
    <tr>
        <th>Nº do pedido</th>
        <th>Valor Pago</th>
        <th>Forma de Pgto.</th>
        <th>Status do Pgto.</th>
        <th>Ações</th>
    </tr>
    <?php foreach($pedidos as $pedido): ?>
    <tr>
    <td><?php echo $pedido['id']; ?></td>
    <td>R$ <?php echo number_format($pedido['valor'],2,',','.'); ?></td>
    <td><?php echo utf8_encode($pedido['tipopgto']); ?></td>
    <td><?php echo $config['status_pgto'][$pedido['status_pg']]; ?></td>
    <td><a href="<?php echo BASE_URL ;?>/pedidos/ver/<?php echo $pedido['id']; ?>">Detalhes</a></td>
    </tr>
    
    
    <?php endforeach; ?>
    
</table>


</div>
<div style="clear: both"></div>