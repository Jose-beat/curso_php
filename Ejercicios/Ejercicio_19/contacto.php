<?php require_once 'includes/header.php'; ?>
<?php echo $variable ?>
<p>Contacta con nosotros</p>
<form method="POST">
    <input type="text" name="nombre">
    <input type="email" name="email">
    <input type="submit" value="Enviar">
</form>
<?php require_once 'includes/footer.php' ?>