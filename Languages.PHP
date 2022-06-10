<!DOCTYPE html>
<html>
    <head>
        <title>PHP e Python</title>   
        <style>/* Seu CSS funciona aqui! */</style> 
    </head>
    <body>
    <?php
    $languages = array();
    $languages['PHP'] = array(
        "primeira_versão" => "1995",
        "ultima_versão" => "7.4.7",
        "desenvolvida_by" => "Rasmus Lerdorf",
        "descrição" => array(
            "extensão" => ".php",
            "license" => "PHP License (most of Zend engine under Zend Engine License)"
        )
    );
    
    $languages['Python'] = array(
        "primeira_versão" => "1991",
        "ultima_versão" => "3.8.0",
        "desenvolvida_by" => "Guido van Rossus",
        "descrição" => array(
            "extensão" => ".py",
            "license" => "Python Software Foundation License"
        )
    );
    print_r($languages);
    ?>
        <script>/* Seu JavaScript funciona aqui! */ </script>
    </body>
</html>
