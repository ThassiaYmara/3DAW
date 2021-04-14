<?php

$valor2= $_POST['valor2'];
$valor1= $_POST['valor1'];
$oper = $_POST['oper'];
$total=0;

if($oper=="adicao")
{
    $total = $valor1 + $valor2; 

}
else if($oper=="subtracao")
{
    $total = $valor1 - $valor2; 
    
}
else if($oper=="multiplicacao")
{
    $total = $valor1 * $valor2; 
   
}
else if($oper=="divisao")
{
    $total = $valor1 / $valor2; 
}
echo "O resultado da operacao é: " .$total;

?>