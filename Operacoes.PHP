<!DOCTYPE html>
<html>
    <head>
        <title>Operações Aritiméticas</title>           
    </head>
    <body>
       <?php
         $valor1 = 25;
         $valor2 = 10;
        //Operações básicas de Soma, Diferença, Multiplicação, Divisão e Resto, respectivamente.
         $soma = $valor1 + $valor2;
         $dif = $valor1 - $valor2;
         $mult = $valor1 * $valor2;
         $div = $valor1 / $valor2;
         $rst = $valor1 % $valor2;
         echo "A soma dos Valores é igual a " . $soma;
         echo "<br>A diferença dos Valores é igual a " . $dif;
         echo "<br>O produto dos Valores é igual a " . $mult;
         echo "<br>A divisão dos Valores é igual a " . $div;
         echo "<br>O resto da divisão é igual a " . $rst;
    ?>   
    </body>
</html>
