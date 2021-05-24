<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Leitura DB</title>
  <style>
    .container {
      width: 500px;
      clear: both;
    }

    .container input {
      width: 100%;
      clear: both;
      text-align: center;
    }

    .sty {
      background-color: DodgerBlue;
      text-align: center;
    }
  </style>
</head>

<body>
  <h3 class="sty"><i>AV1 3DAW - Alterar Disciplina</i></h3>

  <?php
  include("conecta.php");
  $recid = $_GET["editaid"];
  $seleciona = mysqli_query($conexao, "select * from disciplina where id=$recid");
  $campo = mysqli_fetch_array($seleciona);
  ?>
  <div class="container">
    <form method="post" action="GravaAlterarDisciplina.php">
      <input type="hidden" name="id" value="<?= $campo["nome"] ?>">
      Inclua o nome da disciplina a ser alterada, por favor: <input type="text" name="nome" placeholder="Nome" value="<?= $campo["nome"] ?>"><br>
      <input type="submit" name="op" value="Alterar Disciplina">
    </form>
  </div>
</body>

</html>