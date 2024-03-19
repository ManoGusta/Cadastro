<?php

include_once('config.php');

if (isset($_POST['submit'])) {
    // Consulta SQL para contar o número de registros na tabela
    $sql_count = "SELECT COUNT(*) AS total_registros FROM usuario";
    $result_count = mysqli_query($conexao, $sql_count);

    if ($result_count) {
        $row = mysqli_fetch_assoc($result_count);
        $total_registros = $row['total_registros'];

        // Verificar se o limite foi alcançado (5 registros permitidos)
        $limite = 5;
        if ($total_registros >= $limite) {
            die("Limite de cadastro atingido ({$limite} registros).");
        } else {
            // Continuar com a inserção no banco de dados
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $rua = $_POST['rua'];

            $result_insert = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha, cidade, estado, rua) VALUES ('$nome', '$email', '$senha', '$cidade', '$estado', '$rua')");

            if ($result_insert) {
               
            } else {
                die("Erro ao inserir registro: " . mysqli_error($conexao));
            }
        }
    } else {
        die("Erro ao contar registros: " . mysqli_error($conexao));
    }
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Faça seu cadastro!</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background: url(img/background.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Madimi One", sans-serif;
        font-size: 17px;
    }

    .navigation {
        display: flex;
        justify-content: space-between;
        padding: 15px;
        box-shadow: 10px 5px 10px black;
        width: 100%;
        align-items: center;
        color: white;
    }

    .navigation a {
        color: black;
    }

    #logout {
        font-size: 40px;
        cursor: pointer;
        transform: rotate(0);
        transition: 0.5s;
        color: white;
    }

    #logout:hover {
        transform: rotate(180deg);
    }

    .box_cadastro {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 80px;
        border-radius: 40px;
        box-shadow: 10px 10px 20px black;
        background: transparent;
        backdrop-filter: blur(10px);
    }

    .input_user {
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
        width: 100%;
        outline: none;
        font-size: 20px;
    }

    .input_user::placeholder {
        color: white;
        transform: translate(1);
    }

    .submit {
        width: 100%;
        padding: 20px;
        border-radius: 20px;
        cursor: pointer;
        background-color: black;
        color: white;
        border: none;
        transition: 0.2s;
    }

    .submit:hover {
        background-color: rgb(42, 41, 41);
        border: solid 3px white;
        letter-spacing: 3px;
    }

    @keyframes bounce {
        0% {
            opacity: 1;
        }

        10% {
            opacity: 2;
        }

        20% {
            opacity: 0;
        }
    }


    /*Animação da palavra cadastro*/

    .h1_cadastro span {
        justify-content: space-around;
        animation: bounce 3s ease infinite;
        font-size: 30px;
    }

    .h1_cadastro span:nth-child(1) {
        animation-delay: 0.2s;
    }

    .h1_cadastro span:nth-child(2) {
        animation-delay: 0.4s;
    }

    .h1_cadastro span:nth-child(3) {
        animation-delay: 0.6s;
    }

    .h1_cadastro span:nth-child(3) {
        animation-delay: 0.8s;
    }

    .h1_cadastro span:nth-child(4) {
        animation-delay: 1.0s;
    }

    .h1_cadastro span:nth-child(5) {
        animation-delay: 1.2s;
    }

    .h1_cadastro span:nth-child(6) {
        animation-delay: 1.4s;
    }

    .h1_cadastro span:nth-child(7) {
        animation-delay: 1.6s;
    }

    .h1_cadastro span:nth-child(8) {
        animation-delay: 1.8s;
    }


    /*Animação da palavra endereço*/

    .h1_endereco span {
        animation: bounce 3s ease infinite;
        font-size: 30px;
    }

    .h1_endereco span:nth-child(1) {
        animation-delay: 1.8s;
    }

    .h1_endereco span:nth-child(2) {
        animation-delay: 1.6s;
    }

    .h1_endereco span:nth-child(3) {
        animation-delay: 1.4s;
    }

    .h1_endereco span:nth-child(3) {
        animation-delay: 1.2s;
    }

    .h1_endereco span:nth-child(4) {
        animation-delay: 1.0s;
    }

    .h1_endereco span:nth-child(5) {
        animation-delay: 0.8s;
    }

    .h1_endereco span:nth-child(6) {
        animation-delay: 0.6s;
    }

    .h1_endereco span:nth-child(7) {
        animation-delay: 0.4s;
    }

    .h1_endereco span:nth-child(8) {
        animation-delay: 0.2s;
    }
</style>

<body>
    <form action="index.php" method="POST">
        <header class="navigation">
            <h2>Dev.Gusta</h2>
            <a href="sair.php">
                <i class='bx bx-log-out-circle' id="logout" type="submit"></i>
            </a>
        </header>

        <section>
            <div class="box_cadastro">
                <h1 class="h1_cadastro">
                    <span>C</span>
                    <span>a</span>
                    <span>d</span>
                    <span>a</span>
                    <span>s</span>
                    <span>t</span>
                    <span>r</span>
                    <span>o</span>
                </h1>
                <br><br>
                <input type="text" name="nome" class="input_user" placeholder="Digite seu nome">
                <br><br>
                <input type="email" name="email" class="input_user" placeholder="Digite seu e-mail">
                <br><br>
                <input type="password" name="senha" class="input_user" placeholder="Crie sua senha">
                <br><br><br>
                <h1 class="h1_endereco">
                    <span>E</span>
                    <span>n</span>
                    <span>d</span>
                    <span>e</span>
                    <span>r</span>
                    <span>e</span>
                    <span>ç</span>
                    <span>o</span>
                </h1>
                <br><br>

                <input type="text" name="cidade" class="input_user" placeholder="Cidade">
                <br><br>
                <input type="text" name="estado" class="input_user" placeholder="Estado">
                <br><br>
                <input type="text" name="rua" class="input_user" placeholder="Rua">
                <br><br>
                <input type="submit" name="submit" VALUES="Enviar" class="submit">
            </div><!--box_cadastro-->
        </section>
    </form>
</body>

</html>