 
  <?php
 if (isset($_POST['Submit']))

  {
   include_once('config.php');

   $user = $_POST['user'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $confirmpass = $_POST['confirmpass'];
   
       
   if ($pass == $confirmpass)
   {
    $result = mysqli_query($conectar, "INSERT INTO signup(user,email,pass,confirmpass) VALUES ('$user','$email','$pass','$confirmpass')");
    $alert = "<script('ContaCriada');</script>";
    echo $alert;
   }
    
   else
   {
       $alert = "script('Estáerrado');</script>";
       echo $alert;
   }

 
  }
?>


<!DOCTYPE html>
<html lang="pt" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>www.AdoçãodeAnimais.com </title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="menu.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav id="navegar">
    <img src="../img/pataanimal.png" alt="Cat photo">
        <a href="paginainicial.html">início</a>
        <a href="Adotar.html">Adotar</a>
        <a href="Acerca.html">Acerca</a>
        <a href="Login.php">Login</a>
        <a href="signup.php">Criar conta</a>

        
        </nav>

        <div class="login">   
            <h1>Criar conta</h1>   
            <form action="" method="POST">
        <input type="text" name="user" placeholder="Digite Seu Username" required id="user">
        <br>
        <input type="email" name="email" placeholder="Digite Seu E-mail" required id="email">
        <br>
        <input type="password" name="pass" placeholder="password" required id="pass">
        <br>
        <input type="password" name="confirmpass" placeholder="Confirmar pass" required id="confirmpass">
        <br>
        <div class="Submit">
        <input type="Submit" name="Submit" id="Submit" value="Criar Conta">
 </form>
        </div>

    <script type="text/javascript" src="signUP.Js"></script>
    
</body>

</html>