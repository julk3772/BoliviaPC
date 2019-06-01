<?php 
    $conn = new mysqli('localhost','root','administrador','gdlwebcamp',3306);
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>