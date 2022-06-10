<!DOCTYPE html>
<html>
    <head>
        <title>Opções</title>           
    </head>
    <body>
       <?php  
            $opcao = 's';
            switch ($opcao) {
                case 's':
                    echo "Você escolheu SIM!";
                    break;
                case 'n':
                    echo "Você escolheu NÃO!";
                    break;
                default:
                    echo "Opção Inválida!";
                    break;
            }
    ?>   
    </body>
</html
