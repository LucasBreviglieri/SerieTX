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
        #submit{
            width: 100%;
            background-image: linear-gradient(to right, #0800ff, rgb(71, 82, 215));
            border: 0px;
            padding: 8px;
            color: white;
            font-size: 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }



    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Edição de serie</b></legend>
                <br>

                <div class="inputBox">
                    <input type="serie" name="serie" id="serie" class="inputUser" required>
                    <label for="nome" class="labelInput">Serie</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="local" id="local" class="inputUser" required>
                    <label for="nome" class="labelInput">Local</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="box" id="box" class="inputUser" required>
                    <label for="nome" class="labelInput">box</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="qnt" id="qnt" class="inputUser" required>
                    <label for="nome" class="labelInput">Quatidade</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>





            </fieldset>
        </form>

    </div>





</body>
</html>