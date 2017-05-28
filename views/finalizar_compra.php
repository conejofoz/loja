<h1>Finalizar Compra</h1>
<form method="POST">
<fieldset>
    <legend>informações do usuário</legend>
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    
    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>
    
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>
</fieldset>
<br/>

<fieldset>
    <legend>informações de Endereço</legend>
    <textarea name="endereco"></textarea>
</fieldset>
<br/>

<fieldset>
    <legend>Resumo da compra</legend>
    Total a pagar: $<?php echo $total; ?>
</fieldset>

<fieldset>
    <legend>informações de Pagamento</legend>
    <?php foreach($pagamentos as $pg): ?>
    <input type="radio" name="pg" value="<?php echo $pg['id'] ; ?>" /><?php echo $pg['nome'] ; ?>
    <?php endforeach; ?>
</fieldset>
<br/>

<input type="submit" value="Efetuar Pagamento"
</form>