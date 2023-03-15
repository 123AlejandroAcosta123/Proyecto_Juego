<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'trabajo_grupal'

);

if(isset($conn)){
    echo "conectado";
}

?>

