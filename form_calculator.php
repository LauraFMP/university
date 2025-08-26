<?php
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");

$result = ($num01 + $num02);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário PHP</title>
  <style>
    body {
      background: #ffe8f4;
      font-family: Arial, sans-serif;
    }
    h1 {
      text-align: center;
      color: #fff;
      background: #ff62a6;
      padding: 15px;
      border-radius: 10px;
    }
    form {
      background: #fff;
      padding: 20px;
      width: 320px;
      margin: 20px auto;
      border: 4px solid #ff89bb;
      border-radius: 10px;
      box-shadow: 5px 5px 0 #d15b8f;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #4a4a4a;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 2px solid #ffb1d2;
      border-radius: 6px;
      margin-top: 5px;
      box-sizing: border-box;
    }
    input[type="submit"], button {
      background: #ff62a6;
      color: white;
      border: none;
      padding: 10px;
      margin-top: 10px;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 6px;
      box-shadow: 3px 3px 0 #d15b8f;
    }
    input[type="submit"]:hover {
      background: #ff3d95;
    }
    .resultado {
      margin: 20px auto;
      width: 320px;
      text-align: center;
      padding: 12px;
      background: #ffd1e6;
      border: 2px solid #ff62a6;
      border-radius: 6px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Exemplo de Formulário PHP</h1>

  <form method="post">
      <label>Número 1:
        <input type="text" name="txtNumero1"/>
      </label>
      <label>Número 2:
        <input type="text" name="txtNumero2"/>
      </label>
      <input type="submit" name="btnCalcular" value="Calcular">
  </form>

  <?php if ($num01 !== null && $num02 !== null): ?>
    <div class="resultado">Resultado: <?php echo $result; ?></div>
  <?php endif; ?>
</body>
</html>