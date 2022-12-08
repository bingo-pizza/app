<?php
//session_start();
//$_SESSION['nome'] = $nome;
//$_SESSION['cel'] = $cel;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pedir</title>
    
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <section id="menu" class="menu">
      <h1 class="heading">Escolha sua Pizza</h1>

      <div class="box-container">

        <div class="box">
          <div class="price">R$42</div>
   
          <img src="../images/pizza-1.jpg" alt="">
          <div class="name">Mussarela</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Mussarela" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$42</div>
          <img src="../images/pizza-2.jpg" alt="">
          <div class="name">Cogumelo</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Cogumelo" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$55</div>
          <img src="../images/pizza-3.jpg" alt="">
          <div class="name">Marguerita</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Marguerita" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$34</div>
          <img src="../images/pizza-4.jpg" alt="">
          <div class="name">Peruana</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Peruana" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$28,90</div>
          <img src="../images/pizza-5.jpg" alt="">
          <div class="name">Moçambique</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Mocambique" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$45,50</div>
          <img src="../images/pizza-6.jpg" alt="">
          <div class="name">Bingo</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Bingo" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$29,90</div>
          <img src="../images/pizza-7.jpg" alt="">
          <div class="name">Azeitolhonha</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Azeitolonha" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$39,49</div>
          <img src="../images/pizza-8.jpg" alt="">
          <div class="name">Champignon</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Champignon" class="btn">
          </form>
        </div>

        <div class="box">
          <div class="price">R$47,80</div>
          <img src="../images/pizza-9.jpg" alt="">
          <div class="name">Djonga</div>
          <form action="pedido.php" method="post">
            <input type="number" min="0" max="100" value="0" class="qty" name="qty">
            <input type="submit" value="Pedir" name="Djonga" class="btn">
          </form>

        </div>

      </div>
    </section>

<?php
      if(isset($_POST['Mussarela'])){
        include_once('conection.php');

        //Pedido
        $qnt = $_POST['qty'];
        $preco = 42;
        $valorTot = $qnt*$preco;

        //$_SESSION['nome'] = $nome;
        //$_SESSION['cel'] = $cel;


        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '1' WHERE quantidade = '$qnt'");

        //print_r($cel);

        echo finalizar();



      }
      else if(isset($_POST['Cogumelo'])){

        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 42;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '2' WHERE quantidade = '$qnt'");


      }
      else if(isset($_POST['Marguerita'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 55;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '3' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Peruana'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 34;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '4' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Mocambique'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 28.90;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '5' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Bingo'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 45.50;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '6' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Azeitolonha'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 29.90;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '7' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Champignon'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 39.49;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '8' WHERE quantidade = '$qnt'");
      }
      else if(isset($_POST['Djonga'])){
        include_once('conection.php');

        $qnt = $_POST['qty'];
        $preco = 47.80;
        $valorTot = $qnt*$preco;



        $cmd = mysqli_query($conexao,
        "SELECT * FROM CLIENTES");

        $comando = mysqli_fetch_array($cmd);

        $cel = $comando['tel'];

        $comand = mysqli_query($conexao,
        "INSERT INTO PEDIDO VALUES (default,sysdate(),'$valorTot','$cel')");

        $result = mysqli_query($conexao,
        "INSERT INTO ITENS_PEDIDO VALUES (default,default,'$qnt','$preco')");

        $res = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idPedido = (select max(id) from pedido) WHERE quantidade = '$qnt'");

        $r = mysqli_query($conexao,
        "UPDATE ITENS_PEDIDO SET idProd = '9' WHERE quantidade = '$qnt'");
      }
      else{exit();}

?>

  </body>
</html>