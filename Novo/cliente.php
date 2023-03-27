<?php
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/cliente.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="./imagens/favicon/site.webmanifest">

    <title>Área Cliente</title>
</head>

<body>
    <header>
        <div id="titulo">
            <h1>Barber</h1>
            <h1>Time</h1>
        </div>

        <ul>
            <a href="login.php" id="inicio-btn">
                <?php 
                    //unset($_SESSION['email']);
                    //unset($_SESSION['senha']);
                ?>
                <li>Sair</li>
            </a>
            <a href="https://www.google.com/maps/place/UNINASSAU+-+Jo%C3%A3o+Pessoa/@-7.1195356,-34.8616286,17z/data=!3m1!4b1!4m6!3m5!1s0x7acdd515ec18f43:0x6d14bf1ce44d91da!8m2!3d-7.1195356!4d-34.8594399!16s%2Fg%2F11b5zp1k75" target="_blank">
                <li>Sobre</li>
            </a>
            <a href="https://web.whatsapp.com/" target="_blank">
                <li>Contato</li>
            </a>

        </ul>
    </header>

    <main>
        
        <div class="main-display-flex">
            <aside class="main-index-aside">
                <h2><span>
                    <?php
                        echo "Bem vindo, $logado";
                    ?>
                </span></h2>
                <h2>escolha seu horário.</h2>
            </aside>
        </div>

        <label id = "calend" for="data"></label>
            <input type="date" name="data" id="data" required="">

    </main>


        <div class="container">
            <div class="card">
                <div class="circle">
                <h2>13:30</h2>
         </div>
 
        <div class="content">
            <h3 id = "servico" ><p>Cabelo + Sobrancelha </p> </h3>
                <a href="#">Marcar Horário ></a>
             </div>
        </div>

        <div class="card">
                <div class="circle">
                <h2>14:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p>Cabelo + Barba</p> </h3>
                <a href="#">Marcar Horário ></a>
             </div>
 
        </div>
        <div class="card">
            <div class="circle">
                <h2>15:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p>Cabelo + Barba + Sobrancelha </p> </h3>
                <a href="#">Marcar Horário ></a>
            </div>
        </div>
    </div> 
</div>
</body>

</html>
