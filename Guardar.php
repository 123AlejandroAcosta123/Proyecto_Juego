<!doctype html>
<html lang="en">

<head>
  <title>Word Gaming</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">

</head>

<body>
 
<body background="FondoAdd.jpg" background-size="cover"> 


<style> 
body {background: ("FondoAdd.jpg" );
  background-size: cover;
}
    
</style>

<a href="Admin.php"><img src="Back22.png" width="15%" height="11%"
  style="position: fixed; top: 50%; left: 50%; transform: translate(-250%, 250%)"> 
   </a>
</body>
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

</html>
