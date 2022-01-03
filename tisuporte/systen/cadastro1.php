<?php

session_start();

include_once ("conexao.php");

  $result_usuario = null;

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];
  $tel = $_POST['tel'];
  $estado = $_POST['estado'];
  $city = $_POST['city'];
  $rua = $_POST['rua'];
  $pass = $_POST['pass'];

  $CampoCheio = 0;


 

if ($CampoCheio = 1){
  $result_usuario = "INSERT INTO usuario (nome,email,cpf,tel,estado,city,rua,pass) VALUES ('$nome','$email','$cpf','$tel','$estado','$city','$rua','$pass')";
  $_SESSION['msg'] = "Usuario cadastrado com sucesso!! Inicie sua conta. ($CampoCheio)" ;
  header("Location: login.php");
  sleep(1); 

}

   


if(empty($nome)|| empty($email)|| empty($cpf)  || empty($tel)   || empty($city) || empty($rua) || empty($pass)){
 
 $CampoCheio = 0;
 
 $result_usuario = null;
 $_SESSION['msg'] = "Preencha todos  campos ($CampoCheio)";
 header("Location: cadastro.php");

}
else

if( strlen($cpf) <= 10  ||  strlen($tel) <= 10 ||  strlen($pass) <= 7) {

$CampoCheio = 0;

$result_usuario = null;
$_SESSION['msg'] = "(CPF ou Telefone ou Senha) Invalido!! ($CampoCheio)";
header("Location: cadastro.php");


}

else

if (!empty($nome) && !empty($email)  &&  ($cpf) > 0 && ($tel) > 0  && !empty($city) && !empty($rua) && ($pass) > 0){

  
   $CampoCheio = 1;    
   
 

}

$resultado_usuario = mysqli_query($conn,$result_usuario);  

?>