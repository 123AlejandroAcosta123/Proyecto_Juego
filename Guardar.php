<?php

include ("base_datos.php");

if (isset($_POST['Guardar'])){

    $Nombre = $_POST['Nombre'];
    $Caracteristica = $_POST['Caracteristica'];

    $query = "INSERT INTO juegos(Nombre, Caracteristica) VALUES ('$Nombre', '$Caracteristica')";
    $resultado = mysqli_query($conn, $query);

    if(!$resultado){
        die("Ha fallado");
    }

     $_SESSION['message'] = 'Juego guardado';
     $_SESSION['message_type'] = 'success';

    header("location: index.php");
}

?>