<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<a href="exercicio2.php"> exercicio2 </a>

  <h1>Exercicio 1</h1>
  
</div>

<?php

    $numero1 = 10;
    $numero2 = 20;
    $operacao = "soma";
    $resultad = 0;


    if($operacao == "divisão"){
        $resultado = $numero1 / $numero2;
        
        echo "O resultado dessa divisão é: $resultado ";
    }

    else if ($operacao == "multiplicação"){
        $resultado = $numero1 * $numero2;
        
        echo "O resultado dessa multiplicação é: $resultado ";
    }

    else if ($operacao == "subtração"){
        $resultado = $numero1 - $numero2;
        
        echo "O resultado dessa subtração é: $resultado ";
    }

    else if ($operacao == "soma"){
        $resultado = $numero1 + $numero2;
        
        echo "O resultado dessa soma é: $resultado ";
    }
?>

  <script src= "bootstrap.bundle.min.js"></script>
</body>
</html>