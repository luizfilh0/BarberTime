<!-- Conectando BD -->

<?php
include_once 'usuarios.php';
$u = new Usuario;
?>


<!-- Começo -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/login.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="./imagens/favicon/site.webmanifest">
    <title>BarberTime</title>

</head>

<body>

<!-- Cabeçalho -->

    <header>
        <div id="titulo">
            <h1>Barber</h1>
            <h1>Time</h1>
        </div>

        <ul>
            <a href="login.php" id="conta-btn">
                <li>Já tem uma conta?</li>
            </a>
            <a href="https://www.google.com/maps/place/UNINASSAU+-+Jo%C3%A3o+Pessoa/@-7.1195356,-34.8616286,17z/data=!3m1!4b1!4m6!3m5!1s0x7acdd515ec18f43:0x6d14bf1ce44d91da!8m2!3d-7.1195356!4d-34.8594399!16s%2Fg%2F11b5zp1k75" target="_blank">
                <li>Sobre</li>
            </a>
            <a href="https://web.whatsapp.com/" target="_blank">
                <li>Contato</li>
            </a>

        </ul>
    </header>

<!-- Cadastro -->

    <main >
        <div class ="main-display-flex">

            <div class ="main-index-aside">
                <h2><span>Agende agora</span></h2>
                <h2>seu corte.</h2>
                <p>
                    Agende sem imprevistos, e deixe o resto com a gente :)
                </p>
                <form action="index.php" method="POST">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" name = "cadastrar "value="Cadastrar">
                </form>
            </div>


<!-- Logo -->

    <div class ="main-index-article">
                <img src="./imagens/logo.png" alt="BarberTime">
            </div>
                
    </div>

<!-- Mensagens Cadastro -->

<?php
    if (isset($_POST['nome'])){   

                $nome=($_POST['nome']);
                $email=($_POST['email']);
                $senha= ($_POST['senha']);
            
                if(!empty($nome) && !empty($email) && !empty($senha)){
                    $u->conectar("cadastro","localhost","root","");
            
                    if($u->msgErro== ""){
                   
                    if($u->cadastrar($nome, $email, $senha)){

                        header('location:login.php');

                    }
                    else
                    {
                        ?>
                         <div class= "msg-erro">
                        Email ja cadastrado!
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div class= "msg-erro">
                    Senhas não correspondem
                        </div>
                        <?php
                }
        
            }
            else
            {
                ?>
                <div class= "msg-erro">
                <?php echo "Erro:".$u->msgErro;?>
                    </div>
                    <?php
            }
            }
                
         
        
            ?>
 
    </main>
</body>

</html>