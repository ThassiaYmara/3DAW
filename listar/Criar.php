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
    <h3 class="sty"><i>3DAW - Criar Disciplina</i></h3>
    <div class="container">
        <form method="get" action="GravarCriar.php">
            <input type="text" name="nome" placeholder="Nome"> <br><br>
            <input type="text" name="email" placeholder="Email"> <br><br>
            <input type="text" name="matricula" placeholder="Matricula"> <br><br>
            <input type="submit" name="op" value="Criar">
        </form>
    </div>
</body>

</html>