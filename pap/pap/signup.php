 
  <?php
// if (isset($_POST['Submit']))

 // {
    // print_r('user: ' .   ($_POST['user']);
    // print_r('email: ' . ($_POST['email']);
    // print_r('pass: ' .  ($_POST['pass']);
    // print_r('confirmpass: ' . ($_POST['confirmpass']);
    
    // include_once('config.php');

    // $user = $_POST['user'];
    // $email = $_POST['email'];
    // $pass = $_POST['pass'];
    // $confirmpass = $_POST['confirmpass'];

    // $result = mysqli_query($conectar, "INSERT INTO signup(user,email,pass,confirmpass) VALUES ($user,$email,$pass,$confirmpass)");

    
 
 // }
?>


<!DOCTYPE html>
<html lang="pt" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>www.AdoçãodeAnimais.com </title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="signup.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav id="navegar">
        <a href="paginainicial.html">início</a>
        <a href="anunciar animal.html">adotar</a>
        <a href="Acerca.html">acerca</a>
        <a href="Login.php">login</a>
        <a href="signup.php">Criar conta</a>

        
        </nav>

        <div class="login">   
            <h1>Criar conta</h1>   
            <form action="signup.php" method="POST">
        <input type="text" placeholder="Digite Seu Username" required id="user">
        <br>
        <input type="text" placeholder="Digite Seu E-mail" required id="email">
        <br>
        <input type="password" placeholder="password" required id="pass">
        <br>
        <input type="password" placeholder="Confirmar pass" required id="confirmpass">
        <br>
        <div class="Submit">
        <input type="Submit" id="Submit" value="Criar Conta">
 </form>


        </div>


      
        </div>

    <script type="text/javascript" src="signUP.Js"></script>
</body>
</html>