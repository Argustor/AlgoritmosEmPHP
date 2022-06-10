<!DOCTYPE html>
<html>
    <head>
        <title>NMedia Do Aluno</title>           
    </head>
    <body>
       <?php  
    $prova1 = 6;
    $prova2 = 8;
    $media = ($prova1 + $prova2) / 2;
    if ($media < 3)
        echo "Precisa dar mais gás!";
    elseif ($media < 6)
        echo "Só mais um pouco!";
        elseif ($media < 9)
            echo "Mais atenção e seria 10!";
            else
                echo "O Máximo!";
    ?>   
    </body>
</html>
