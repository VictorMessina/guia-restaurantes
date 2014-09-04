<?php

        function soma ($x,$y){

            $soma=$x+$y;

            return $soma;
        }
        
        $resultado = 4;
        $resultado2=4;
        
        echo " o resultado da soma é: ".soma($resultado,$resultado2);

 ?>

    <?php

        function subtracao ($x,$y){

            $subtracao = $x-$y;

            return $subtracao;
        }
        
        echo " o resultado da subtracao é: ".subtracao($resultado, $resultado2);

?>


<?php 

    function multiplicar ($x,$y){

        $multiplicacao = $x*$y;

        return $multiplicacao;
    }
    
     echo " o resultado da multiplicacao é: ".multiplicar($resultado, $resultado2);

?>


<?php 

    function divisao ($x,$y){

        if ($y==0){

          echo "Não existe divisao por zero";
        }

        else {

            $divisao = $x/$y;

            return $divisao;

        }
    }

     echo " o resultado da divisao é: ".divisao($resultado, $resultado2);
   
    
?>
