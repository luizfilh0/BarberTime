<?php

class Usuario{

    private $pdo;
    public $msgErro = "";
    public function conectar($nome,$host,$usuario,$senha)
    {

        global $pdo;
        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch(PDOExpection $e){
            $msgErro = $e-> getMessage();
        }
       
    }


    public function cadastrar($nome, $email, $senha,)
{

    global $pdo;

    $sql= $pdo -> prepare("SELECT email FROM usuarios WHERE Email = :e");
    $sql->bindvalue(":e",$email);
    $sql->execute();

    if($sql->rowCount() > 0)
{
    return false;

}
else{

$sql = $pdo->prepare("INSERT INTO usuarios (nome,email,senha) 
VALUES (:n, :e,:s)");
 $sql->bindvalue(":n",$nome);
 $sql->bindvalue(":e",$email);
 $sql->bindvalue(":s",$senha);

 $sql->execute();

 return true;

}


}

    public function logar($email,$senha)
{

    global $pdo;

    $sql = $pdo -> prepare("SELECT email FROM usuarios WHERE email = :e AND senha =:s");
    $sql->bindvalue(":e", $email);
    $sql->bindvalue(":s", $senha);
    $sql->execute();

    if($sql->rowCount() > 0)
    {
        $dado = $sql -> fetch();
        session_start();
        $_SESSION['email']= $dado['email'];
        return true;
    }

    else{
        return false;

    }


}

}

?>