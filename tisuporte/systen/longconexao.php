<?php

$error ='';
if(isset($_POST['Entrar'])){

   $error = $_POST['nome'];



    if(empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['nome'])){

        $error = "Preencha o campo nome, email e senha ";
    }
    else
    {
     $email = $_POST['email'];
     $pass =  $_POST['pass'];
     $nome =  $_POST['nome'];
     
     $conn = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($conn,"cadastro");

     $query = mysqli_query($conn,"SELECT * FROM usuario WHERE pass='$pass' AND email='$email'  AND nome='$nome'");
     
     $rows = mysqli_num_rows($query);

         if($rows > 0){

          
            header("Location: indexLogado.php");
              $error = "ghgh";
         }
         else
         {
           
          $error = "nome,email ou senha invalido!";
         }
     
      
    }   
}


?>