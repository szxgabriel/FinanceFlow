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
        <form>
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