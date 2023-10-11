<?php
session_start();

if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha)) {
        include_once('configLogin.php');

        // Use declaração preparada para evitar injeção de SQL
        $sql = "SELECT * FROM login_senha WHERE email = ? AND senha = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if (mysqli_num_rows($result) < 1) {
            // Login falhou, defina uma mensagem de erro na sessão
            $_SESSION['erro_login'] = 'Email ou senha incorretos. Tente novamente.';
            header('location: ../login.php');
            exit(); 
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: ../index.php');
            exit(); 
        }
    } else {
        // Campos em branco, defina uma mensagem de erro na sessão
        $_SESSION['erro_login'] = 'Preencha todos os campos.';
        header('location: ../login.php');
        exit(); 
    }
} else {
    // Não acessa
    header('location: ../login.php');
    exit(); 
}
?>
<script>
window.addEventListener('DOMContentLoaded', function () {
    <?php
    if (isset($_SESSION['erro_login'])) {
        echo 'displayError("' . $_SESSION['erro_login'] . '");';
        unset($_SESSION['erro_login']); // Limpa a mensagem de erro após exibi-la
    }
    ?>
});
</script>
