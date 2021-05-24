<?php

include("conecta.php");

$recid=$_GET["idexc"];


mysqli_query($conexao, "delete from disciplina where id=$recid");

header("location:ListarGravarTodasDisciplinas.php");
