<?php
$PrimeiroNome = $_POST['primeironome'];
$ÚltimoNome = $_POST['últimonome'];
$Password = $_POST['password'];

//conectar
$conn = new mysqli('localhost','root','','conectardatabase');
if($conn->connect_error){
die('Connection Failed : ' $conn->connect_error);
}else{
 $stmt = $conn->prepare("insert into criarconta(PrimeiroNome, ÚltimoNome, Password) 
 value(?, ?, ?)");
 $stmt ->blind_param("sssi", $PrimeiroNome, $ÚltimoNome, $Password);
 $stmt->execute();
 echo "criar conta com sucesso...";
 $stmt->close();
 $conn->close();
?>