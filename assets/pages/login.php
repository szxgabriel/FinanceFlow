<?php

?>

<!DOCTYPE html>
<html lang="ptb">
<head>
    <meta charset="UTF-8">
    <title>FinanceFlow</title>
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body>
    <div class = "caixa">
      <form>
      <h2>Login</h2>
      
      <div class="campo">
      <input type="text" name = "email" id = "email" placeholder=" " required>
      <label for="email"> E-mail </label>
      </div>

      <div class="campo">
      <input type="password" name = "senha" id="senha" placeholder=" ">
      <label for="senha"> Senha </label>
      </div>

      <button type="submit" class="entrarbtn" onclick="window.location.href='/pg1/pg1.html'">Login</button>
      
    </form>
    </div>
</body>
</html>