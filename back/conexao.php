<?php
$host = "db.phrxdvwojlqwrhskwhzd.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "FECIP2025";

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