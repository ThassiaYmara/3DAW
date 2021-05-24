<?php
session_start();
?>
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
        }

        .sty {
            background-color: DodgerBlue;
            text-align: center;
        }

        .botao {
            text-align: center;
        }

        .botaoEnviar {
            width: 350px;
            text-align: center;
            padding: 15px 20px;
            border: 1px solid #eee;
            border-radius: 6px;
            background-color: #FCC302;
            font-size: 18px;
        }
    </style>
    <script>
        function redirecionar1() {
            if (confirm("Deseja ser redirecionado a página para criar uma nova disciplina?")) {
                window.location = "CriarDisciplina.php";
            }
        }

        function redirecionar4() {
            if (confirm("Deseja ser redirecionado a página para listar todas as disciplinas?")) {
                window.location = "ListarGravarTodasDisciplinas.php";
            }
        }
    </script>
</head>

<body>
    <h3 class="sty"><i>AV1 3DAW - Página inicial</i></h3>
    <p>Página inicial de cadastro de disciplinas. Escolha a opção desejada: </p>
    <div class="botaoEnviar">
        <button onclick="redirecionar1();">Criar Disciplina</button> <br> <br>
        <button onclick="redirecionar4();">Listar Todas as Disciplina</button><br> <br>
    </div>
    </form>
    <h2>Importar dados do arquivo de usuários</h2>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="processa.php" enctype="multipart/form-data">
        <label>Arquivo</label>
        <input type="file" name="arquivo"><br><br>
        <input type="submit" name="Enviar"> <br><br>
    </form>
</body>

</html>