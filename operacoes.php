<?php

        function soma ($x,$y){

            $soma=$x+$y;

            return $soma;
        }

 ?>

    <?php

        function subtracao ($x,$y){

            $subtracao = $x-$y;

            return $subtracao;
        }

?>


<?php 

    function multiplicar ($x,$y){

        $multiplicacao = $x*$y;

        return $multiplicacao;
    }

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
   
?>
