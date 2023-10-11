<?php 
    if(!empty($_GET['id'])){

        include_once('configLogin.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM serie WHERE id=$id";

        $result = $conexao->query($sqlSelect);
        

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

            $tipo = $user_data['tipo'];
            $caixa = $user_data['caixa'];
            $box = $user_data['box'];
            $qnt = $user_data['qnt'];

            }

        }else{
            header('location: ../index.php');
        }
    }else{
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de dados</title>
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
        #update{
            width: 100%;
            background-image: linear-gradient(to right, #0800ff, rgb(71, 82, 215));
            border: 0px;
            padding: 8px;
            color: white;
            font-size: 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        #update:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }



    </style>
</head>
<body>
    <a href="../index.php" class="voltar">voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Edição de serie</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="tipo" id="tipo" class="inputUser" value="<?php echo $tipo ?>" required>
                    <label for="nome" class="labelInput">Serie</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="caixa" id="caixa" class="inputUser" value="<?php echo $caixa ?>" required>
                    <label for="nome" class="labelInput">caixa</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="box" id="box" class="inputUser" value="<?php echo $box ?>" required>
                    <label for="nome" class="labelInput">box</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="number" name="qnt" id="qnt" class="inputUser" value="<?php echo $qnt ?>" required>
                    <label for="nome" class="labelInput">Quantidade</label>
                </div>
                <br><br>

                <input type="hidden" name="id" value="<?php echo $id ?>">

                <input type="submit" name="update" id="update">
                <br><br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>