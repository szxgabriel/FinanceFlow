<?php
require_once '../../back/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($senha != $confirmar_senha)
{
    echo "As senhas não coincidem";
    exit;
}

$sqlverifica = "SELECT id FROM usuarios WHERE email = :email";
$stmtverifica = $pdo->prepare($sqlverifica);
$stmtverifica->execute([':email' => $email]);
if($stmtverifica->rowCount() > 0)
{
    echo "Esse E-mail já foi cadastrado";
    exit;
}
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";
$stmt = $pdo->prepare($sql);
try
{
    $stmt->execute([
        ' :nome' => $nome,
        ' :email' => $email,
        ' :senha' => $senhaHash
    ]);
    echo "Usuário cadastrado com sucesso";
}
catch(PDOException $e)
{
    echo "Erro ao cadastrar: ". $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ptb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/registro.css">
    <title>Document</title>
</head>
<body>
    <div class = "caixa">  
        <form action="registro.php" method="POST">
        <h2>Registrar-se</h2>
        
        <div class="campo">
        <input type="text" name = "nome" id = "nome" placeholder=" " required>
        <label for="nome">Nome de usuário</label>
        </div>

        <div class="campo">
        <input type="text" name = "email" id = "email" placeholder=" " required>
        <label for="email"> E-mail </label>
        </div>
  
        <div class="campo">
        <input type="password" name = "senha" id="senha" placeholder=" " required>
        <label for="senha">Senha</label>
        </div>

        <div class="campo">
        <input type="password" name = "confirmsenha" id="confirmsenha" placeholder=" " required>
        <label for="confirmsenha">Confirmar senha</label>
        </div>

        <button type="submit" class="entrarbtn" onclick="window.location.href='/pg1.php'">Registrar</button>
        
      </form>
      </div>
</body>
</html>