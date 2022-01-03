<?php

$client = '';
$serv = '';

$nome = '';
$Snome = '';

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"chat");



if( isset($_POST['enviar']) )
{

    $nome = "CLIENTE";
    $_POST['nome'] = $nome;
    $client = $_POST['mensagem'];
    
        $result_usuario = "INSERT INTO msm (nome,client) VALUES ('$nome','$client')";
         header("Refresh:1; ");
        
}else

if( isset($_POST['Senviar']) )
{

    $Snome = "TECNICO";
    $_POST['snome'] = $Snome;
    $serv = $_POST['Smensagem'];

        $result_usuario = "INSERT INTO msm (snome,serve) VALUES ('$Snome','$serv')";
         header("Refresh:1; ");
       
}

$consulta = "SELECT * FROM msm";

$con = mysqli_query($conn,$consulta) ;

 $query = mysqli_query($conn,"SELECT * FROM msm WHERE client='$client'  AND serve='$serv' ");
 $rows = mysqli_num_rows($query);

if ($rows < 1 ) 

{

    $resultado_usuario = mysqli_query($conn,$result_usuario); 

}

?>



