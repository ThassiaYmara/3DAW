
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
            if (confirm("Deseja ser redirecionado a página para criar?")) {
                window.location = "Criar.php";
            }
        }

        function redirecionar4() {
            if (confirm("Deseja ser redirecionado a página para listar?")) {
                window.location = "Listar.php";
            }
        }
    </script>
</head>

<body>
    <h3 class="sty"><i>3DAW - Página inicial</i></h3>
    <p>Página inicial. Escolha a opção desejada: </p>
    <div class="botaoEnviar">
        <button onclick="redirecionar1();">Criar</button> <br> <br>
        <button onclick="redirecionar4();">Listar</button><br> <br>
    </div>
    </form>

</body>

</html>