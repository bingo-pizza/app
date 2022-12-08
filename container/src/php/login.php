<?php
//session_start();

if(isset($_POST['cadastro'])){

  require_once('conection.php');

/*
  $_SESSION['nome'] = $_POST['nome'];
  $nome = $_SESSION['nome'];

  $_SESSION['cel'] = $_POST['telefone'];
  $telefone = $_SESSION['cel'];
 
  $_SESSION['endereco'] = $_POST['endereco'];
  $endereco = $_SESSION['endereco'];
*/

  $nome =  $_POST['nome'];
  $telefone = $_POST['tel'];
  $endereco = $_POST['endereco'];
   

  $result = mysqli_query($conexao,
  "INSERT INTO endereco VALUES (default,'$endereco')");

  $res = mysqli_query($conexao,
  "INSERT INTO clientes VALUES ('$telefone','$nome',default)");

  $cmd = mysqli_query($conexao,
  "UPDATE clientes SET endereco = (select max(id) from endereco) WHERE tel='$telefone'");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/php.css">
  </head>
  <body>
    <div class="box">
      <form action="index.php" method="post">
        <fieldset>


          <legend><img src="../images/logo-removebg-preview.png" alt="nn achei"></legend>


          <br>
          <div class="input-box">
            <input type="text" name="nome" id="nome" class="inputUser" required/>
            <label class="label-input" for="nome">Nome:</label>
          </div>
          <br><br>


          <div class="input-box">
            <input type="text" name="tel" id="tel" class="inputUser" required/>
            <label class="label-input" for="tel">Tel:</label>
          </div>
          <br><br>


      
          

          <input type="submit" name="entrar" id="submit" value="Entrar"/>
          <br><br>
          <button id="submit"><a href="./cadastro.php">Não tenho uma Conta</a></button>
          <br><br>
         <!-- <input type="submit" name="usuario" id="submit" value="Ja tenho conta"/>          -->
         
          
        </fieldset>
      </form>
    </div>
        

  </body>
</html>
