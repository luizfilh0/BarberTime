<?php
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];  

    include_once ('config.php');

    $marcado = "SELECT dataCad FROM usuarios WHERE email = '$logado'";

    $resultado2 = $conexao -> query($marcado);

    $horario = mysqli_fetch_assoc($resultado2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="./imagens/favicon/site.webmanifest">
    <link rel="stylesheet" href="./style/novo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Área Cliente - Horários Disponiveis</title>
</head>

<body>

<!-- Menu Cabeçalho-->

<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto">

      <a class="navbar-brand" href="cliente.php"> <img src="./imagens/logo.png" alt="CCPC" style="height: 25px;"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

        <li class="nav-item">
            <a class="nav-link" href = "login.php" class='bx bx-log-out' id="log_out"><i class="bi bi-arrow-left-square"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
               </i>
            </a>
          </li>
      
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://web.whatsapp.com/" target="_blank">Contato</a>
        </li>
          
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="horariosDisp.php" >Marcar Horário</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="horariosCliente.php" >Meus Horários</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cliente.php">Início</a>
          </li>

          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Horários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="mei.html">Meu Horário</a></li>
              <li><a class="dropdown-item" href="irpf.html">Marcar Horário</a></li>
            </ul>
          </li>
        </ul> -->
</nav>
  

<!-- MARCAR HORARIO -->

<div class="home-section">
  <div class="container">
    <div class="text5">
      <h4>Horários Disponíveis</h4>
    </div>
      <form method = "POST" action="agendar.php" id = "agendar" class = "container">    
       
        <div class="card2">
                <div class="circle">
                <h2>13:30</h2>
        </div>
 
        <div class="content">
            <h3 id = "servico" ><p></p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "13:30">
             </div>
        </div>

        <div class="card2">
                <div class="circle">
                <h2>14:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p></p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "14:30">
             </div>
        </div>

        <div class="card2">
            <div class="circle">
                <h2>15:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p></p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "15:30">
            </div>
        </div> 

        <input type="hidden" name = "id" value = "<?php echo $logado?>">
        
        <div class = "container">
        <button type="submit" name = "marcarHorario" id = "marcarHorario" class="btn btn-warning">Marcar</button>
        </div>
        
      </form>
    </div>
</div> 

  <!-- TITULO PROMO -->

  <div class="col-11 m-auto">
    <h4 class="text-center text-center-ajuda">Fique de Olho!</h4>
    <p class="text-center">Sempre temos promoções rolando a cada semana, confira.</p>
  </div>

  <!-- CARDS PROMO -->

<div class="row row-cols-1 row-cols-md-3 g-4 col-11 m-auto promo">
  <div class="col">
    <div class="card">
      <img src="./imagens/combo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Combo Top</h5>
        <p class="card-text">Todos os dias temos descontos imperdíveis em combos, fique de olho.</p>
        <a href="horariosDisp.php">
            <button type="button" class="btn btn-warning">Ver Horários</button>
          </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagens/desconto.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Descontos</h5>
        <p class="card-text">A cada 5 cortes você ganha 15% de desconto no 6º.</p>
        <a href="horariosDisp.php">
            <button type="button" class="btn btn-warning">Ver Horários</button>
          </a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./imagens/quarta.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Quarta-feira de Promo</h5>
        <p class="card-text">Toda quarta-feira temos promoções exclusivas.</p>
        <a href="horariosDisp.php">
            <button type="button" class="btn btn-warning">Ver Horários</button>
          </a>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
</html>



