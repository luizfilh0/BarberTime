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
    <link rel="apple-touch-icon" sizes="180x180" href="./imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="./imagens/favicon/site.webmanifest">
    <link rel="stylesheet" href="./style/agendamentos.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Área Cliente</title>
</head>

<body>
<div class="sidebar">
    <div class="logo-details">
    <img src="./imagens/favicon/favicon-16x16.png" alt="BarberTime">
        <div class="logo_name">BarberTime</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="horariosCliente.php">
          <i class='bx bx bx-calendar-check'></i>
          <span class="links_name">Meus Horários</span>
        </a>
         <span class="tooltip">Meus Horários</span>
      </li>

      <li>
        <a href="horariosDisp.php">
          <i class='bx bx-calendar-minus'></i>
          <span class="links_name">Horários Disponíveis</span>
        </a>
         <span class="tooltip">Horários Disponíveis</span>
      </li>

      <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Promoções</span>
       </a>
       <span class="tooltip">Promoções</span>
     </li>

      <li>
       <a href="areaCliente.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Perfil</span>
       </a>
       <span class="tooltip">Perfil</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">
                Olá,
             </div>

             <div class="job">
             <?php
                 echo $logado;
                ?>
             </div>

           </div>
         </div>
         <i > 
            <a  href = "login.php" class='bx bx-log-out' id="log_out" >
            <?php 
                //unset($_SESSION['email']);
                //unset($_SESSION['senha']);
             ?>
             </a>
        </i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Horários Disponíveis</div>

      
 <div class="container">
    <form method = "POST" action="agendar.php" id = "agendar" class = "container">
        
    <div class="card">
                <div class="circle">
                <h2>13:30</h2>
         </div>
 
        <div class="content">
            <h3 id = "servico" ><p>Cabelo </p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "13:30">
             </div>
        </div>

        <div class="card">
                <div class="circle">
                <h2>14:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p>Cabelo</p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "14:30">
             </div>
 
        </div>
        <div class="card">
            <div class="circle">
                <h2>15:30</h2>
            </div>
            <div class="content">
                <h3 id = "servico" ><p>Cabelo</p> </h3>
                <input type="radio" id = "marcar1" name = "marcar1" value = "15:30">
            </div>
            </div>
        </div> 

        <input type="hidden" name = "id" value = "<?php echo $logado?>">
        
        <div class = "container">
        <button type = "submit" name = "marcarHorario" id = "marcarHorario" > Marcar </button>
        </div>
        
     </form>

   </div>


</section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{ 
    sidebar.classList.toggle("open");
    menuBtnChange(); 
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>

 </body>
</html>



