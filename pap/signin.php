<?php
if(isset($_POST['Username'])) 
$password = $_POST['Password'];


$conn = new mysqli('localhost','root','','conectardatabase');
if($conn->connect_error){
die('Connection Failed :' .$conn->connect_error);
}
else{
 $stmt = $conn->prepare("insert into criarconta(Username, Password) 
 value(?, ?, ?)");
 $stmt ->blind_param("sssi", $Username, $Password);
 $stmt->execute();
 echo "Criada a conta com sucesso...";
 $stmt->close();
 $conn->close();
}
?>