<?php

include("conecta.php");

$recnome = $_GET["nome"];
$recperiodo = $_GET["periodo"];
$recidPreRequisito = $_GET["idPreRequisito"];
$reccredito = $_GET["credito"];


mysqli_query($conexao, "Insert into disciplina (nome, periodo, idPreRequisito, credito) VALUES ('$recnome', '$recperiodo', '$recidPreRequisito', '$reccredito')");

header("location:ListarGravarTodasDisciplinas.php");
?>


