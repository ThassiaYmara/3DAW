<?php
session_start();

//inclusão da conexão com o BD

include_once("conecta.php");

//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
//var_dump($arquivo_tmp);

//ler arquivo para array

$dados = file($arquivo_tmp);
//var_dump($dados);

foreach($dados as $linha){
    $linha = trim($linha);
    $valor = explode(',', $linha);
    //var_dump($valor);

    $nome = $valor[0];
    $email = $valor[1];
    $senha = $valor[2];
    $tipo = $valor[3];
    $perfil = $valor[4];

 $result_usuario = "INSERT INTO usuario (nome, email, senha, tipo, perfil) VALUES ('$nome', '$email', '$senha', '$tipo', '$perfil')" ;

 mysqli_query($conexao, $result_usuario);

}

 $_SESSION['msg'] = "<p style='color: green;'>Os dados foram carregados com sucesso!</p>";

 header("Location: index.php");

