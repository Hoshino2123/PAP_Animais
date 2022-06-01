
<?php


$dbHost = 'localhost';
$dbUsername= 'root';
$dbPassword="";
$dbName='site';

$conectar = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

if($conectar->connect_errno)
{
    echo "Deu erro";
}
else
{
    echo "Conexão estabelecida";
}
?>