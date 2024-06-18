<?php
if (isset($_POST['submit'])) {
    // print_r('Email:' . $_POST['email']);
    // print_r('<br>');
    // print_r('Senha:' . $_POST['senha']);
    // print_r('<br>');
    // print_r('Nome:' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Telefone:' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo:' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento:' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade:' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado:' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço:' . $_POST['endereco']);


    include_once('conex_bd.php');

    $email =  $_POST['email'];
    $senha =  $_POST['senha'];
    $nome =  $_POST['nome'];
    $telefone =  $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc =  $_POST['data_nascimento'];
    $cidade =  $_POST['cidade'];
    $estado =  $_POST['estado'];
    $endereco =  $_POST['endereco'];


    $result = mysqli_query($con, "INSERT INTO usuarios(email,senha,nome,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$email','$senha','$nome','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(26, 27, 27), rgb(141, 15, 15));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid rgb(255, 255, 255);
            border-radius: 10px;
        }

        legend {
            border: 1px solid rgb(190, 14, 14);
            padding: 10px;
            text-align: center;
            background-color: rgb(190, 14, 14);
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: rgb(190, 14, 14);
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(190, 14, 14), rgb(119, 27, 27));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(252, 0, 0), rgb(202, 0, 0));
        }
    </style>

</head>

<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Faça seu Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>