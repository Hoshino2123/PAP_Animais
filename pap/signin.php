<?php


$conn = new mysqli('localhost','root','','site');
if($conn->connect_error){
die('Connection Failed :' .$conn->connect_error);
}else{
 $stmt = $conn->prepare ("insert into conectar(user_name, password) value(?, ?, ?)");
 $stmt ->bind_param("ss", $user_name, $password);
 $stmt->execute();
 echo "Criada a conta com sucesso...";
 $stmt->close();
 $conn->close();
}
?>