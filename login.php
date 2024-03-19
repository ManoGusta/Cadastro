<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<style>
    *{
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

    .container{
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

    #input_required{
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
        width: 100%;
        outline: none;
        font-size: 20px;
    }

    #input_required::placeholder{
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

    h1{
        margin-bottom: 50px;
    }

    h1 span{
       animation: bounce 3s linear infinite;
    }

    h1 span:nth-child(1){
        animation-delay: 0.2s;
    }

    h1 span:nth-child(2){
        animation-delay: 0.4s;
    }

    h1 span:nth-child(3){
        animation-delay: 0.6s;
    }

    h1 span:nth-child(4){
        animation-delay: 0.8s;
    }

    h1 span:nth-child(5){
        animation-delay: 1s;
    }

</style>

<body>
<header class="navigation">
        <h2>Dev.Gusta</h2>
        <a href="sair.php">
            <i class='bx bx-log-out-circle' id="logout" type="submit"></i>
        </a>
    </header>
    <div class="container">

        <h1>
            <span>L</span>
            <span>o</span>
            <span>g</span>
            <span>i</span>
            <span>n</span>
        </h1>
        <form action="testLogin.php" method="POST">
            <input type="email" name="email" placeholder="Digite seu email" id="input_required">
            <br><br>
            <input type="password" name="senha" placeholder="Digite sua senha" id="input_required">
            <br><br>
            <input type="submit" name="submit" class="submit" value="enviar">
        </form>
    </div>
</body>
