<?php require "vista/layout/header.php";?>
<h1>Agregar proyecto</h1>
<form action="">
    <label for="clave">Clave</label>
    <input type="text" name="clave" id="clave" maxlength="3"><br>
    <label for="clave">Nombre</label>
    <input type="text" name="nombre" id="nombre" maxlength="100" ><br>
    <label for="clave">Caratula</label>
    <input type="text" name="caratula" id="caratula">
    <input type="submit" value="Enviar">
    <input type="hidden" name="p" value="guardar">
</form>
<?php require "vista/layout/footer.php";?>