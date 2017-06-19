<div class="containerHome">
<h1>Página de login</h1>
<?php if(!empty($aviso)): ?>
    <div class="aviso"><?php echo $aviso; ?></div>
    <?php endif; ?>

<form method="POST">
    E-mail:<br/>
    <input type="email" name="email"/><br/><br/>
    
    Senha:<br/>
    <input type="password" name="senha"/><br/><br/>
    <input type="submit" value="Logar"/><br/><br/>
</form>

</div>
<div style="clear: both"></div>