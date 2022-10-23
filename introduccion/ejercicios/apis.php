<?php

$url = 'https://api.dailymotion.com/videos?channel=sport&limit=10';

$opciones = array('ssl'=> array('verify_peer'=> false, 'verify_peer_name' => false )); //--> opciones para permitir leer en paginas seguras https

$respuesta = file_get_contents( $url, false, stream_context_create( $opciones ) ); //--> permite leer el contenido y convertirlo a un string

$objRespuesta = json_decode( $respuesta );

?>

<ul>
    <?php
        foreach( $objRespuesta->list as $indice ){
            echo '<li>'.$indice->title.' - '.$indice->channel.'</li>';
        }
    ?>
</ul>