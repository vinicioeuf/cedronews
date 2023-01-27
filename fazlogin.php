<?php
    require('conexao.php');
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $acessaLogin = "SELECT email, senha FROM usuario WHERE email='$email'";
        $stmt = $con->query($acessaLogin);
        $ver = $stmt->fetch_assoc();
        if($ver['email'] == $email && $ver['senha'] == $senha){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            echo "<script>alert('Login realizado, redirecionando...');</script>";
            header("Location: index.php");
            
        }else{
            echo "Credenciais incorretas";
            return false;
        }
    }
?>