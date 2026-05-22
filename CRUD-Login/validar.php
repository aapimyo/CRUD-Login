<?php
session_start();

include("conexao.php");

// Verifica se os dados foram de fato enviados via POST
if (isset($_POST['email']) && isset($_POST['senha'])) {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // NOTA DE SEGURANÇA: Em produção, utilize Prepared Statements para evitar SQL Injection.
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $_SESSION['usuario'] = $email;
        header("Location: dashboard.php");
        exit(); // Boa prática interromper o script após um redirecionamento
    } else {
        echo "Email ou senha inválido";
    }
} else {
    header("Location: login.html");
    exit();
}
?>