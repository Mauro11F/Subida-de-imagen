<?php

    if ( !empty($_FILES['imagen']['name']) ) {
        move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes/". $_FILES['imagen']['name']);
        echo "El archivo se subio con exito";
    }else {
        echo "No existe el archivo o ocurrio algun problema";
    }
?>
