<?php

include("conecta.php");

$recnome = $_GET["nome"];
$recemail = $_GET["email"];
$recmatricula = $_GET["matricula"];



mysqli_query($conexao, "Insert into alunos (nome, email, matricula) VALUES ('$recnome', '$recemail', '$recmatricula')");

header("location:Listar.php");
?>


