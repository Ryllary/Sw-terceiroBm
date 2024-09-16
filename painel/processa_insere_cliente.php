<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

<<<<<<< HEAD
    $consulta = "INSERT INTO clientes (nome_cliente, email_cliente, telefone) VALUES ('$nome', '$email', '$telefone')";
=======
    $consulta = "INSERT INTO clientes (nome_cliente,email_cliente,telefone) VALUES ('$nome','$email','$telefone')";
>>>>>>> efadc657327f8540ee69f6848062963b7c3a4e21

    $conexao->query($consulta);

    header('Location: index.php');


<<<<<<< HEAD


=======
>>>>>>> efadc657327f8540ee69f6848062963b7c3a4e21
?>