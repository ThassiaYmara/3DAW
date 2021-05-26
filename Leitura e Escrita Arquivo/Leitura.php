<?php
echo "Leitura de Arquivos";
echo "<br><br>";

$arquivo = fopen("alunos.csv", "r") or die("Não consegui abrir o arquivo, deu erro. Tente novamente");

while (!feof($arquivo))
{
    echo fgets($arquivo);
    echo "<br>";

}
if (feof($arquivo)) {
    echo "final de arquivo ou Arquivo vazio";
}
fclose($arquivo);
?>
