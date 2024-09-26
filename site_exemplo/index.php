<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste PHP</h1>
    <?php
        // $nome = 'Giuu';
        // //echo "Hello world";
        // echo "<p>Bem vindo(a) $nome</p>";
        // $a = 10;
        // $b = 20;
        // $soma = $a + $b;
        // echo "a soma de $a + $b é igual a $soma";
        // echo "<br>";

        // $status = '' ;

        // if($status){
        //     echo "<h2>Está ativo<h2>";
        // }
        // else{
        //     echo "<h2>Está desligado<h2>";
        // }

        echo "<hr>";

        for($i=1; $i<=100; $i++){
            if($i%2 == 0){
                echo "$i <br>";
            }
            
        }

    ?>
</body>
</html>