<?php

session_start();
include_once ("../systen/longconexao.php");

?>



<!DOCTYPE html>
    
    <head>
    <link rel="stylesheet" type="text/css" href="../css/stytleLogin.css"/>
    <title> Login de Usuário </title>
    </head>
    
    <body>
        <p id="titulo0"> TI SUPPORT </p> 
        <p id="titulo1"> Login do Server </p>

         <?php
         
         if(isset($_SESSION['msg']) ){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
         }
         ?>

        <form method="POST" action="">
            <label id="log"> Nome:</label><input type="text" name="nome" id="nome"  pattern="[a-z\s]+$" maxlength="45" placeholder="Ex: bruno"><br><br>
            <label id="log">Login:</label><input "  type="text" name="email"  placeholder="email"  id="login" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br><br>
            <label id="sen">Senha:</label><input type="password" name="pass" id="senha"><br><br>
            <input   type="submit" value="Entrar" id="entrar"  name="Entrar" ><br><br>
            <a href="cadastro.php" id="cad">  Cadastre-se</a><br><br>
            <a href="index.php" id="cad">  Pagina Inicial </a>
            
        </form>
        
        <Span><?php echo $error; ?></Span>
    </body>
    
        <div id="div1">
                    <p id="titulo2">Email: bruno.TI.netttt5555@gmail.com </p>
                    <p id="titulo2">Telefone: 98363-3732 </p>
                   </div> 
</html>