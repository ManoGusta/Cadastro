<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    header('Location: login.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
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

    .box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      transform-origin: top center;
      animation: pulse 5s infinite;
    }

    @keyframes pulse {
      0% {
        bottom: 0;
      }
      50% {
        bottom: 200px;
      }
      100% {
        bottom: 0;
      }
    }
  </style>
  <body>
    <header class="navigation">
      <h2>Dev.Gusta</h2>
      <a href="sair.php">
        <i class="bx bx-log-out-circle" id="logout" type="submit"></i>
      </a>
    </header>
    <div class="box">
      <?php
      echo "<h1> Parabéns! Você esta logado como <u>$logado</u><h1>";
      ?>
    </div>
  </body>
</html>
