<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="processo.php" method="POST">
  <input type="text" name="nome" placeholder="nome" required maxlength="60">
  <input type="email" name="email" placeholder="email" required maxlength="60">
  <input type="text" name="cpf" placeholder="cpf" required maxlength="60">
  <input type="date" name="data de nascimento" placeholder="data de nascimento" required maxlength="60">
  <input type="password" name="senha" placeholder="senha" required maxlength="60">
  <input type="submit" value="enviar">
</form>
</body>
</html>
