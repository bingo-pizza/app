<?php
   //session_start();
   if(isset($_POST['entrar'])){

      require_once('conection.php');


      $nome = $_POST['nome'];
      $cel = $_POST['tel'];



      //$nome = $_SESSION['nome'];
      //$cel = $_SESSION['cel'];

      //$_SESSION['nome'] = $nome;
      //$_SESSION['cel'] = $cel;
      


      $comando = mysqli_query($conexao,
      "SELECT * FROM CLIENTES 
      JOIN ENDERECO 
      ON ENDERECO.ID = CLIENTES.ENDERECO 
      where clientes.tel = '{$cel}'");

      $cmd = mysqli_fetch_array($comando);

      
      // PROCURA LA NO BANCO O ENDERECO DA PESOA COM ESSE TEL



      if(mysqli_num_rows($comando) == 0){
        //echo "Não é nosso cliente";
        header("location:cadastro.php");
      
      }
    }
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BingoPizza</title>

   <!-- link do font awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- link de estilo css -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<!-- header -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo">BingoPizza</a>

      <nav class="navbar">
         <a href="#home">HOME</a>
         <a href="#about">SOBRE NÓS</a>
         <a href="#menu">CARDÁPIO</a>
         <!--<a href="#order">PEDIDO</a>-->
         <a href="#faq">SAC</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="order-btn" class="fas fa-box"></div>
         <div id="cart-btn" class="fas fa-shopping-cart"><span>(0)</span></div>
      </div>

   </section>

</header>

<!-- header section ends -->

<div class="user-account">

   <section>

      <div id="close-account"><span>fechar</span></div>

      <div class="user">
         <?php
         echo "<p><span>$nome</span></p>";
         ?>
      </div>

      <div class="display-orders">
         <h1>Você tem 4 Cupons</h1>
         <p>Bingos10 <span>( Te da R$10 off )</span></p>
         <p>Bingos20 <span>( Te da R$20 off )</span></p>
         <p>Bingos25 <span>( Te da R$25 off )</span></p>
         <p>Bingos50 <span>( Te da R$50 off )</span></p>
      </div>

      <!--
      <div class="flex">

         <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="submit" value="login now" name="login" class="btn">
         </form>

         <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="name" required class="box" placeholder="enter your name" maxlength="20">
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="password" name="cpass" required class="box" placeholder="confirm your password" maxlength="20">
            <input type="submit" value="register now" name="register" class="btn">
         </form>

      </div>
      -->

   </section>

</div>

<div class="my-orders">

   <section>

      <div id="close-orders"><span>fechar</span></div>

      <h3 class="title"> pedidos </h3>

      <div class="box">
         <p><strong>Dia: </strong> <span>27/04/2022</span></p>

         <p><strong>Nome: </strong><span><?php 
         echo "<span>$nome</span>";?>
         </span> </p>

         <p><strong>Tel: </strong><span>
            <?php echo "<span>$cel</span>";?>
         </span></p>

         <p><strong>Endereço: </strong><span>
            <?php echo "<span>{$cmd['logrado']}</span>";?>
         </span></p>

         <p><strong>Forma de Pagamento: </strong><span>PIX</span></p>

         <p><strong>Pizzas: </strong> <span>1 Mussarela e 1 Bingo</span></p>

         <p><strong>Total: </strong><span>R$55,00</span></p>

         <p><strong>Status: </strong><span style="color: var(--red);">pending</span> </p>
         
      </div>

      <div class="box">
         <p><strong>Dia: </strong> <span>27/04/2022</span> </p>

         <p><strong>Nome: </strong><span><?php 
         echo "<span>$name</span>";?>
         </span> </p>

         <p><strong>Tel: </strong><span>
            <?php echo "<span>$cel</span>";?>
         </span></p>

         <p><strong>Endereço: </strong><span>
            <?php echo "<span>{$cmd['logrado']}</span>";?>
         </span></p>


         <p><strong>Forma de Pagamento: </strong><span>PIX</span></p>
         <p><strong>Pizzas: </strong> <span>1 Mussarela e 1 Bingo</span></p>
         <p><strong>Total: </strong><span>R$55,00</span></p>
         <p><strong>Status: </strong><span style="color: var(--red);">pending</span> </p>
      </div>

   </section>

</div>

<div class="shopping-cart">

   <section>

      <div id="close-cart"><span>fechar</span></div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="../images/pizza-1.jpg" alt="">
         <div class="content">
            <p>Mussarela <span>(R$42,00)</span></p>
            <form action="#" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="../images/pizza-3.jpg" alt="">
         <div class="content">
            <p>Marguerita <span>(R$42,00)</span></p>
            <form action="#" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="../images/pizza-6.jpg" alt="">
         <div class="content">
            <p>Bingo <span>(R$42,00)</span></p>
            <form action="#" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="../images/pizza-7.jpg" alt="">
         <div class="content">
            <p>Azeitolhona <span>(R$42,00)</span></p>
            <form action="#" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <a href="pedido.php" class="btn">Pedir</a>

   </section>

</div>



<div class="home-bg">

   <section class="home" id="home">

      <div class="slide-container">

         <div class="slide active">
            <div class="image">
               <img src="../images/home-img-1.png" alt="">
            </div>
            <div class="content">
               <h3>Pizza de pepperoni</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="../images/home-img-2.png" alt="">
            </div>
            <div class="content">
               <h3>Pizza Com Cogumelo</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="../images/home-img-3.png" alt="">
            </div>
            <div class="content">
               <h3>Azeitonas e Cogumelos</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

      </div>

   </section>

</div>

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading">sobre nós</h1>

   <div class="box-container">

      <div class="box">
         <img src="../images/about-1.svg" alt="">
         <h3>Fazemos com amor</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <!--<a href="#menu" class="btn">our menu</a>-->
      </div>

      <div class="box">
         <img src="../images/about-2.svg" alt="">
         <h3>Delivery de 30 minutos</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <!--<a href="#menu" class="btn">our menu</a>-->
      </div>
      
      <div class="box">
         <img src="../images/about-3.svg" alt="">
         <h3>Pizza para toda família</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <!--<a href="#menu" class="btn">our menu</a>-->
      </div>

   </div>

</section>


<!-- about section ends -->

<!-- menu section starts  -->

<section id="menu" class="menu">

   <h1 class="heading">cardápio</h1>

   <div class="box-container">

      <div class="box">
         <div class="price">R$<span></span>42</div>

         <img src="../images/pizza-1.jpg" alt="">
         <div class="name">Mussarela</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>42</div>
         <img src="../images/pizza-2.jpg" alt="">
         <div class="name">Cogumelo</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>55</div>
         <img src="../images/pizza-3.jpg" alt="">
         <div class="name">Marguerita</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>34</div>
         <img src="../images/pizza-4.jpg" alt="">
         <div class="name">Peruana</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>28,90</div>
         <img src="../images/pizza-5.jpg" alt="">
         <div class="name">Moçambique</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>45,50</div>
         <img src="../images/pizza-6.jpg" alt="">
         <div class="name">Bingo</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>29,90</div>
         <img src="../images/pizza-7.jpg" alt="">
         <div class="name">Azeitolhonha</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>39,49</div>
         <img src="../images/pizza-8.jpg" alt="">
         <div class="name">Champignon</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">R$<span></span>47,80</div>
         <img src="../images/pizza-9.jpg" alt="">
         <div class="name">Djonga</div>
         <form action="pedido.php" method="post">
            <!--<input type="number" min="1" max="100" value="1" class="qty" name="qty">-->
            <input type="submit" value="Pedir" name="add_to_cart" class="btn">
         </form>
      </div>

   </div>

</section>


<!-- menu section ends -->

<!-- order section starts  -->
<!--
<section class="order" id="order">

   <h1 class="heading">Pedir</h1>

   <form action="" method="post">

      <div class="display-orders">
         <p>Mussarela <span>R$-2</span></p>
         <p>Marguerita <span>R$-5</span></p>
         <p>Bingo <span>R$-4</span></p>
         <p>Djonga <span>R$-4</span></p>
      </div>

      <div class="flex">
         <div class="inputBox">
            <span>Nome:</span>
            <input type="text" name="nome" class="box" required placeholder="Nome" maxlength="20">
         </div>
         <div class="inputBox">
            <span>Número:</span>
            <input type="number" name="number" class="box" required placeholder="(11)9-9976-5542" min="0">
         </div>
         <div class="inputBox">
            <span>Pagamento:</span>
            <select name="method" class="box">
               <option value="cash on delivery">Dinheiro</option>
               <option value="credit card">Cartão de crédito</option>
               <option value="paytm">Cartão de débito</option>
               <option value="paypal">PIX</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Endereço:</span>
            <input type="text" name="flat" class="box" required placeholder="R. São João, 1000" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Complemento:</span>
            <input type="text" name="street" class="box" required placeholder="Bloco G, 131" maxlength="50">
         </div>
         <div class="inputBox">
            <span>CódigoDesconto:</span>
            <input type="number" name="pin_code" class="box" required placeholder="Bingos20" min="0">
         </div>
      </div>

      <input type="submit" value="order now" class="btn" name="order">

   </form>

</section>
-->

<!-- order section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">SAC</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <span>Quem somos...</span>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accrodion-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas. Quidem minima veniam accusantium maxime, doloremque iusto deleniti veritatis quos.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <span>Quanto tempo leva para ficar pronta?</span>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accrodion-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas. Quidem minima veniam accusantium maxime, doloremque iusto deleniti veritatis quos.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <span>Quando tem cupom novo?</span>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accrodion-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas. Quidem minima veniam accusantium maxime, doloremque iusto deleniti veritatis quos.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <span>É possível comer no restaurante?</span>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accrodion-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas. Quidem minima veniam accusantium maxime, doloremque iusto deleniti veritatis quos.
         </p>
      </div>


      <div class="accordion">
         <div class="accordion-heading">
            <span>É feito em forno a lenha?</span>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accrodion-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quas. Quidem minima veniam accusantium maxime, doloremque iusto deleniti veritatis quos.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Telefones</h3>
         <p>+55-11-97662-7480</p>
         <p>+55-11-98803-0584</p>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Endereço</h3>
         <p>São Paulo, SP - 01232010</p>
         <p>Rio de Janeiro, RJ - 22250-050</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Horario de funcionanmento</h3>
         <p>seg à seg: 18h - 01h</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email</h3>
         <p>bingoPizza@hotmail.com</p>
         <p>pizzariaBingo@gmail.com</p>
      </div>

   </div>

   <div class="credit">
       copyright &copy; 2022 by <span>Universidade Nove de Julho</span> | All rights reserved!
   </div>

</section>


<script src="../js/script.js"></script>

</body>
</html>