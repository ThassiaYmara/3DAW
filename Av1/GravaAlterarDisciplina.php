<?php

include("conecta.php");

$recid = $_GET["id"];
$recnome = $_GET["nome"];
$recperiodo = $_GET["periodo"];
$recidPreRequisito = $_GET["idPreRequisito"];
$reccredito = $_GET["credito"];


mysqli_query($conexao, "update disciplina set nome='$recnome', periodo='$recperiodo', idPreRequisito='$recidPreRequisito', credito='$reccredito', where id=$recid ");

header("location:ListarGravarTodasDisciplinas.php");
