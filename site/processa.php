<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $idade = $_GET['idade'];

    echo "Bom dia! <span style= 'color= red;'> ". $nome . "<span/>";
    echo "<br>";
    echo "Seu email é:  ". $email;
    echo "<br>";
    echo "Sua idade é: $idade anos de vida!! ";
    echo "<br>";

?>