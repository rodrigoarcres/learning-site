
<?php 

  include_once ("../systen/chat1.php");
      
?>


<!DOCTYPE html>
<html>
<head>
  <!--<meta http-equiv="refresh" content="20">-->
	<link rel="stylesheet" type="text/css" href="../css/chatstyle.css">
   
	<title>CHAT SERVE</title>
</head>
<body>
	<h1><p align="center"><span style="color :#fff;">CHAT TI SUPPORT</span></center></h1>
	<div id= "conteudo">
        <div id="caixa-chat">
        	<div id="chat">

        	<div id ="dados-chat" >
        	 <span style="color: #1C62C4;">Serve: </span>
        	 <span style="color: #848484;">Texto da Mensagem</span>

        </div>
      </div>
   </div>

   
     <form method="POST" action="">
<textarea id="cu" name="msm" ><?php while($dado = $con->fetch_array()){?>
<?php echo $dado["nome"]; ?> 
<?php echo $dado["client"]; ?>
<?php echo $dado["snome"]; ?>

<?php echo $dado["serve"]; ?> 

<?php } ?>
</textarea><br><br>      
      <input type="text"  name="Snome" ><br><br>

      <textarea id="pau"  type="text" name="Smensagem" placeholder="Insira uma mensagem"></textarea>
      <input type="submit" name="Senviar" value="Enviar"><br><br>

      <a href="indexLogado.php" id= "pag" style="color :white;" > Página Inicial</a>
        
     	</form>
    
   </div>

</body>
</html>