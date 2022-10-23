<?php

$nombre = '';
$rdgLenguaje = '';

$chkphp = '';
$chkcss = '';
$chkhtml = '';

$lsAnime = '';

$comentario = '';


if( $_POST ){
    $nombre = ( isset($_POST['nombre']) ) ? $_POST['nombre']: '';
    $rdgLenguaje = ( isset($_POST['lenguaje']) ) ? $_POST['lenguaje']: '';

    $chkphp = ( isset($_POST['chkphp']) == 'si' ) ? 'checked' : '';
    $chkcss = ( isset($_POST['chkcss']) == 'si' ) ? 'checked' : '';
    $chkhtml = ( isset($_POST['chkhtml']) == 'si' ) ? 'checked' : '';

    $lsAnime = ( isset($_POST['lsAnime']) ) ? $_POST['lsAnime']: '';

    $comentario = ( isset($_POST['comentario']) ) ? $_POST['comentario']: '';

    //print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if( $_POST ) {?> <!-- codigo embebido -->
        <strong> Hola: </strong> <?php echo $nombre; ?> 
        <br />
        <strong> Lenguaje: </strong> <?php echo $rdgLenguaje; ?>
        <br />
        <strong> Aprendiendo: </strong> <br />
         - <?php echo  $chkphp == 'checked' ? 'PHP' : ''  ?> <br />
         - <?php echo  $chkcss == 'checked' ? 'CSS' : ''  ?> <br />
         - <?php echo  $chkhtml == 'checked' ? 'HTML' : ''  ?> <br />
        <strong> Anime: </strong> <?php echo $lsAnime; ?>
        <br />
        <strong> Tu Mensaje: </strong> <br /> <?php echo $comentario; ?>
    <?php } ?>

    <form action="recepcionDatos.php" method="post">

        Nombre:
        <input value="<?php echo $nombre?>" type="text" name="nombre" id="">
        <br /><br />

        ¿cual te gusta más?:
        <br /> php: <input type="radio" name="lenguaje" value="php" id="" <?php echo ($rdgLenguaje=='php')?'checked':'' ?> > <!-- Está Agregando una propiedad -->
        <br /> css: <input type="radio" name="lenguaje" value="css" id=""  <?php echo ($rdgLenguaje=='css')?'checked':'' ?> >
        <br /> html: <input type="radio" name="lenguaje" value="html" id="" <?php echo ($rdgLenguaje=='html')?'checked':'' ?> >
        <br /><br />

        Estás aprendiendo...
        <br /> php: <input type="checkbox" name="chkphp" value="si" id="" <?php echo $chkphp ?> >
        <br /> css: <input type="checkbox" name="chkcss" value="si" id="" <?php echo $chkcss ?> >
        <br /> html: <input type="checkbox" name="chkhtml" value="si" id="" <?php echo $chkhtml ?> >
        <br /><br />

        ¿Que anime te gusta?
        <select name="lsAnime" id="">
            <option value=""> Ninguna serie </option>
            <option value="naruto" <?php echo ($lsAnime == 'naruto') ? 'selected': '' ?> > Naruto </option>
            <option value="titan" <?php echo ($lsAnime == 'titan') ? 'selected': '' ?> > Attack on titan </option>
            <option value="death" <?php echo ($lsAnime == 'death') ? 'selected': '' ?> > Death note </option>
        </select>
        <br /><br />

        ¿Tienes una duda?
        <br />
        <textarea name="comentario" id="" cols="30" rows="10">
            <?php  echo $comentario; ?>
        </textarea>
        <br /><br />

        <input type="submit" value="Enviar Info">
    </form>
</body>
</html>