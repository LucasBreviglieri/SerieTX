<?php
// Inclua o arquivo de configuração do banco de dados
include_once('configLogin.php');

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    // Recupere os dados do formulário
    $tipo = $_POST['tipo'];
    $caixa = $_POST['caixa'];
    $box = $_POST['box'];
    $qnt = $_POST['qnt'];

    // Insira os dados no banco de dados
    $sqlInsert = "INSERT INTO serie (tipo, caixa, box, qnt) VALUES (?, ?, ?, ?)";
    
    // Use uma consulta preparada para evitar SQL Injection
    if ($stmt = $conexao->prepare($sqlInsert)) {
        $stmt->bind_param("ssii", $tipo, $caixa, $box, $qnt); // "ssi" significa que são duas strings e um número inteiro
        if ($stmt->execute()) {
            // Redirecionar para a mesma página após o processamento bem-sucedido
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit; // Encerrar o script atual
        } else {
            echo "Erro ao adicionar dados: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){

        $tipo = $user_data['tipo'];
        $caixa = $user_data['caixa'];
        $box = $user_data['box'];
        $qnt = $user_data['qnt'];

        }

    }else{
        header('location: ../index.php');
    }
}//else{
//header('location: ../index.php');
//}

// Feche a conexão com o banco de dados
$conexao->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Dados</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 146, 220), rgb(17, 54, 71));
        }

        .box{
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, 50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        .voltar{
            position: absolute;
            top: 0px;
            left: 50%;
            transform: translate(-50%, 50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
            text-align: center;
            font-size: 1.5rem;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
       
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput{
            top: 20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #add{
            width: 100%;
            background-image: linear-gradient(to right, #0800ff, rgb(71, 82, 215));
            border: 0px;
            padding: 8px;
            color: white;
            font-size: 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        #add:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
                <a href="../index.php" class="voltar">Voltar</a>
                <div class="box">
                    <form action="" method="POST">
                        <fieldset>
                            <legend><b>Adicionar Série</b></legend>
                            <br>

                            <div class="inputBox">
                <input type="text" name="tipo" id="tipo" class="inputUser" value="<?php echo isset($tipo) ? $tipo : ''; ?>" required>
                <label for="tipo" class="labelInput">Série</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="caixa" id="caixa" class="inputUser" value="<?php echo isset($caixa) ? $caixa : ''; ?>" required>
                <label for="caixa" class="labelInput">Caixa</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="number" name="box" id="box" class="inputUser" value="<?php echo isset($box) ? $box : ''; ?>" required>
                <label for="box" class="labelInput">Box</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="number" name="qnt" id="qnt" class="inputUser" value="<?php echo isset($qnt) ? $qnt : ''; ?>" required>
                <label for="qnt" class="labelInput">Quantidade</label>
            </div>
            <br><br>
            <input type="submit" name="add" id="add" value="Adicionar">
                <br><br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>
