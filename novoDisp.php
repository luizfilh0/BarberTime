

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


<!doctype html>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/novo.css">

  <!-- Icone Pag-->

  <link rel="apple-touch-icon" sizes="180x180" href="./imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="./imagens/favicon/site.webmanifest">

  <title>barbertime.com</title>
</head>

<body>

  <!-- Menu Cabeçalho-->

  <nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto">

      <a class="navbar-brand" href="#"> <img src="./imagens/logo.png" alt="CCPC" style="height: 25px;"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

        <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="bi bi-arrow-left-square"> 
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
            <a class="nav-link active" aria-current="page" href="horariosDisp.php" target="_blank">Marcar Horário</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="horariosCliente.php" target="_blank">Meus Horários</a>
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
      </div>
    </div>
  </nav>

  <!-- TITULO PROMO -->

    <div class="col-11 m-auto">
        <h4 class="text-center text-center-ajuda">Fique de Olho!</h4>
        <p class="text-center">Sempre temos promoções rolando a cada semana, confira.</p>
    </div>
 
    <!-- Cards -->

  <div class="row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
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

  <!-- Contato email -->

  <div class="col-11 m-auto">
    <h4 class="text-center text-center-ajuda">Precisa de ajuda?</h4>
    <p class="text-center">Nos envie sua dúvida abaixo, será um prazer ajudá-lo.</p>
  </div>


  <div class="email">

    <form action="https://api.staticforms.xyz/submit" method="POST">

      <input type="hidden" name="accessKey" value="098d317e-321e-411c-b814-87c834728a3c">
      <input type="hidden" name="redirectTo" value="http://127.0.0.1:5500/index.html">

      <div class="mb-3 col-5 m-auto">
        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nome completo">
      </div>
      <span></span>

      <div class="mb-3 col-5 m-auto">
        <label for="exampleFormControlInput1" class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" name="email"
          placeholder="email@mail.com">
      </div>
      <span></span>

      <div class="mb-3 col-5 m-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Registre sua dúvida:</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Exe: Assunto: Dúvida."></textarea>
      </div>
      <span></span>

      <div class="d-grid col-1 mx-auto">
      <button class="btn btn-warning">Enviar</button>
      </div>

    </form>
  </div>
  

  <!-- Ajuda Site -->

 <!-- <div class="col-11 m-auto">
    <h4 class="text-center text-center-ajuda">Quer seu site assim?</h4>
    <p class="text-center">Seja você nosso próximo parceiro, a BarberTime está pronto para lhe ajudar.</p>
  </div> -->
 
  <!-- Ajuda Imagens -->
  <!--<div class="container col-12 mx-auto">

    <div id="img">
      <a href="https://camaracajazeirinhas.pb.gov.br/site/" target="_blank"><img src="./img/cajazeirinhas.png"
          class="rounded float-right" alt="Cajazeirinhas"></a>
    </div>

    <div id="img">
      <a href="https://www.camaracoremas.pb.gov.br/" target="_blank"><img src="./img/coremas.png"
          class="rounded float-right" alt="Coremas"></a>
    </div>

    <div id="img">
      <a href="https://pombal.pb.leg.br/" target="_blank"><img src="./img/pombal.png" class="rounded float-right"
          alt="Cajazeirinhas"></a>
    </div>
  </div>-->

  <!-- Rodapé / localização -->

  <div class="text-center2 text-center col-12 m-auto text-muted fw-light">
      © 2023 BarberTime 
      <p>
        <a href="https://goo.gl/maps/11KxhVnTf8pTQr1fA" class="address d-flex2 text-muted" target="_blank" rel="noreferrer">
          <i class="bi bi-geo-alt"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
        </i>
          Av. Getúlio Vargas, 85 - 1º andar - Centro, Coremas - PB, 58770-000.
        </a>
      </p>
  </div>
   

  <!-- Logo Whats Fixed -->

  <!--<div class="butao-whats">

      <div class="fixed-bottom logo_whats">

        <a href="https://web.whatsapp.com/" target="_blank">
          <img width="45px" src="./img/logowhats.png.png">
      </a>
      </div>
    </div>-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>