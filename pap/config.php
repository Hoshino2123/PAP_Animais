<?php


$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'site';

$conectar = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conectar->connect_erro)
{
    echo "Deu erro";
}
else
{
    echo "Conexão estabelecida";
}
?>