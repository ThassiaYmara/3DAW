<?php

$valor1= $_POST['valor1'];
$valor2= $_POST['valor2'];
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
    if($valor2 != "0")
    {
        $total = $valor1 / $valor2; 
    } 
    else{
        echo "Erro, tente novamente";
    }
} 
else if($oper=="exponenciacao")
{

    for($total=1, $count=1 ; $count<=$valor2 ; $count++)
    $total *= $valor1;

}
else if($oper=="raiz")
{
    $total = sqrt($valor1); 
   
}
else if($oper=="fracao")
{
    $total = $valor1 * $valor2; 
   
}
else if($oper=="porcentagem")
{
    $total = ( $valor1  * 100 ) / $valor2; 
   
}
else{
    echo "Erro, tente novamente";
 }
echo "O resultado da operacao é: " .$total;

?>