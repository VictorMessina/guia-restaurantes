<!DOCTYPE  html>
<html>
<head>
	<title> Teste de funções </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
    
<?php include "operacoes.php"; 
    
       $resultado = 4;
        $resultado2=4;
        
        echo " o resultado da soma é: ".soma($resultado,$resultado2);
        
         echo " o resultado da subtracao é: ".subtracao($resultado, $resultado2);
         
         echo " o resultado da multiplicacao é: ".multiplicar($resultado, $resultado2);
         
         echo " o resultado da divisao é: ".divisao($resultado, $resultado2);
 ?>
    
</body>

</html>
