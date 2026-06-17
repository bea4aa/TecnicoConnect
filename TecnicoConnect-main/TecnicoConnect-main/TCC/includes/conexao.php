<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "tecnicoconnect";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados. Verifique se o MySQL está ligado e se o banco tecnicoconnect foi importado.");
}

$conn->set_charset("utf8mb4");
?>
