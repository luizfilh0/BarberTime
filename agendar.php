<?php
    include_once ('config.php');
    if(isset($_POST['marcarHorario'])){
        $usuario = $_POST['id'];
        $horario = $_POST['marcar1'];
        $consulta = "UPDATE usuarios SET dataCad = '$horario' WHERE email = '$usuario' ";
        $resultado = $conexao -> query($consulta);
    }

    header('Location: horariosCliente.php');
    
?>