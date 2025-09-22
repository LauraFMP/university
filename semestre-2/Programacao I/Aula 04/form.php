<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #ffe8f4;
      font-family: "Press Start 2P", monospace, Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #fff;
      background: #ff62a6;
      padding: 15px;
      border: 4px solid #d15b8f;
      display: inline-block;
      margin: 20px auto;
      font-size: 14px;
      text-transform: uppercase;
      box-shadow: 5px 5px 0 #d15b8f;
    }

    .container {
      background: #fff;
      padding: 20px;
      max-width: 400px;
      margin: 20px auto;
      border: 4px solid #ff89bb;
      box-shadow: 5px 5px 0 #d15b8f;
    }

    p {
      font-size: 12px;
      margin: 12px 0;
      color: #4a4a4a;
    }

    strong {
      color: #ff62a6;
    }

    .resultado {
      margin-top: 20px;
      background: #ffd1e6;
      border: 2px solid #ff62a6;
      padding: 12px;
      font-weight: bold;
      text-align: center;
      font-size: 12px;
      box-shadow: 3px 3px 0 #d15b8f;
    }
  </style>
  <!-- Fonte retrô (opcional, precisa internet) -->
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
  <?php 
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    echo "<h1>Dados Recebidos:</h1>";
    echo '<div class="container">';
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
    echo "</div>";
  ?>
</body>
</html>