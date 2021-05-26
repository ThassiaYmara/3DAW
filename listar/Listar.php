<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Leitura DB</title>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <h3 align="center"><i>3DAW - Listar</i></h3>

  <table>
    <tr>
      <td>Nome</td>
      <td>E-email</td>
      <td>Matrícula</td>
    </tr>

    <?php

    include("conecta.php");
    // inclui na variável "seleciona" os dados da tabela 
    $seleciona = mysqli_query($conexao, "select * from alunos order by id desc");
    // mysqli_fetch_array pega cada item no laço de repetição
    while ($campo = mysqli_fetch_array($seleciona)) { ?>
      <tr>
        <td align="center"><?= $campo["nome"] ?></td>
        <td align="center"><?= $campo["email"] ?></td>
        <td align="center"><?= $campo["matricula"] ?></td>
      </tr>
    <?php   } ?>
  </table>
</body>

</html>