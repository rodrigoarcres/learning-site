<?php

session_start();
?>


<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/stytleCadastro.css"/>
        <title> Cadastro de empregado</title>
    </head>
    
    <body>
        <p id="titulo0"> TI SUPPORT </p>
        
        <p id="titulo1"> Cadastro do Server </p>

        <?php
         if(isset($_SESSION['msg'])){
         	echo $_SESSION['msg'];
         	unset ($_SESSION['msg']);
         }

        ?>

        <form method="POST" action= "../systen/cadastro1.php">
		
                <br><br>
                <label id="nom">Nome:  &nbsp; &nbsp; </label><input type="text" name="nome" id="nome"  pattern="[a-z\s]+$" maxlength="45" placeholder="Ex: bruno"><br><br>
                <label id="lab">Email: &nbsp; &nbsp; </label><input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="45" placeholder="Ex: bruno.net@gmail.com"><br><br>
                
                <label id="cp">CPF: &nbsp; &nbsp; &nbsp; &nbsp;</label><input type="text" name="cpf" id="cpf" pattern="[0-9]+$" maxlength="11" placeholder="Ex: 10042350516"><br><br>
                <label id="tel">Telefone:</label><input type="text" name="tel" pattern="[0-9]+$" maxlength="11" placeholder="Ex: 81988867020"><br>

          
                <p id="estad">Estado:&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="estado"></p>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
                </select><br><br>

                <label id="city">Cidade: &nbsp; </label><input type="text" name="city" id="rua" pattern="[a-z\s]+$" maxlength="45" placeholder="Ex: Recife"><br><br>
                <label id="rua">Rua: &nbsp; &nbsp; &nbsp; &nbsp;</label><input type="text" name="rua" id="rua" pattern="[a-z\s]+$" maxlength="45" placeholder="Ex: Sua Rua"><br><br>

                <label id="Sen">Senha: &nbsp; &nbsp; </label><input type="password" name="pass" id="pass" maxlength="8" placeholder="Ex: abcd1234"><br><br>
				
           
                <input  type="submit" value="Cadastrar" id="cadastrar" name="Cadastrar"> <br><br>
                <a href="index.php" id="pag">  Pagina Inicial </a>
            
            
        </form>
                  
    </body>
    
             <div id="div1">
                <p id="titulo2">Email: bruno.TI.netttt5555@gmail.com </p>
                <p id="titulo2">Telefone: 98363-3732  </p>
               </div>    
</html>


