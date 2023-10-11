<?php 
include_once('configLogin.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $caixa = $_POST['caixa'];
    $box = $_POST['box'];
    $qnt = $_POST['qnt'];

    $sqlUpdate = "UPDATE serie SET tipo='$tipo', caixa='$caixa', box='$box', qnt='$qnt' WHERE id='$id'";
    
    $result = $conexao->query($sqlUpdate);

    if ($result) {
        header('location: ../index.php');
        exit(); // Certifique-se de sair após o redirecionamento
    } else {
        echo 'Erro ao atualizar o registro.'; // Você pode exibir uma mensagem de erro aqui se necessário
    }
} else {
    echo 'Requisição inválida.'; // Você pode exibir uma mensagem de erro aqui se necessário
}
?>
