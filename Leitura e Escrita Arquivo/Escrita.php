<?php
echo "<h2>escrita de Arquivo</h2>";
echo "<br>";
$arquivoSaida = fopen("alunos.csv", "w");
$linhaArquivo = "nome;email;endereco;matricula\n";
fwrite($arquivoSaida, $linhaArquivo);
$linhaArquivo = "Antonio Exemplo;toninho@gmail.com;rua das zero um;20211188888\n";

fwrite($arquivoSaida, $linhaArquivo);

fclose($arquivoSaida);