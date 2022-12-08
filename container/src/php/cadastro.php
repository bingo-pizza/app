<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/php.css">
  </head>
  <body>
    <div class="box">
      <form action="login.php" method="post">
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


          <div class="input-box">
            <input type="text" name="endereco" id="endereco" class="inputUser" required/>
            <label class="label-input" for="endereco">Endereço:</label>
          </div>
          <br><br>
          

          <input type="submit" name="cadastro" id="submit" value="Cadastrar"/>
          <br><br>
         <!-- <input type="submit" name="usuario" id="submit" value="Ja tenho conta"/>          -->
         <button id="submit"><a href="login.php">Ja tenho Conta</a></button>
          
        </fieldset>
      </form>
    </div>

  </body>
</html>
