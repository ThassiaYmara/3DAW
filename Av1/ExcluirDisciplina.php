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
        text-align:center;
      }
    .sty{
        background-color:DodgerBlue; 
        text-align:center;
    }
    </style>
</head>
<body>
<h3 align="center"><i>AV1 3DAW - Excluir Disciplina</i></h3>

<form action="GravarExcluirDisciplina.php" method="post">
    Inclua o nome da disciplina a ser excluída, por favor: 
    <input type="text" name="nome" placeholder="Nome da disciplina">  <br><br>
    <input type="submit" name="op" value="Excluir Disciplina">
</form>
</body>
</html>
