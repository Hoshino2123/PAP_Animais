<?php


$conn = new mysqli('localhost','root','','site');
if($conn->connect_error){
die('Connection Failed :' .$conn->connect_error);
}else{
 $stmt = $conn->prepare ("insert into conectar(Username, Password) value(?, ?)");
 $stmt ->bind_param("ss", $username, $password);
 echo "Criada a conta com sucesso...";
 $stmt->close();
 $conn->close();
}
?>