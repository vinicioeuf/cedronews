<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projleo";

$con = new mysqli($servidor, $usuario, $senha, $dbname);

if($con->connect_error){
    die("ERRO");
} else{
    echo "";
}

?>