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
    <h3 class="sty"><i>AV1 3DAW - Criar Disciplina</i></h3>
    <div class="container">
        <form method="get" action="GravarCriarDisciplina.php">
            <input type="text" name="nome" placeholder="Nome da disciplina"> <br><br>
            <input type="text" name="periodo" placeholder="Periodo"> <br><br>
            <input type="text" name="idPreRequisito" placeholder="Pre Requisito"> <br><br>
            <input type="text" name="credito" placeholder="Credito"> <br><br>
            <input type="submit" name="op" value="Criar Disciplina">
        </form>
    </div>
</body>

</html>