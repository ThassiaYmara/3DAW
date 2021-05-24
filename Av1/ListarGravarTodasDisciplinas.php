<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Leitura DB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <script>
    function verifica(recid) {
      if (confirm("Tem certeza que deseja excluir esse dado?")) {
        Window.location = "GravaExcluirDisciplina.php?idexc=" + recid
      }
    }
  </script>

</head>

<body>
  <h3 align="center"><i>AV1 3DAW - Listar Todas as Disciplinas</i></h3>

  <table>
    <tr>
      <td>Nome</td>
      <td>Período</td>
      <td>Pré Requisito</td>
      <td>Crédito</td>
      <td>Alterar</td>
      <td>Excluir</td>
    </tr>

    <?php

    include("conecta.php");
    // inclui na variável "seleciona" os dados da tabela 
    $seleciona = mysqli_query($conexao, "select * from disciplina order by id desc");
    // mysqli_fetch_array pega cada item no laço de repetição
    while ($campo = mysqli_fetch_array($seleciona)) { ?>
      <tr>
        <td align="center"><?= $campo["nome"] ?></td>
        <td align="center"><?= $campo["periodo"] ?></td>
        <td align="center"><?= $campo["idPreRequisito"] ?></td>
        <td align="center"><?= $campo["credito"] ?></td>
        <td align="center"><a href="AlterarDisciplina.php?editaid=<?= $campo['id'] ?>"><i class="fa fa-edit"></i></a></td>
        <td align="center"><a href="#" onclick="verifica(<?= $campo["id"] ?>)"><i class="fa fa-trash"></i></a></td>
      </tr>
    <?php   } ?>
  </table>
</body>

</html>