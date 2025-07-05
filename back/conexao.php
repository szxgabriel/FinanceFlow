<?php
$host = "ep-icy-water-acagigex-pooler.sa-east-1.aws.";
$port = "5432";
$dbname = "FinanceFlow";
$user = "Felipe";
$password = "npg_i9AybMq4EZIr";

try
{
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
    die("Erro de conexão com o banco: ". $e->getMessage());
}
?>