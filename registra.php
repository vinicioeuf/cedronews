<?php
    require('conexao.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $cadastra = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $stmt = $con->query($cadastra);
        echo "<script>alert('Conta criada, faça o login'); window.location.href = 'login.php';</script>";
    }
?>