
<?php 

  include_once ("../systen/chat1.php");
      
?>


<!DOCTYPE html>
<html>
<head>
  
	<link rel="stylesheet" type="text/css" href="../css/chatstyle.css">

	<title>CHAT CLIENTE </title>
</head>
<body>
	<h1><p align="center"><span style="color :#fff;">CHAT TI SUPPORT</span></center></h1>
	<div id= "conteudo">
        <div id="caixa-chat">
        	<div id="chat">

        	<div id ="dados-chat" >
        	 <span style="color: #1C62C4;">Cliente: </span>
        	 <span style="color: #848484;">Texto da Mensagem</span>

        </div>
      </div>
   </div>
    

<!--AREA DO TEXTO CLIENTE -->

<!--fetch_array para pegar toda Mensagem do banco de dados -->
<!--Mensagem que vai ficar na caixa de texto EX: (echo $dado["nome"]) -->
<form method="POST" action="">




<textarea id="cu" name="msm" >
<?php while($dado = $con->fetch_array()){
 
echo "\n\n";
echo $dado["snome"]; echo "\n";
echo $dado["serve"]; echo "\n";
echo $dado["nome"];  echo "\n";
echo $dado["client"]; 

}?>
          
</textarea><br><br>  



      <input type="text"  name="nome" ><br><br>

      <textarea id="pau" type="text" name="mensagem" placeholder="Insira uma mensagem"></textarea>

      <input type="submit" name="enviar" value="Enviar"><br><br>

      <a href="indexLogado.php" id= "pag" style="color :white;" > Página Inicial</a>


</form>
<!--FIM AREA DO TEXTO CLIENTE -->



</div>

</body>
</html>