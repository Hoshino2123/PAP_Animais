<?php

?>


<!DOCTYPE html>
<html lang="pt" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>www.AdoçãodeAnimais.com </title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav id="navegar">
            <a href="paginainicial.html">Início</a>
            <a href="adotar.html">Adotar</a>
            <a href="Acerca.html">Acerca</a>
            <a href="Login.php">Login</a>
            <a href="signup.php">Criar Conta</a>
        </nav>
        <div class="login"> 
            <h1>Login</h1>
            
            <form action="paginainicial.html" method="post">
            
            <input type="text" name="user" placeholder="Username" onclick="move()">
            <br><br>
            <input type="password" name="pass" placeholder="Password">
             <br><br>
             <div class="submit">
            <input type="submit"  id=submit value="Fazer Login" onclick="Login()">
            </form>
        </div>
</div>
        <script type="text/javascript"src="Login.js"></script> 
</body>

</html>

