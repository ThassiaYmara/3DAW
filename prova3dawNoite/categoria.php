<?php
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	
		
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$nomebanco= "3dawfaeterj";

		$conn = new mysqli($servidor,$usuario,$senha,$nomebanco);
		if (!$conn) 
		{
			echo "Erro de ";
		}
		
		//SQL
		$sql="SELECT * FROM categoria";
		
		$result = $conn->query($sql);
		$categoria = array();
		
		$i=0;
		
		while($db_field = $result->fetch_assoc())
		{
			$categoria[$i]= utf8_decode($db_field["NOME"]);
			$i++;
		}
		header('Content-Type: application/json; charset=utf-8 ');
		echo json_encode($categoria);
	
}

?>