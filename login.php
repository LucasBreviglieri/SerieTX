<?php 
session_start();

if (isset($_SESSION['erro_login'])) {
    $erro_login = $_SESSION['erro_login'];
    unset($_SESSION['erro_login']); // Limpa a mensagem de erro após exibi-la
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Projeto Serie Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        /* Estilo para a mensagem de erro */
        .text-danger {
            color: #ff0000; /* Cor do texto vermelho para indicar erro */
            font-size: 16px; /* Tamanho da fonte da mensagem de erro */
            margin-top: 10px; /* Espaço superior para afastar a mensagem do formulário */
            text-align: center; /* Alinhar a mensagem ao centro */
        }

        .error-container {
            background-color: #ff0000; /* Cor de fundo vermelho */
            color: #fff; /* Cor do texto branco */
            padding: 10px; /* Espaçamento interno para espaçamento ao redor da mensagem */
            border-radius: 5px; /* Cantos arredondados */
            text-align: center; /* Alinhar o texto ao centro */
            margin: 10px 0; /* Espaço superior e inferior para afastar a mensagem do formulário */
            position: relative; /* Defina a posição como relativa */
        }

        #submit {
            width: 100%;
            background-image: linear-gradient(to right, #0800ff, rgb(71, 82, 215));
            border: nome;
            padding: 6px;
            color: white;
            font-size: 20px;
            border-radius: 12px;
        }
    </style>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login do sistema</h3></div>
                            <div class="card-body">
                                <?php
                                if (isset($erro_login)) {
                                    echo '<div class="error-container">';
                                    echo '<p class="error-message">' . $erro_login . '</p>';
                                    echo '</div>';
                                }
                                ?>
                                <form action="banco/testeLogin.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input name="email" class="form-control" id="inputname" type="name" placeholder="name@example.com" />
                                        <label for="inputname">Matricula</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="senha" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Lembrar senha</label>
                                    </div>

                                    <input type="submit" name="submit" id="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    // Função para exibir a mensagem de erro e depois escondê-la após 2 segundos
    function displayError(message) {
        const errorContainer = document.querySelector('.error-container');
        errorContainer.innerHTML = '<p class="error-message">' + message + '</p>';
        errorContainer.style.display = 'block';

        // Esconde a mensagem de erro após 2 segundos (2000 milissegundos)
        setTimeout(function () {
            errorContainer.style.display = 'none';
        }, 1000);
    }

    // Chame a função displayError quando a página for carregada
    window.addEventListener('DOMContentLoaded', function () {
        <?php
        if (isset($erro_login)) {
            echo 'displayError("' . $erro_login . '");';
        }
        ?>
    });
</script>
</body>
</html>